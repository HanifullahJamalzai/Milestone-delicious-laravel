<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyUserMail;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|max:30|min:4',
            'last_name' => 'required|max:30|min:4',
            'email' => 'required|email|min:13|max:100',
            'password' => 'required|min:6|max:255|confirmed'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role'  => 2,
        ]);

        VerifyUser::create([
            'user_id' => $user->id,
            'token'   => str()->random(60),
        ]);

        Mail::to($user->email)->send(new VerifyUserMail($user));
        // auth()->attempt(['email' => $user['email'], 'password' => $request->password]);
        // Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return redirect()->route('verify.index');

    }
}
