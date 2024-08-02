<?php

namespace App\Http\Controllers;

use App\Http\Requests\PolicyFileUpdateRequest;
use App\Http\Requests\PolicyManagment\UpdatePolicyManagmentRecordRequest;
use App\Models\CompanyPolicy;
use App\Models\InsuranceCompany;
use App\Services\ExcelImportService;
use App\Services\JsonResponseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PolicyDataUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function policy_file_update(PolicyFileUpdateRequest $request)
    {
      
        try {
            $function_name = $request->function_name;
            ExcelImportService::$function_name($request->all(), $request->company_policy_id);
            return JsonResponseService::JsonSuccess('Policy File Updated', []);
        } catch (\Exception $exception) {

            return  JsonResponseService::getJsonException($exception);
        }
    }

    public function manage_policies()
    {
    }
    public function index()
    {
        //

        return view('front.policymanagment.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePolicyManagmentRecordRequest $request, $id)
    {
        //

        try {
            DB::beginTransaction();
            $result_update = CompanyPolicy::where('id', $request->policy_id)->update([
                'insurance_company_id' => $request->company,
                'level' => $request->policy_level,
                'policy_type' => $request->policy_type,
                'policy_name' => $request->policy_name,
            ]);
            $result = CompanyPolicy::where('id', $request->policy_id)->with(['company'])->get();
            if ($result_update != 0) {
                DB::commit();

                return JsonResponseService::JsonSuccess('Poicy Updated Successfully', $result);
            }
            DB::rollBack();
            return JsonResponseService::JsonSuccess('Failed to UpdatePolicy', $result);
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
