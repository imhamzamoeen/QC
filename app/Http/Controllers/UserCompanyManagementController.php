<?php

namespace App\Http\Controllers;

use App\Models\UserCompanyManagement;
use App\Http\Requests\StoreUserCompanyManagementRequest;
use App\Http\Requests\UpdateUserCompanyManagementRequest;
use App\Http\Requests\UserCompanyManagement\RemoveCompanyFromUser;
use App\Models\InsuranceCompany;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class UserCompanyManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        if ($request->ajax()) {
            $data = UserCompanyManagement::with(['user'])->get();
            return DataTables::of($data)->make(true);
        }
        return view('front.user-company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function removecompanyfromuser(RemoveCompanyFromUser $request){
        try {
            DB::beginTransaction();
            $request['companies']=json_encode($request->companies);
            UserCompanyManagement::create($request->all());
            DB::commit();
            return JsonResponseService::getJsonSuccess('Companies Assigned successfully.');
        } catch (Exception $exception) {
            DB::rollBack();
            return JsonResponseService::getJsonException($exception);
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserCompanyManagementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCompanyManagementRequest $request)
    {
        
        
        try {
            DB::beginTransaction();
            $request['companies']=json_encode($request->companies);
            $result=UserCompanyManagement::updateOrCreate([
                'user_id' => $request->user_id,
            ], [
                'user_id' => $request->user_id,
                'companies' => $request->companies,
                'filter_check'=> $request->filter_check,
            ]);
            
            if($result->exists()){
                $result=UserCompanyManagement::where('id',$result->id)->with(['user.UserAttributes'])->get();
            DB::commit();
            return JsonResponseService::JsonSuccess('Companies Assigned successfully.',$result);
            }
            DB::rollBack();
            return JsonResponseService::JsonFailed('Failed to assign Companies to User',$result);
        } catch (Exception $exception) {
            DB::rollBack();
            return JsonResponseService::getJsonException($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCompanyManagement  $userCompanyManagement
     * @return \Illuminate\Http\Response
     */
    public function show(UserCompanyManagement $userCompanyManagement)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCompanyManagement  $userCompanyManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCompanyManagement $userCompanyManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCompanyManagementRequest  $request
     * @param  \App\Models\UserCompanyManagement  $userCompanyManagement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCompanyManagementRequest $request, UserCompanyManagement $userCompanyManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCompanyManagement  $userCompanyManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($companyuser)
    {
        //\
        DB::beginTransaction();
        $results=UserCompanyManagement::find($companyuser);
           $result= $results->destroy();
        if($result!=0){
            DB::commit();
        return JsonResponseService::JsonSuccess('Company User Un Assigend Successfully.',$results);
        }
        DB::rollBack();
        return JsonResponseService::JsonFailed('Failed to Delete a User Company.',$results);
    }

    
}
