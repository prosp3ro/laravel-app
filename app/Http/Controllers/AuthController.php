<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {
        Mail::to("test@example.com")->send(new SignUp);
    }
}
