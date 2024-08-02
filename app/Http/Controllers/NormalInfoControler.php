<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyStateCheck\GetCompanyFromStateRequest;
use App\Http\Requests\CompanyStateCheck\GetLevelOfCompanyRequest;
use App\Models\CompanyPolicy;
use App\Models\InsuranceCompany;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\Facades\DataTables;

class NormalInfoControler extends Controller
{
    //

    public function get_company_from_state(GetCompanyFromStateRequest $request)
    {
        try {
            $data = DB::table('company_exists')->where('state', $request->state_id)->whereAvailability(true)->get();
            if ($data->isNotEmpty())
                return JsonResponseService::JsonSuccess('Companies found against given state !', $data);

            return JsonResponseService::JsonFailed('No company found against given state!', $data);
        } catch (Exception $exception) {
            return  JsonResponseService::getJsonException($exception);
        }
    }

    public function get_policy_type_from_company(GetLevelOfCompanyRequest $request)
    {
        try {
            $company_id = InsuranceCompany::where('existance_name', $request->company_name)->value('id');
            $data = CompanyPolicy::select('policy_type')->where('insurance_company_id', $company_id)->distinct()->get();
            if ($data->isNotEmpty())
                return JsonResponseService::JsonSuccess('Level found agianst company!', $data);

            return JsonResponseService::JsonFailed('No Level found agianst company!', $data);
        } catch (Exception $exception) {
            return  JsonResponseService::getJsonException($exception);
        }
    }
    public function get_all_companies(){
        return JsonResponseService::JsonSuccess('companies fetched', InsuranceCompany::all());
    }


    public function GetLeads(Request $request){
        if ($request->ajax()) {
            if(auth()->user()->hasanyrole(['admin','super_admin'])){
                $data=Activity::with(['causer'])->get();
            }else{
                $data=Activity::where('causer_id',auth()->user()->id)->with(['causer'])->get();
            }
       
            return DataTables::of($data)->make(true);
        }
       
        return view('front.leads.index');
    }
}
