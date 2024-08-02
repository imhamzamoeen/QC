<?php

namespace App\Http\Controllers;

use App\Models\HeightWeightModel;
use App\Http\Requests\StoreHeightWeightModelRequest;
use App\Http\Requests\UpdateHeightWeightModelRequest;

class HeightWeightModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.height-weight.amam.index');
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
     * @param  \App\Http\Requests\StoreHeightWeightModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeightWeightModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeightWeightModel  $heightWeightModel
     * @return \Illuminate\Http\Response
     */
    public function show(HeightWeightModel $heightWeightModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeightWeightModel  $heightWeightModel
     * @return \Illuminate\Http\Response
     */
    public function edit(HeightWeightModel $heightWeightModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeightWeightModelRequest  $request
     * @param  \App\Models\HeightWeightModel  $heightWeightModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeightWeightModelRequest $request, HeightWeightModel $heightWeightModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeightWeightModel  $heightWeightModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeightWeightModel $heightWeightModel)
    {
        //
    }
}
