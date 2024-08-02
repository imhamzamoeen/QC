<?php

namespace App\Http\Controllers;

use App\Models\NewVistaInsurance;
use App\Http\Requests\StoreNewVistaInsuranceRequest;
use App\Http\Requests\UpdateNewVistaInsuranceRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewVistaInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.new-vista.index');
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
     * @param  \App\Http\Requests\StoreNewVistaInsuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importNewVistaInsurance($request->all());
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
     * @param  \App\Models\NewVistaInsurance  $newVistaInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(NewVistaInsurance $newVistaInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewVistaInsurance  $newVistaInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(NewVistaInsurance $newVistaInsurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewVistaInsuranceRequest  $request
     * @param  \App\Models\NewVistaInsurance  $newVistaInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewVistaInsuranceRequest $request, NewVistaInsurance $newVistaInsurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewVistaInsurance  $newVistaInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewVistaInsurance $newVistaInsurance)
    {
        //
    }
}
