<?php

namespace App\Http\Controllers;

use App\Models\PolicyCateogry;
use App\Http\Requests\StorePolicyCateogryRequest;
use App\Http\Requests\testQuote\CalculateAdditionalOptions;
use App\Http\Requests\testQuote\GetPolicyRequest;
use App\Http\Requests\testQuote\GetPolicyTypeRequest;
use App\Http\Requests\UpdatePolicyCateogryRequest;
use App\Jobs\NewLeadMailJob;
use App\Mail\LeadMail;
use App\Models\comapnies;
use App\Models\CompanyPolicy;
use App\Models\InsuranceCompany;
use App\Models\UserCompanyManagement;
use App\Services\AetnaTempService;
use App\Services\AIGTempService;
use App\Services\AmamTempService;
use App\Services\CVSTempService;
use App\Services\GTLTempService;
use App\Services\GWTempService;
use App\Services\JsonResponseService;
use App\Services\LBLTempService;
use App\Services\NewVistaTempService;
use App\Services\RNATempService;
use App\Services\SSLTempService;
use App\Services\TestQuote\view\CalculateAdditionalOptionService;
use App\Services\TestQuoteCalculation\FIndTermService;
use App\Services\TestQuoteCalculation\FIndWholeService;
use App\Services\TrinityTempService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class PolicyCateogryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function calculate_quote_riders(CalculateAdditionalOptions $request)
    {
        try {

            $result = CalculateAdditionalOptionService::calculate($request->validated());
            return JsonResponseService::JsonSuccess('Factors Calculated Successfully', $result);
        } catch (\Exception $exception) {

            return  JsonResponseService::getJsonException($exception);
        }
    }


    public function Lead_submit(Request $request)
    {
        try {

            dispatch(new NewLeadMailJob($request->all()));
            return JsonResponseService::JsonSuccess('Mail Sent Successfully', $request->all());
        } catch (\Exception $exception) {
            return  JsonResponseService::getJsonException($exception);
        }
    }

    public function get_policies_types(GetPolicyTypeRequest $request)
    {
        try {
            $company_id = InsuranceCompany::where('existance_name', $request->company_name)->value('id');
            $results = CompanyPolicy::where('insurance_company_id', $company_id)->where('policy_type', $request->policy_type)->where('level', $request->level)->get();

            if ($results->isNotEmpty())
                return JsonResponseService::JsonSuccess('policies founds successfully', $results);

            return JsonResponseService::JsonSuccess('No policy Found !!!', $results);

            // FIndTermService::Calculate_term($request);
        } catch (\Exception $exception) {
            return  JsonResponseService::getJsonException($exception);
        }
    }

    public function get_result_data(GetPolicyRequest $request)
    {


        try {
            if (str_contains($request->coverage, ',')) {
                $request['coverage'] = str_replace(",", "", $request->coverage);
            }

            $result_collection = collect([]);   //make an empty collection this will later hold all the results in it 

            $my_setting = UserCompanyManagement::where('user_id', auth()->user()->id)->first();       // this will get all companies assigned to me 
            $arr = json_decode($my_setting->companies);
            $my_companies = DB::table('company_exists')->where('state', $request->state)->whereAvailability(true)->whereIn('company', $arr)->pluck('company')->toArray();

            $result = array_intersect($arr, $my_companies);



            foreach ($result as $eachcompany) {
                 $company_policies = InsuranceCompany::where('existance_name', $eachcompany)->with(['policy' => function ($q) use ($request) {
                    $q->where('policy_type', '=', $request->policy_type)->where('level', '=', $request->policy_level)->with(['policyrates' => function ($q) use ($request) {
                        $q->where(function ($query) use ($request) {
                            $query->where('gender', $request->gender)
                                ->orwhereNull('gender');
                        });
                        $q->where(function ($query) use ($request) {
                            $query->where('smoker_status', $request->smoker_status)
                                ->orwhereNull('smoker_status');
                        });
                        $q->where(function ($query) use ($request) {
                            $query->where('age', $request->age)
                                ->orwhereNull('age');
                        });
                        $q->where(function ($query) use ($request) {
                            $query->where('face_amount', $request->coverage)
                                ->orwhereNull('face_amount');
                        });
                    }]);
                }, 'ADB' => function ($q) use ($request) {
                    $q->where([
                        ['lower_limit', '<=', $request->age],
                        ['upper_limit', '>=', $request->age],
                        ['type', '=', $request->policy_type],
                    ]);
                }, 'CHILD' => function ($q) use ($request) {
                    $q->where([
                        ['type', '=', $request->policy_type],
                    ]);
                }, 'LEGACY', 'FACTORS', 'FORMULA' => function ($q) use ($request) {
                    $q->where([
                        ['policy_type', '=', $request->policy_type],
                    ]);
                        $q->orderBy('step_number');
                }])->first();
                
                        $results = FIndWholeService::Calculate_whole($request->all(), $company_policies);
                        if ($results->isNotEmpty())
                            $result_collection->push($results);
                
            }

        

            if ($result_collection->isNotEmpty()) {
                //        $collection1=$result_collection[0];
                //      $result=$collection1->sortBy($my_setting->filter_check);
                // return    $result->values()->all();
                foreach ($result_collection as $key => $value) {
                    $result = $value->sortBy($my_setting->filter_check);

                    $result_collection[$key] = $result->values()->all();
                }

                return JsonResponseService::JsonSuccess('whole policy calculated for you!!!', $result_collection);
            }
            return JsonResponseService::JsonFailed('Sorry no results found!!!', []);
        } catch (\Exception $exception) {
            return  JsonResponseService::getJsonException($exception);
        }
    }

    public function index()
    {
        return view('test_folder.quote_test.calculate');
    }

    public function display_policy(Request $request)
    {

        $arrayy = json_decode($request->sendOBJ, false);
        $result_collection = collect([]);

        $result_collection->push($arrayy);
            // return $result_collection;
        return view('test_folder.quote_test.view_policy', compact('result_collection'));
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
     * @param  \App\Http\Requests\StorePolicyCateogryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePolicyCateogryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PolicyCateogry  $policyCateogry
     * @return \Illuminate\Http\Response
     */
    public function show(PolicyCateogry $policyCateogry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PolicyCateogry  $policyCateogry
     * @return \Illuminate\Http\Response
     */
    public function edit(PolicyCateogry $policyCateogry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePolicyCateogryRequest  $request
     * @param  \App\Models\PolicyCateogry  $policyCateogry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePolicyCateogryRequest $request, PolicyCateogry $policyCateogry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PolicyCateogry  $policyCateogry
     * @return \Illuminate\Http\Response
     */
    public function destroy(PolicyCateogry $policyCateogry)
    {
        //
    }
}
