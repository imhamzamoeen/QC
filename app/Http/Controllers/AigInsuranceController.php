<?php

namespace App\Http\Controllers;

use App\Models\AigInsurance;
use App\Http\Requests\UpdateAigInsuranceRequest;
use App\Imports\AigInsuranceImport;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AigInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.aig.index');
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
     * @param  \App\Http\Requests\StoreAigInsuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importAigInsurance($request->all());
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
     * @param  \App\Models\AigInsurance  $aigInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(AigInsurance $aigInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AigInsurance  $aigInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(AigInsurance $aigInsurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAigInsuranceRequest  $request
     * @param  \App\Models\AigInsurance  $aigInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAigInsuranceRequest $request, AigInsurance $aigInsurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AigInsurance  $aigInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(AigInsurance $aigInsurance)
    {
        //
    }
}
