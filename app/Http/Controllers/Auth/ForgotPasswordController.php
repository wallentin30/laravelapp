<?php

namespace App\Http\Controllers\Auth;


use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    // public function redirectTo(Request $request) {
  
       
    //     // Session::put('status', "succes");
       
    //      return back()->with('status', 'We have e-mailed your password reset link!');
    // }

    use SendsPasswordResetEmails;
}
