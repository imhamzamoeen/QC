<?php

namespace App\Http\Controllers;

use App\Models\TrinityInsurance;
use App\Http\Requests\StoreTrinityInsuranceRequest;
use App\Http\Requests\UpdateTrinityInsuranceRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrinityInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.trinity.index');
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
     * @param  \App\Http\Requests\StoreTrinityInsuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importTrinityInsurance($request->all());
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
     * @param  \App\Models\TrinityInsurance  $trinityInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(TrinityInsurance $trinityInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrinityInsurance  $trinityInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(TrinityInsurance $trinityInsurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrinityInsuranceRequest  $request
     * @param  \App\Models\TrinityInsurance  $trinityInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrinityInsuranceRequest $request, TrinityInsurance $trinityInsurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrinityInsurance  $trinityInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrinityInsurance $trinityInsurance)
    {
        //
    }
}
