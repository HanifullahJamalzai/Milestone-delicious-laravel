<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:13|max:100',
            'password' => 'required'
        ]);
        // dd($request->all());
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return back();
        }else{
            Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember);
            return redirect('/admin');
        }

    }
}
