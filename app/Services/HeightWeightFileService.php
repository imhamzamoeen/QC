<?php

namespace App\Services;

use App\Imports\HeightsWeights\SeniorLifeInsuranceImport;
use App\Imports\WeightGraphs\SeniorLife\StandardJoint;
use App\Imports\WeightGraphs\SeniorLife\UltimatePreferred;
use Maatwebsite\Excel\Facades\Excel;

class HeightWeightFileService
{
    public function __construct()
    {
        //
    }
    public static function SeniorLifeImport(array $data)
    {
        return Excel::import(new SeniorLifeInsuranceImport, $data['file']);
    }
    public static function SeniorLifeImportUltimate(array $data)
    {
        return Excel::import(new UltimatePreferred, $data['file']);
    }
    public static function SeniorLifeImportStandard(array $data)
    {
        return Excel::import(new StandardJoint, $data['file']);
    }
}
