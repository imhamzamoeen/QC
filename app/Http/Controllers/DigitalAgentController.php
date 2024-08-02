<?php

namespace App\Http\Controllers;

use App\Models\DigitalAgent;
use App\Http\Requests\StoreDigitalAgentRequest;
use App\Http\Requests\UpdateDigitalAgentRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DigitalAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.digital-agent.index');
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
     * @param  \App\Http\Requests\StoreDigitalAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importDigitalAgentInsurance($request->all());
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
     * @param  \App\Models\DigitalAgent  $digitalAgent
     * @return \Illuminate\Http\Response
     */
    public function show(DigitalAgent $digitalAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DigitalAgent  $digitalAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(DigitalAgent $digitalAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDigitalAgentRequest  $request
     * @param  \App\Models\DigitalAgent  $digitalAgent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDigitalAgentRequest $request, DigitalAgent $digitalAgent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DigitalAgent  $digitalAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(DigitalAgent $digitalAgent)
    {
        //
    }
}
