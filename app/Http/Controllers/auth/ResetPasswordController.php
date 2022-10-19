<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMail;
use App\Models\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.reset');
    }

    public function reset(Request $request)
    {
        $request->validate([
            // exist validation checks the existence of user table email columns data
            'email' => 'required|email|exists:users,email'
        ]);

        $reset = PasswordReset::create([
            'email' => $request->email,
            'token' => str()->random(60),
            'created_at' => Carbon::now(),
        ]);

        Mail::to($request->email)->send(new PasswordResetMail($reset->token));

        session()->flash('success', 'We have sent you Reset Password Link');
        return back();
    }

    public function ResetToken($token)
    {
        return view('auth.resetConfirmation', compact('token'));
    }

    public function ResetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:8|max:255',
        ]);
        // dd($request->token);
        $resetToken = PasswordReset::where('token', $request->token)->first();
        // dd($resetToken);
        User::where('email', $resetToken->email)->update([
            'password' => bcrypt($request->password)
        ]);
        session()->flash('success', 'You have successfully changed your password successfully');
        return redirect('login');
    }
}
