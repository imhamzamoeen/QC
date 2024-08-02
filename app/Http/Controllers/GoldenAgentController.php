<?php

namespace App\Http\Controllers;

use App\Models\GoldenAgent;
use App\Http\Requests\StoreGoldenAgentRequest;
use App\Http\Requests\UpdateGoldenAgentRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoldenAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.golden-agent.index');
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
     * @param  \App\Http\Requests\StoreGoldenAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importGoldenAgentInsurance($request->all());
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
     * @param  \App\Models\GoldenAgent  $goldenAgent
     * @return \Illuminate\Http\Response
     */
    public function show(GoldenAgent $goldenAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoldenAgent  $goldenAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(GoldenAgent $goldenAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoldenAgentRequest  $request
     * @param  \App\Models\GoldenAgent  $goldenAgent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoldenAgentRequest $request, GoldenAgent $goldenAgent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoldenAgent  $goldenAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoldenAgent $goldenAgent)
    {
        //
    }
}
