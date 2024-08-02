<?php

namespace App\Imports;

use App\Models\NewVistaInsurance;
use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class NewVistaImport implements ToCollection
{
    protected $gender, $fk;
    public function __construct($gender, $fk)
    {
        $this->gender = $gender;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $firstRow = [];
        $tags = [];
        foreach ($collection as $key => $value) {
            if ($key == 0)
                $firstRow = $value;
            else if ($key == 1)
                $tags = $value;
            else {
                // dd($firstRow, $tags, $value);
                for ($i = 0; $i < count($tags) - 1; ++$i) {
                    PolicyRate::updateOrCreate(
                        [
                            'age' => $value[0],
                            'face_amount' =>  $i % 2 == 0 ? $firstRow[$i + 1] : $firstRow[$i],
                            'gender' => $this->gender,
                            'smoker_status' => $tags[$i + 1] == 'NS' ? 'non-smoker' : 'smoker',
                            'company_policy_id' => $this->fk
                        ],
                        [
                            'age' => $value[0],
                            'monthly_premium' => $value[$i + 1],
                            'face_amount' =>  $i % 2 == 0 ? $firstRow[$i + 1] : $firstRow[$i],
                            'gender' => $this->gender,
                            'smoker_status' => $tags[$i + 1] == 'NS' ? 'non-smoker' : 'smoker',
                            'company_policy_id' => $this->fk
                        ]
                    );
                }
            }
        }
    }
}
