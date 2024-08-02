<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileImageUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Services\FileStoreService;
use App\Services\JsonResponseService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //

    public function pic_update(ProfileImageUpdateRequest $request)
    {

        try {
            if ($request->hasFile('pic')) {
                $file = public_path('images/users/' . auth()->user()->UserAttributes->image);


                $filename = FileStoreService::ImageStore($request->pic, 'images/users');
                $img = auth()->user()->UserAttributes()->update([
                    'image' => $filename
                ]);
                if ($img > 0) {
                    DB::commit();
                    File::exists($file)
                        ? File::delete($file)
                        : '';
                    return JsonResponseService::getJsonSuccess('Profile Pic  Updated Successfully');
                }
                DB::rollBack();
                return JsonResponseService::getJsonFailed('Failed to update Profile Pic ');
            }
        } catch (Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }
    }


    public function profile_update(ProfileUpdateRequest $request){
        try {
                if($request->has('password')){
                    $request['password'] =Hash::make($request->password);
                }
                  
                    $user= User::find($request->id)->first()->update($request->all());
                    DB::commit(); 
                    return JsonResponseService::getJsonSuccess('Profile Updated Successfully');
        } catch (Exception $exception) {
            DB::rollBack();
            return  JsonResponseService::getJsonException($exception);
        }

    }
}
