<?php

namespace App\Imports;

use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CVSImportFile implements ToCollection
{protected $fk;
    public function __construct($fk)
    {
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        //Smoker status and gender is read through file 


        $gender_row = [];
        $smoker_status_row = [];

        $insert_counter = 1;
        foreach ($collection as $key => $value) {
        
            if ($key == 2) {
                $gender_row = $value;  //first row par iska header para wa 
            } else if ($key == 3) {
                $smoker_status_row = $value;
            } else if (($value[0] != null || $value[0] == 0) && gettype($value[0]) == 'integer') {
                for ($i = 0; $i < 2; $i++) {
                    for ($y = 0; $y < 2; $y++) {
                    
                        if (isset($value[$insert_counter + $y +$i])) {
                            PolicyRate::updateOrCreate([
                                'age' =>  $value[0],
                                'gender' =>  $gender_row[$insert_counter + $y +$i] =='MALE' ? 'male' : 'female',
                                'monthly_premium' =>  isset($value[$insert_counter + $i]) ? $value[$insert_counter + $i] : 'NA',
                                'smoker_status' => ($smoker_status_row[$insert_counter + $y] == 'NON SMOKER' ? 'non-smoker' : 'smoker'),
                                'company_policy_id' => $this->fk
                            ], [
                                'age' =>  $value[0],
                                'gender' =>  $gender_row[$insert_counter + $i] =='MALE' ? 'male' : 'female',
                                'monthly_premium' =>  isset($value[$insert_counter + $y +$i]) ? $value[$insert_counter + $y +$i] : 'NA',
                                'smoker_status' => ($smoker_status_row[$insert_counter + $y] == 'NON SMOKER' ? 'non-smoker' : 'smoker'),
                                'company_policy_id' => $this->fk
                            ]);
                        }
                    }
                    $insert_counter++;
                }
                $insert_counter=1;
            }
        }
    }
}
