<?php

namespace App\Imports;

use App\Models\CompanyExists;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CompanyStateExistsFileImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {  
        //  dd($collection);
        $firstRow = [];
        $tags = [];
        foreach ($collection as $key => $value) {
            if ($key == 0)
                $firstRow = $value;  //first row par iska header para wa 
            else if ($value[0] != null && gettype($value[0])=='string'){
                  //last line par file  k kuch states thy k yeh company total kr k 41 states mai h..usko nikala h and ensure it first index par uska state name para wa
               
                for ($i = 0; $i < count($firstRow) - 1; ++$i) {
                  
                    CompanyExists::updateOrCreate(
                        [
                            //if that state wohi h aur company b wohi tu update that record else create kr do
                            'state' => $value[0],
                            'company' =>  $firstRow[$i+1],
                          
                     
                        ],
                        [
                            'state' => $value[0],
                            'company' =>  $firstRow[$i+1],
                            'availability' =>  $value[$i+1],
                        ]
                    );
                }
            }
              
           
        }
    }
}
