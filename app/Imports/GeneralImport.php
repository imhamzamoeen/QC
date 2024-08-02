<?php

namespace App\Imports;

use App\Models\PolicyRate;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class GeneralImport implements ToCollection
{
    protected  $fk;
    public function __construct($fk)
    {

        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        try {
            DB::beginTransaction();
            $headerrow = [];
            foreach ($collection as $key => $value) {
                if ($key == 0)
                    $headerrow = $value;

                else if(($value[0] != null || $value[0] == 0) && gettype($value[0]) == 'integer') {
                    // dd($value);
                    // coloumns are age,monthly_premium,face_amount,gender,smoker_status
                    for ($i = 0; $i < 5; ++$i) {

                  
                        if (!is_null($value[0])) {
                            try{
                            PolicyRate::updateOrCreate(
                                [
                                    'age' => $value[0],
                                    'gender' => $value[3],
                                    'smoker_status'=>$value[4],
                                    'company_policy_id' => $this->fk
                                ],
                                [
                                    'age' => $value[0],
                                    'monthly_premium' =>  (gettype($value[1]) == 'integer') ? $value[1] : (float)( $value[1] ) ,
                                    'face_amount' => $value[2]!= null ? ( gettype($value[2]) == 'integer' ? $value[2] : NULL  )  : NULL,
                                    'gender' => $value[3]!= null ? ( gettype($value[3]) == 'string' ?  $value[3] : NULL )  : NULL,
                                    'smoker_status' => $value[4]!= null ? ( gettype($value[4]) == 'string' ?  $value[4] : NULL )  : NULL,
                                    'company_policy_id' => $this->fk
                                ]
                            );
                        }catch(exception $e){
                            dd($e);
                            return;
                        }
                        }
                    }
                }
            }
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            dd($exception->getMessage());
        }
    }
}
