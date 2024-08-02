<?php

namespace App\Http\Controllers;

use App\Models\CompanyPolicy;
use App\Http\Requests\StoreCompanyPolicyRequest;
use App\Http\Requests\UpdateCompanyPolicyRequest;
use App\Models\InsuranceCompany;
use App\Services\CompanyPolicyService;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyPolicyController extends Controller
{
    protected $service;
    public function __construct(CompanyPolicyService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function Ajax_View_For_Update_View(Request $request){
         if($request->ajax()){
             if($request->type=="riders")
             {
                $company_with_factor=InsuranceCompany::where('id',$request->company_id)->with(['ADB','CHILD','LEGACY'])->first();
                return view('components.company-edit-riders-component',compact('company_with_factor'))->render();
             }
             else if($request->type=="factors")
             {
               $company_with_factor=InsuranceCompany::where('id',$request->company_id)->with(['FACTORS'])->first();
               return view('components.company-edit-factors-component',compact('company_with_factor'))->render();
             }
             else if ($request->type=="formula"){
                $company_with_factor=InsuranceCompany::where('id',$request->company_id)->with(['FORMULA'=> function ($query)  {
                    $query->orderBy('step_number', 'ASC');
               }])->first();
                return view('components.company-edit-formula-component',compact('company_with_factor'))->render();

             }
         }

     }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.company-policies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyPolicyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyPolicyRequest $request)
    {

        try {
            DB::beginTransaction();
            $request->file_gender_info == 'NULL' ? $request->file_gender_info = ' ' : '';
            $request->file_tobacco_status_info == 'NULL' ? $request['file_tobacco_status_info'] = ' ' : '';

            $properties = [];

            foreach ($request->Company_features as $each_feature) {

                $properties[] = $each_feature['highlights'];
            }

            $request['highlights'] = json_encode($properties);


            $request['policy_name'] = $request->policy_name . ' ' . $request->file_gender_info . ' ' . $request->file_tobacco_status_info;
            $data = array_merge(
                $request->only(['policy_name', 'policy_type', 'level', 'insurance_company_id', 'highlights', 'issue_date']),
                [
                    'owner_id' => auth()->id()
                ]
            );
            $policy = $this->service->storeData($data);
            // if (!is_null($request->formula)) {
            //     $this->service->storeFormula($request->formula, $policy->id);
            // }
            $functionName = InsuranceCompany::where('id', $request->company_id)->value('func_name');
            ExcelImportService::$functionName($request->all(), $policy->id);
            DB::commit();
            return JsonResponseService::getJsonSuccess('Policy added successfully.');
        } catch (Exception $exception) {
            DB::rollBack();
            return JsonResponseService::getJsonException($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyPolicy  $companyPolicy
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyPolicy $companyPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyPolicy  $companyPolicy
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyPolicy $companyPolicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyPolicyRequest  $request
     * @param  \App\Models\CompanyPolicy  $companyPolicy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyPolicyRequest $request, CompanyPolicy $companyPolicy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyPolicy  $companyPolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyPolicy $companyPolicy)
    {
        //
    }
}
