<?php

namespace App\Imports;

use App\Models\PolicyRate;
use App\Models\TrinityInsurance;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class TrinityInsuranceImport implements ToCollection
{
    protected $gender, $fk;
    public function __construct($gender, $fk)
    {
        $this->gender = $gender;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        $smokerTags = [];
        $priceTags = [];
        foreach ($collection as $key => $value) {
            if ($key == 0) {
                $smokerTags = $value;
            } else if ($key == 1) {
                array_push($priceTags, 'age');
                foreach ($value as $key => $price) {
                    if ($key > 0) {
                        $str = str_replace("$", "", $price);
                        $str2 = str_replace("K", "000", $str);
                        array_push($priceTags, $str2);
                    }
                }
                dd($priceTags);
            } else {
                // dd('smoker tags', $smokerTags, 'price tags', $priceTags, $value);
                for ($i = 1; $i < count($value); ++$i) {
                    PolicyRate::updateOrCreate(
                        [
                            'age' => $value[0],
                            'face_amount' => $priceTags[$i],
                            'gender' => $this->gender,
                            'smoker_status' => $i < 6 ? 'non-smoker' : 'smoker',
                            'company_policy_id' => $this->fk
                        ],
                        [
                            'age' => $value[0],
                            'face_amount' => $priceTags[$i],
                            'monthly_premium' => $value[$i],
                            'gender' => $this->gender,
                            'smoker_status' => $i < 6 ? 'non-smoker' : 'smoker',
                            'company_policy_id' => $this->fk
                        ]
                    );
                }
            }
        }
    }
}
