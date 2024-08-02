<?php

namespace App\Http\Controllers;

use App\Models\SeniorLifeInurance;
use App\Http\Requests\StoreSeniorLifeInuranceRequest;
use App\Http\Requests\UpdateSeniorLifeInuranceRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Support\Facades\DB;

class SeniorLifeInuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.senior-life.index');
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
     * @param  \App\Http\Requests\StoreSeniorLifeInuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeniorLifeInuranceRequest $request)
    {

        try {
            DB::beginTransaction();

            $result = ExcelImportService::importSeniorLifeInsurance($request->all(), null);
            if ($result) {
                DB::commit();
                dd(JsonResponseService::JsonSuccess('File imported successfully.', []));
            }
            DB::rollBack();
            dd(JsonResponseService::JsonFailed('File importing failed.', []));
        } catch (Exception $exception) {
            DB::rollBack();
            dd(JsonResponseService::getJsonException($exception));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeniorLifeInurance  $seniorLifeInurance
     * @return \Illuminate\Http\Response
     */
    public function show(SeniorLifeInurance $seniorLifeInurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeniorLifeInurance  $seniorLifeInurance
     * @return \Illuminate\Http\Response
     */
    public function edit(SeniorLifeInurance $seniorLifeInurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeniorLifeInuranceRequest  $request
     * @param  \App\Models\SeniorLifeInurance  $seniorLifeInurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeniorLifeInuranceRequest $request, SeniorLifeInurance $seniorLifeInurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeniorLifeInurance  $seniorLifeInurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeniorLifeInurance $seniorLifeInurance)
    {
        //
    }
}
