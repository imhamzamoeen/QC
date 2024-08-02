<?php

namespace App\Imports;

use App\Models\PolicyRate;
use App\Models\SIWL;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SiwlInsuranceImport implements ToCollection
{
    protected $faceAmount, $fk;
    public function __construct($faceAmount, $fk)
    {
        $this->faceAmount = $faceAmount;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        $smokeTags = [];
        $genderTags = [];
        foreach ($collection as $key => $value) {
            if ($key == 0)
                $smokeTags = $value;
            else if ($key == 1)
                $genderTags = $value;
            else {
                // dd('smoke series', $smokeTags, 'gender tag', $genderTags, 'current iteration', $value);
                for ($i = 0; $i < count($genderTags) - 1; ++$i) {
                    if (!is_null($value[0])) {
                        PolicyRate::updateOrCreate(
                            [
                                'age' => $value[0],
                                'face_amount' => NULL,
                                'gender' => $genderTags[$i + 1] == 'Male' ? 'male' : 'female',
                                'smoker_status' => ($i < 2) ? 'non-smoker' : 'smoker',
                                'company_policy_id' => $this->fk
                            ],
                            [
                                'age' => $value[0],
                                'monthly_premium' => $value[$i + 1] ,
                                'face_amount' => NULL,
                                'gender' => $genderTags[$i + 1] == 'Male' ? 'male' : 'female',
                                'smoker_status' => ($i < 2) ? 'non-smoker' : 'smoker',
                                'company_policy_id' => $this->fk
                            ]
                        );
                    }
                }
            }
        }
    }
}
