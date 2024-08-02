<?php

namespace App\Imports;

use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class HeritageInsuranceImport implements ToCollection
{
    protected $smokerStatus, $faceAmount, $fk;
    public function __construct($smokerStatus = NULL, $faceAmount, $fk)
    {
        $this->smokerStatus = $smokerStatus;
        $this->faceAmount = $faceAmount;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $key => $value) {
            if ($key > 2) {
                $counter = 2;
                for ($i = 0; $i < $counter; ++$i) {
                    $j = 0;
                    while ($j < 2) {
                        $i == 0 ? $index = 0 : $index = 3;
                        if (!is_null($value[$index])) {
                            PolicyRate::updateOrCreate(
                                [
                                    'age' => $value[$index],
                                    'face_amount' => $this->faceAmount,
                                    'gender' => ($j + 1) % 2 == 0 ? 'female' : 'male',
                                    'smoker_status' => $this->smokerStatus,
                                    'company_policy_id' => $this->fk
                                ],
                                [
                                    'age' => $value[$index],
                                    'face_amount' => $this->faceAmount,
                                    'monthly_premium' => $value[$j + $index + 1],
                                    'gender' => ($j + 1) % 2 == 0 ? 'female' : 'male',
                                    'smoker_status' => $this->smokerStatus,
                                    'company_policy_id' => $this->fk
                                ]
                            );
                        }
                        $j++;
                    }
                }
            }
        }
    }
}
