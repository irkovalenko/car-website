<?php

namespace App\Http\Controllers;


class LogInController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
}