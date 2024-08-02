<?php

namespace App\Imports;

use App\Models\AmamRateInsurance;
use App\Models\PolicyRate;
use Maatwebsite\Excel\Concerns\ToModel;

class AmamInsuranceImport implements ToModel
{
    protected $rowsCount = 0, $columns = [], $gender, $smoker_status, $fk;

    public function __construct($gender, $smoker_status = NULL, $fk)
    {
        $this->gender = $gender;
        $this->smoker_status = $smoker_status;
        $this->fk = $fk;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        
        if ($this->rowsCount == 0) {
      
            foreach ($row as $key => $value) {
                !is_null($value) ? array_push($this->columns, $value) : '';
            }
            $this->rowsCount++;
        } else {
            if ($row[0] != NULL) {
                for ($i = 1; $i < count($this->columns); ++$i) {
                    PolicyRate::updateOrCreate([
                        'age' => $row[0],
                        'face_amount' => $this->columns[$i],
                        'gender' => $this->gender,
                        'smoker_status' => $this->smoker_status,
                        'company_policy_id' => $this->fk
                    ], [
                        'age' => $row[0],
                        'face_amount' => $this->columns[$i],
                        'monthly_premium' => $row[$i],
                        'gender' => $this->gender,
                        'smoker_status' => $this->smoker_status,
                        'company_policy_id' => $this->fk
                    ]);
                }
            }
        }
    }
}
