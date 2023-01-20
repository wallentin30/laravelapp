<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactPage;

class ContactController extends Controller
{
        
    public function contact(Request $request)
    {
        $data = array(
            'name'     => $request->name,
            'email'    => $request->email,
            'subject'  => $request->subject,
            'phone'  => $request->phone,
            'message'  => $request->message,  
        );

        Mail::to('contact@valentincojocaru.com')->send(new ContactPage($data));
        $request->session()->put('session', 'Iți mulțumim pentru mesaj, vom reveni cu un răspuns în cel mai scurt timp.');
        return redirect()->back();
    }
}
