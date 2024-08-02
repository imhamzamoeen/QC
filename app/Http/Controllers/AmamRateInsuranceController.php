<?php

namespace App\Http\Controllers;

use App\Models\AmamRateInsurance;
use App\Http\Requests\StoreAmamRateInsuranceRequest;
use App\Http\Requests\UpdateAmamRateInsuranceRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmamRateInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.amam.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAmamRateInsuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importAMAMRates($request->all(),null);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AmamRateInsurance  $amamRateInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(AmamRateInsurance $amamRateInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AmamRateInsurance  $amamRateInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(AmamRateInsurance $amamRateInsurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAmamRateInsuranceRequest  $request
     * @param  \App\Models\AmamRateInsurance  $amamRateInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAmamRateInsuranceRequest $request, AmamRateInsurance $amamRateInsurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AmamRateInsurance  $amamRateInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmamRateInsurance $amamRateInsurance)
    {
        //
    }
}
