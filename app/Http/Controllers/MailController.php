<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ForgetPasswordRequest;
use App\Events\ForgetPasswordEvent;
use App\Jobs\ForgetPasswordJob;
use App\Models\PasswordReset;
use App\Notifications\ForgetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Str;
use App\Mail\ForgetPasswordMail;
use App\Models\User;

class MailController extends Controller
{
    //
    public function forget_passowrd(ForgetPasswordRequest $request)
    {
        try {
            DB::beginTransaction();
            $token = Str::random(64);
            $user = User::where('email', $request->email)->with(['UserAttributes'])->first();
            $roles = PasswordReset::create(['token' => $token, 'email' => $request->email]);
            if ($roles->exists()) {
                $details = array(
                    'email' => $request->email,
                    'user' => $user->name,
                    'token' => $token,
                );
                // Mail::to($details['email'])->send(new ForgetPasswordMail($details['user'],$details['token']));
                dispatch(new ForgetPasswordJob($details));
                // Mail::to($request->email)->send(new ForgetPasswordMail($user, $token));
                DB::commit();

                return response()->json(['status' => 422, 'operation' => 1, 'message' => "Reset Password Mail Sent Successfully"]);
            } else {
                DB::rollBack();
                return response()->json(['status' => 421, 'operation' => 0, 'message' => "Failed to sent Mail for reset Password"]);
            }
        } catch (Exception $exception) {
            DB::rollBack();
            return response()->json(['status' => 403, 'message' => $exception->getMessage()]);
        }
    }
}
