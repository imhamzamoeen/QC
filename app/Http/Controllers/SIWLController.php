<?php

namespace App\Http\Controllers;

use App\Models\SIWL;
use App\Http\Requests\StoreSIWLRequest;
use App\Http\Requests\UpdateSIWLRequest;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SIWLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.my-lab.siwl.index');
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
     * @param  \App\Http\Requests\StoreSIWLRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $result = ExcelImportService::importSIWLInsurance($request->all());
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
     * @param  \App\Models\SIWL  $sIWL
     * @return \Illuminate\Http\Response
     */
    public function show(SIWL $sIWL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SIWL  $sIWL
     * @return \Illuminate\Http\Response
     */
    public function edit(SIWL $sIWL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSIWLRequest  $request
     * @param  \App\Models\SIWL  $sIWL
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSIWLRequest $request, SIWL $sIWL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SIWL  $sIWL
     * @return \Illuminate\Http\Response
     */
    public function destroy(SIWL $sIWL)
    {
        //
    }
}
