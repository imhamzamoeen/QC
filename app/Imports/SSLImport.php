<?php

namespace App\Imports;

use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SSLImport implements ToCollection
{
    protected $faceAmount, $fk;
    protected $gender; protected $smoker_status;
    public function __construct($gender,$smoker_status=NULL, $fk)
    {
        $this->gender=$gender;
        $this->smoker_status=$smoker_status;
        $this->faceAmount = NULL;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

            //is file mai 3 coloumn hony chaiye .. first row mai policy name agy smoker non smoker and 4 s data start

        $smoker_statusrow = [];
      
        foreach ($collection as $key => $value) {
            if ($key == 0)
                continue;
            else if ($key == 1)
                $smoker_statusrow = $value;
            else if($key>2 && gettype($value[0]) == 'integer'){
                // dd('smoke series', $smokeTags, 'gender tag', $genderTags, 'current iteration', $value);
                for ($i = 0; $i < 2; ++$i) {
                    if (!is_null($value[0]) && !is_null($value[$i+1])) {
                        PolicyRate::updateOrCreate(
                            [
                                'age' => $value[0],
                                'face_amount' => $this->faceAmount,
                                'gender' =>   $this->gender,
                                'smoker_status' => $smoker_statusrow[$i+1]=='Non-Nicotine' ? 'non-smoker' : 'smoker' ,
                                'company_policy_id' => $this->fk
                            ],
                            [
                                'age' => $value[0],
                                'monthly_premium' => $value[$i + 1] ,
                                'face_amount' => $this->faceAmount,
                                'gender' =>   $this->gender,
                                'smoker_status' => $smoker_statusrow[$i+1]=='Non-Nicotine' ? 'non-smoker' : 'smoker',
                                'company_policy_id' => $this->fk
                            ]
                        );
                    }
                }
            }
        }
    }
}
