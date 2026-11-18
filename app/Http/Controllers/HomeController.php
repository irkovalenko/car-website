<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function guest()
    {
        return view('guest.index');
    }
}