<?php

namespace App\Imports\HeightsWeights;

use App\Models\HeightWeightModel;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class SeniorLifeInsuranceImport implements ToCollection
{

    function getStringBetween($str, $from, $to)
    {
        $sub = substr($str, strpos($str, $from) + strlen($from), strlen($str));
        return substr($sub, 0, strpos($sub, $to));
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $key => $value) {
            if ($key >= 2) {
                if ($value[0] !== null) {
                    if (str_contains($value[0], 'below')) {
                        $inches = $this->getStringBetween(str_replace(' ', '', $value[0]), "'", '"');
                        $totalInches = (int)$inches + (int)(strtok($value[0], "'")) * 12;
                        HeightWeightModel::create([
                            'max_height' => $totalInches,
                            'max_weight' => $value[1]
                        ]);
                    } else if (str_contains($value[0], '-')) {
                        $firstPart = strtok($value[0], "-");
                        $secondPart = $this->getStringBetween($value[0], '-', '"') . '"';
                        $firstPartInches = $this->getStringBetween(str_replace(' ', '', $firstPart), "'", '"');
                        $secondPartInches = $this->getStringBetween(str_replace(' ', '', $secondPart), "'", '"');
                        $minHeight = (int)$firstPartInches + (int)(strtok($firstPart, "'")) * 12;
                        $maxHeight = (int)$secondPartInches + (int)(strtok($secondPart, "'")) * 12;
                        HeightWeightModel::create([
                            'min_height' => $minHeight,
                            'max_height' => $maxHeight,
                            'max_weight' => $value[1]
                        ]);
                    } else {
                        $inches = $this->getStringBetween(str_replace(' ', '', $value[0]), "'", '"');
                        $totalInches = (int)$inches + (int)(strtok($value[0], "'")) * 12;
                        HeightWeightModel::create([
                            'min_height' => $totalInches,
                            'max_height' => $totalInches,
                            'max_weight' => $value[1]
                        ]);
                    }
                }
            }
        }
    }
}
