<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\CustomRegisterRequest;
use App\Http\Requests\Register\DelUserRequest;
use App\Http\Requests\Register\EditUserRequest;
use App\Models\User;
use App\Models\UserAttributes;
use App\Services\FileStoreService;
use App\Services\JsonResponseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RegisterationController extends Controller
{
    //

    public function index(Request $request){
        if($request->ajax()){
            $data=User::with(['UserAttributes'])->get(); 
            return DataTables::of($data)->make(true);
        }

        return view('register.index');
    }
    public function Register (CustomRegisterRequest $request){
        try {     
            DB::beginTransaction();
            $user_result=User::create($request->only(['name','email','password']));
            $user_result->assignRole($request->user_type);      //asign him that role that he has 
            $filename=FileStoreService::ImageStore($request->file,'images/users');
            $request->request->add(['user_id' => $user_result->id]);
            $request->request->add(['image' => $filename]);
    
            $user_attributes=UserAttributes::create($request->only(['user_id','image','user_type']));
            if($user_attributes->exists()){
            DB::commit();
            return JsonResponseService::JsonSuccess('User Created Successfully',$request->only(['email','password']));
            
        }
            DB::rollBack();
            return JsonResponseService::JsonFailed('Failed to create User',$request->only(['email','password']));    
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
     }
    }

    public function DelUser (DelUserRequest $request){
        try {     
            DB::beginTransaction();
            $userdel=UserAttributes::where('user_id',$request->user_id)->delete();
            if($userdel!=0)
                $userto_del=User::find($request->user_id)->delete();
                if($userto_del!=0){
                    DB::commit();
                    $users=User::all();
                    return view('components.register-user-table',compact('users'))->render();
                }
            DB::rollBack(); 
            $users=User::all();
            return view('components.register-user-table',compact('users'))->render();
        } catch (\Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
     }
    }

    public function EditUser (EditUserRequest $request){
        try {     
            
            DB::beginTransaction();
            $user_result=User::find($request->id)->update($request->only(['name','email']));
            $update_result=UserAttributes::where('user_id',$request->id)->update($request->only(['status','user_type']));
            if($user_result>0 || $update_result>0){
                DB::commit();
                $users=User::all();
                return view('components.register-user-table',compact('users'))->render();
            }
            DB::rollBack(); 
            $users=User::all();
            return view('components.register-user-table',compact('users'))->render();
        } catch (\Exception $exception) {
            DB::rollBack();
            $users=User::all();
            return view('components.register-user-table',compact('users'))->render();
            return  JsonResponseService::getJsonException($exception);
     }
    }

    public function getUsers (){
        try {     
            $users=User::all();
            return view('components.register-user-table',compact('users'))->render();
        } catch (\Exception $exception) {
       
            return  JsonResponseService::getJsonException($exception);
     }
    }


    
}
