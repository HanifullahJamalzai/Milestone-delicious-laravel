<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
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

        auth()->attempt(['email' => $user['email'], 'password' => $request->password]);
        // Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect()->route('admin');

    }
}
