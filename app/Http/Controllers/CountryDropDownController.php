<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryDropDownController extends Controller
{
    public function getStates(Request $request)
    {
        $data['states'] = DB::table('zip_states')->where("country_id", $request->country_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }

    public function getStates2(Request $request)
    {
        $data['states'] = DB::table('zip_states')
            ->select('state_id', 'state_name')
            ->distinct()
            ->get();
        return response()->json($data);
    }

    public function getCities(Request $request)
    {

        $data['cities'] = DB::table('cities')->where("state_id", $request->state_id)
            ->get(["name", "id"]);
        $data['zips'] = DB::table('zip_states')->where("state_name", $request->state_name)
            ->get(["zip", "id"]);
        return response()->json($data);
    }

    public function getCities2(Request $request)
    {
        $data['cities'] = DB::table('zip_states')->select('city')->where("state_id", $request->state_id)
            ->groupBy('city')->get();
        return response()->json($data);
    }

    public function getZip(Request $request)
    {
        $data['zips'] = DB::table('zip_states')->where("state_name", $request->state_name)->where("city", $request->city_name)
            ->get(["zip", "id"]);
        return response()->json($data);
    }
    public function getZip2(Request $request)
    {
        $data['zips'] = DB::table('zip_states')->where("city", $request->city_name)
            ->get(["zip", "id"]);
        return response()->json($data);
    }
}
