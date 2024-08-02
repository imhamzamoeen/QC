<?php

namespace App\Imports;

use App\Models\LBLRateInsurance;
use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class LBLInsuranceImport implements ToCollection
{
    protected $rowsCount = 0, $columns = [], $gender, $smoker_status, $fk;

    public function __construct($gender, $smoker_status = NULL, $fk)
    {
        $this->gender = $gender;
        $this->smoker_status = $smoker_status;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);

        $firstRow = [];

        foreach ($collection as $key => $value) {
            if (str_contains($value[0], 'Issue') && $value[1] != null) {          //yeh first main heading wali row nhe h 
                $firstRow = $value;     //heading row
                // dd($firstRow);
            } else if (gettype($value[0]) == 'integer') {
                // dd($firstRow, $tags, $value);
                for ($i = 0; $i < count($firstRow) - 1; ++$i) {
                    if ($firstRow[$i + 1] != null && gettype($value[0]) == 'integer') {
                        if (!is_null($value[$i + 1])) {
                            PolicyRate::updateOrCreate(
                                [
                                    'age' => $value[0],
                                    'face_amount' => $firstRow[$i + 1],
                                    'gender' => $this->gender,
                                    'smoker_status' =>  $this->smoker_status,
                                    'company_policy_id' => $this->fk
                                ],
                                [
                                    'age' => $value[0],
                                    'monthly_premium' => $value[$i + 1],
                                    'face_amount' =>  $firstRow[$i + 1],
                                    'gender' => $this->gender,
                                    'smoker_status' =>  $this->smoker_status,
                                    'company_policy_id' => $this->fk
                                ]
                            );
                        }
                    }
                }
            }
        }
    }
}
