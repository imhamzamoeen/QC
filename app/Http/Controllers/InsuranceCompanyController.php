<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsuranceCompanyFactorUpdateRequest;
use App\Http\Requests\InsuranceCompanyFormulaUpdateRequest;
use App\Http\Requests\InsuranceCompanyRiderUpdateRequest;
use App\Models\InsuranceCompany;
use App\Http\Requests\StoreInsuranceCompanyRequest;
use App\Http\Requests\UpdateInsuranceCompanyRequest;
use App\Models\CompanyFormula;
use App\Services\CompanyFormulaService;
use App\Services\FileStoreService;
use App\Services\InsuranceCompanyService;
use App\Services\JsonResponseService;

use App\Services\FactorStoreService;
use App\Services\LegacyRiderService;
use App\Services\RiderStoreService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class InsuranceCompanyController extends Controller
{
    protected $service;
    public function __construct(InsuranceCompanyService $service)
    {
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function RidersUpdate(InsuranceCompanyRiderUpdateRequest  $request)
    {
        try {
           
            DB::beginTransaction();
     
            //first delete all the formula step of that insurance company
            $legacy_rider = LegacyRiderService::StoreLegacy($request->only('company_id', 'legacy_rider_rate_term', 'legacy_rider_rate_whole'));
            $adb_riders = RiderStoreService::sotre_adb($request->all());
            $child_riders = RiderStoreService::sotre_child($request->all());
            DB::commit();
            return JsonResponseService::getJsonSuccess('Riders Updated Successfully');
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
    }

    public function FactorsUpdate(InsuranceCompanyFactorUpdateRequest $request)
    {
        try {

            DB::beginTransaction();
            $request['whole_factor_check'] == 'whole_factor' ?  $request['whole_factor_check'] = true : '';
            $request['term_factor_check'] == 'term_factor' ?  $request['term_factor_check'] = true : '';
            //first delete all the formula step of that insurance company
            $factor_result = FactorStoreService::StoreFactor($request->all());

            DB::commit();
            return JsonResponseService::getJsonSuccess('Factors Updated Successfully');
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
    }

    public function FormulaUpdate(InsuranceCompanyFormulaUpdateRequest $request)
    {

      
        try {
            DB::beginTransaction();
            //first delete all the formula step of that insurance company
            $delete_result = CompanyFormula::where('company_id', $request->company_id)->forceDelete();

            $formula_result = CompanyFormulaService::store_formula($request->validated());
            DB::commit();
            return JsonResponseService::getJsonSuccess('Formula Updated Successfully');
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
    }


    public function submit_formula(Request $request)
    {
        dd($request->all());
        foreach ($request->invoice as $key => $value) {
            return $value;
        }
        return "print hogay";
    }
    public function policy_formula()
    {
        return view('front.policies-formula.index');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = InsuranceCompany::with(['owner'])->get();
            return DataTables::of($data)->make(true);
        }

        return view('front.companies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInsuranceCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsuranceCompanyRequest $request)
    {

        
        try {
            DB::beginTransaction();
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file_name = FileStoreService::ImageStore($request->image, 'images/Insurance_Companies');
                $request["company_image"]  = $file_name;
                // $company->addMediaFromRequest('image')->toMediaCollection('insurance-companies', 'insurance-companies');
            }
            // $request['func_name'] = 'import' . str_replace(' ', '', $request->name);
             $request['func_name'] = 'importGeneralFile';
            $request['owner_id'] = auth()->id();
            $company_data = $request->only('company_image', 'existance_name', 'func_name', 'owner_id', 'name', 'email', 'description', 'address', 'primary_contact', 'secondary_contact');


            $company = $this->service->storeData($company_data);
            if ($company->exists()) {

                $request['company_id'] = $company->id;
                $request['whole_factor_check'] == 'whole_factor' ?  $request['whole_factor_check'] = true : '';
                $request['term_factor_check'] == 'term_factor' ?  $request['term_factor_check'] = true : '';

                $factor_data = $request->only(
                    'whole_factor_check',
                    'annual_mode_factor_whole',
                    'policy_fee_annual_whole',
                    'semi_annual_mode_factor_whole',
                    'policy_fee_semi_annual_whole',
                    'quarterly_mode_factor_whole',
                    'policy_fee_quarterly_whole',
                    'monthly_mode_factor_whole',
                    'policy_fee_monthly_whole',
                    'term_factor_check',
                    'annual_mode_factor_term',
                    'policy_fee_annual_term',
                    'semi_annual_mode_factor_term',
                    'policy_fee_semi_annual_term',
                    'quarterly_mode_factor_term',
                    'policy_fee_quarterly_term',
                    'monthly_mode_factor_term',
                    'policy_fee_monthly_term',
                    'company_id',
                );

                $formula_result = CompanyFormulaService::store_formula($request->only('company_id', 'Company_Formula_For_Annual', 'Company_Formula_For_Semi_Annual', 'Company_Formula_For_Quarterly', 'Company_Formula_For_Monthly','term_formula_check','whole_formula_check'));
                $factor_result = FactorStoreService::StoreFactor($factor_data);
                $legacy_rider = LegacyRiderService::StoreLegacy($request->only('company_id', 'legacy_rider_rate_term', 'legacy_rider_rate_whole'));
                $adb_riders = RiderStoreService::sotre_adb($request->all());
                $child_riders = RiderStoreService::sotre_child($request->all());
                // $formula_result=CompanyFormulaService::store_formula($request->only('company_id','Company_Formula'));


                if ($factor_result->exists()) {
                    DB::commit();
                    return JsonResponseService::getJsonSuccess('Insurance company was created successfully.');
                }
            }
            DB::rollBack();
            return JsonResponseService::getJsonFailed('Failed to Add Insurance Company.');
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function show(InsuranceCompany $insuranceCompany)
    {
      
        return JsonResponseService::JsonSuccess('Formula Updated Successfully',$insuranceCompany);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(InsuranceCompany $insuranceCompany)
    {
        
        return "ok";
        return JsonResponseService::JsonSuccess('Formula Updated Successfully',$insuranceCompany);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsuranceCompanyRequest  $request
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function update_company(UpdateInsuranceCompanyRequest $request, InsuranceCompany $insuranceCompany)
    {
        try {
            DB::beginTransaction();
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file_name = FileStoreService::ImageStore($request->image, 'images/Insurance_Companies');
                $request["company_image"]  = $file_name;
                // $company->addMediaFromRequest('image')->toMediaCollection('insurance-companies', 'insurance-companies');
            }
            // $request['func_name'] = 'import' . str_replace(' ', '', $request->name);
         
            $request['owner_id'] = auth()->id();
        
            $company=$insuranceCompany->update($request->all());
           
            if ($company>0) {
                    DB::commit();
                    return JsonResponseService::getJsonSuccess('Insurance company was Updated successfully.');
            }
            DB::rollBack();
            return JsonResponseService::getJsonFailed('Failed to Update Insurance Company.');
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsuranceCompany  $insuranceCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsuranceCompany $insuranceCompany)
    {
        if ($insuranceCompany->delete())
            return JsonResponseService::getJsonSuccess('Insurance Company was deleted successfully.');
        return JsonResponseService::getJsonFailed('Failed to delete. Please try again later.');
    }
}
