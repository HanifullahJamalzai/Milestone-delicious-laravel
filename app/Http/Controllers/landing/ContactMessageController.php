<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageStoreRequest;
use App\Mail\ContactMessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function store(ContactMessageStoreRequest $request)
    {
        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        // dd($message);
        Mail::to($message['email'])->send(new ContactMessageMail($message));

        session()->flash('success', 'We have successfully received your Message and will respond dyou ASAP!');
        return redirect('/contact');

    }
}
