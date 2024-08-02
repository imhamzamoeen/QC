<?php

namespace App\Imports;

use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class GreatWesternImport implements ToCollection
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
        //it only has two coloumns and first row has only age and premium 

        foreach ($collection as $key => $value) {
            if ($key == 0)
                continue;       //ignore first row
            else
                PolicyRate::updateOrCreate(
                    [
                        'age' => $value[0],
                        'gender' => NULL,
                        'smoker_status' =>NULL,
                        'company_policy_id' => $this->fk
                    ],
                    [
                        'age' => $value[0],
                        'monthly_premium' => $value[1],
                        'gender' =>  NULL,
                        'smoker_status' =>  NULL,
                        'company_policy_id' => $this->fk

                    ]
                );
        }
    }
}
