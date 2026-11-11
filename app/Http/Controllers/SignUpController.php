<?php

namespace App\Http\Controllers;

class SignUpController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }
}