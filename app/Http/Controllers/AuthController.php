<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {
        $username = "test";
        $userEmail = "test@example.com";
        $MailObj = new SignUp($username);

        Mail::to($userEmail)
            ->send($MailObj);
    }
}
