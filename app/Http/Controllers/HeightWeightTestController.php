<?php

namespace App\Http\Controllers;

use App\Services\HeightWeightFileService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeightWeightTestController extends Controller
{
    //
    public function senior_life_index()
    {
        return view('front.height-weight.senior-life.index');
    }

    public function store_senior_life(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = HeightWeightFileService::SeniorLifeImport($request->all());
            if ($result) {
                DB::commit();
                dd(JsonResponseService::getJsonSuccess('File imported successfully.'));
            }
            DB::rollBack();
            dd(JsonResponseService::getJsonFailed('File importing failed.'));
        } catch (Exception $exception) {
            DB::rollBack();
            dd(JsonResponseService::getJsonException($exception));
        }
    }
    public function seniorUltimatePreferred()
    {
        return view('front.height-weight.senior-life.ultimate-preferred');
    }
    public function storeSeniorUltimate(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = HeightWeightFileService::SeniorLifeImportUltimate($request->all());
            if ($result) {
                DB::commit();
                dd(JsonResponseService::getJsonSuccess('File imported successfully.'));
            }
            DB::rollBack();
            dd(JsonResponseService::getJsonFailed('File importing failed.'));
        } catch (Exception $exception) {
            DB::rollBack();
            dd(JsonResponseService::getJsonException($exception));
        }
    }
    public function seniorStandardJoint()
    {
        return view('front.height-weight.senior-life.standard-joint');
    }
    public function storeStandardJoint(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = HeightWeightFileService::SeniorLifeImportUltimate($request->all());
            if ($result) {
                DB::commit();
                dd(JsonResponseService::getJsonSuccess('File imported successfully.'));
            }
            DB::rollBack();
            dd(JsonResponseService::getJsonFailed('File importing failed.'));
        } catch (Exception $exception) {
            DB::rollBack();
            dd(JsonResponseService::getJsonException($exception));
        }
    }
}
