<?php

namespace App\Imports;

use App\Models\PolicyRate;
use App\Models\SeniorLifeInurance;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SeniorLifeImport implements ToCollection
{
    protected $face_amount;
    public function __construct($gender, $smoker_status = NULL, $fk)
    {
        $this->gender = $gender;
        $this->face_amount = NULL;
        $this->smoker_status = $smoker_status;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // dd($collection);
        //descritpion :first row par bara sa naam hoga sirf pehly index par phr second row par woh male ya femlae ka hota h and almost 5 ya 6 pa jar kr start hota data 
        //logic is k whole k bari mai woh peechy sath bhejy ga k yeh smoker h ya nhe.. q k whole mai tu woh null hota h and baqi mai logic yeh h k uska agar name k coloumn mai difference nhe tu yeh smoker and non smoker hongy 
        // file header s face amount le kr ana h 
        $firstRow = [];
        $second_row = [];

        $insert_counter = 1;
        foreach ($collection as $key => $value) {
            if ($key == 1) {
                $firstRow = $value;  //first row par iska header para wa 
            } else if ($key == 2) {
                $second_row = $value;
            }
            // } else if (gettype($value[0]) == 'string' && $key < 7 && $value[0] == 'Birth Date') {
            //     $this->face_amount = (int)str_replace("$", "", $value[1]);
            //     //face amount b file k header s read hoga
            // } 
            else if (($value[0] != null || $value[0] == 0) && gettype($value[0]) == 'integer') {
              

                for ($i = 0; $i < 2; ++$i) {

                    if (isset($value[3])) {

                        for ($y = 0; $y < 2; $y++) {

                            PolicyRate::updateOrCreate([
                                'age' => $i == 0 ? $value[0] : $value[3],
                                'gender' => $firstRow[1] == $firstRow[2] ? $this->gender : $firstRow[$insert_counter + $i],
                                'smoker_status' => $second_row[1] == $second_row[2] ?  $this->smoker_status  : ($second_row[$insert_counter + $i] == 'Non-Tobacco' ? 'non-smoker' : 'smoker'),
                                'company_policy_id' => $this->fk
                            ], [
                                'age' => $i == 0 ? $value[0] : $value[3],
                                'face_amount' =>  $this->face_amount,
                                'monthly_premium' =>  isset($value[$insert_counter + $i]) ? $value[$insert_counter + $i] : 'NA',
                                'gender' => $firstRow[1] == $firstRow[2] ? $this->gender : $firstRow[$insert_counter + $i],
                                'smoker_status' => $second_row[1] == $second_row[2] ?  $this->smoker_status  : ($second_row[$insert_counter + $i] == 'Non-Tobacco' ? 'non-smoker' : 'smoker'),
                                'company_policy_id' => $this->fk
                            ]);

                            $insert_counter++;
                        }
                    } else {

                        PolicyRate::updateOrCreate([
                            'age' =>  $value[0],
                            'gender' => $firstRow[1] == $firstRow[2] ? $this->gender : $firstRow[$insert_counter],
                            'monthly_premium' =>  isset($value[$insert_counter]) ? $value[$insert_counter] : 'NA',
                            'smoker_status' => $second_row[1] == $second_row[2] ?  $this->smoker_status  : ($second_row[$insert_counter] == 'Non-Tobacco' ? 'non-smoker' : 'smoker'),
                            'company_policy_id' => $this->fk
                        ], [
                            'age' => $value[0],
                            'face_amount' =>  $this->face_amount,
                            'monthly_premium' =>  isset($value[$insert_counter]) ? $value[$insert_counter] : 'NA',
                            'gender' => $firstRow[1] == $firstRow[2] ? $this->gender : $firstRow[$insert_counter],
                            'smoker_status' => $second_row[1] == $second_row[2] ?  $this->smoker_status  : ($second_row[$insert_counter] == 'Non-Tobacco' ? 'non-smoker' : 'smoker'),
                        ]);

                        $insert_counter++;
                    }
                }
            }

            $insert_counter = 1; // loop k start mai dobara s zero kr do
        }
    }
}
