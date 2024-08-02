<?php

namespace App\Http\Controllers;

use App\Models\HeritagePlan;
use App\Http\Requests\StoreHeritagePlanRequest;
use App\Http\Requests\UpdateHeritagePlanRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeritagePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.heritage.index');
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
     * @param  \App\Http\Requests\StoreHeritagePlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importHeritageInsurance($request->all());
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
     * @param  \App\Models\HeritagePlan  $heritagePlan
     * @return \Illuminate\Http\Response
     */
    public function show(HeritagePlan $heritagePlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeritagePlan  $heritagePlan
     * @return \Illuminate\Http\Response
     */
    public function edit(HeritagePlan $heritagePlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeritagePlanRequest  $request
     * @param  \App\Models\HeritagePlan  $heritagePlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeritagePlanRequest $request, HeritagePlan $heritagePlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeritagePlan  $heritagePlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeritagePlan $heritagePlan)
    {
        //
    }
}
