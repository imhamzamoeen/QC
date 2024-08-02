<?php

namespace App\Imports;

use App\Models\DigitalAgent;
use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DigitalAgentImport implements ToCollection
{
    protected $fk;
    public function __construct($fk)
    {
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        $priceTags = [];
        $smokerTags = [];
        $genderTags = [];
        foreach ($collection as $key => $value) {
            # code...
            if ($key == 0) {
                $genderTags = $value;
            } else if ($key == 1) {
                $priceTags = $value;
            } else if ($key == 2) {
                $smokerTags = $value;
            } else {
                // dd('genderTags', $genderTags, 'priceTags', $priceTags, 'smokerTags', $smokerTags, 'value', $value);
                for ($i = 0; $i < count($value); ++$i) {
                    if (!in_array($smokerTags[$i], ['age', 'AGE']) && !is_string($priceTags[$i])) {
                        PolicyRate::updateOrCreate(
                            [
                                'age' => $value[10],
                                'face_amount' => $priceTags[$i] ?? $priceTags[$i + 1],
                                'smoker_status' => $smokerTags[$i] == 'NT' ? 'non-smoker' : 'smoker',
                                'gender' => $i < 11 ? 'male' : 'female',
                            ],
                            [
                                'age' => $value[10],
                                'face_amount' => $priceTags[$i] ?? $priceTags[$i + 1],
                                'smoker_status' => $smokerTags[$i] == 'NT' ? 'non-smoker' : 'smoker',
                                'monthly_premium' => $value[$i] ?? 'NA',
                                'gender' => $i < 11 ? 'male' : 'female',
                                'company_policy_id' => $this->fk
                            ]
                        );
                    }
                }
            }
        }
    }
}
