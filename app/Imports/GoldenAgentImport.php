<?php

namespace App\Imports;

use App\Models\GoldenAgent;
use App\Models\PolicyRate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class GoldenAgentImport implements ToCollection
{
    protected $faceAmount, $fk;
    public function __construct($faceAmount, $fk)
    {
        $this->faceAmount = $faceAmount;
        $this->fk = $fk;
    }
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        $smokerStatusArr = array();
        $tagsArr = array();
        foreach ($collection as $key => $value) {
            if ($key == 0)
                $smokerStatusArr = $value;
            else if ($key == 1)
                $tagsArr = $value;
            else {
                // dd('smoker stats', $smokerStatusArr, 'tags', $tagsArr, 'value', $value);
                for ($i = 1; $i < count($tagsArr); ++$i) {
                    PolicyRate::updateOrCreate(
                        [
                            'age' => $value[0],
                            'face_amount' =>   $this->faceAmount,
                            'gender' => $tagsArr[$i] == 'Male' ? 'male' : 'female',
                            'smoker_status' => in_array($i, [1, 2]) ? 'non-smoker' : 'smoker'
                        ],
                        [
                            'age' => $value[0],
                            'face_amount' =>   $this->faceAmount,
                            'gender' => $tagsArr[$i] == 'Male' ? 'male' : 'female',
                            'smoker_status' => in_array($i, [1, 2]) ? 'non-smoker' : 'smoker',
                            'monthly_premium' => $value[$i]/12,
                            'company_policy_id' => $this->fk
                        ]
                    );
                }
            }
        }
    }
}
