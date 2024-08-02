<?php

namespace App\Http\Controllers;

use App\Models\GreatWesternInsurance;
use App\Http\Requests\StoreGreatWesternInsuranceRequest;
use App\Http\Requests\UpdateGreatWesternInsuranceRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GreatWesternInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.great-western.index');
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
     * @param  \App\Http\Requests\StoreGreatWesternInsuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importGreatWesternInsurance($request->all());
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
     * @param  \App\Models\GreatWesternInsurance  $greatWesternInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(GreatWesternInsurance $greatWesternInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GreatWesternInsurance  $greatWesternInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(GreatWesternInsurance $greatWesternInsurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGreatWesternInsuranceRequest  $request
     * @param  \App\Models\GreatWesternInsurance  $greatWesternInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGreatWesternInsuranceRequest $request, GreatWesternInsurance $greatWesternInsurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GreatWesternInsurance  $greatWesternInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(GreatWesternInsurance $greatWesternInsurance)
    {
        //
    }
}
