<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerifyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyUserController extends Controller
{
    public function index()
    {
        return view('auth.verify');
    }

    public function verify($token)
    {
        $isTokenExist = VerifyUser::where('token', $token)->first();
        if(isset($isTokenExist))
        {
            $user = User::find($isTokenExist->user_id);
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->save();
            $isTokenExist->delete();
            session()->flash('success', 'Welcome back you have successfully verified the email, please login!');
            return redirect('/login');
        }else{
            session()->flash('error', 'token mismatch');
            return redirect('/register');
        }

    }
}
