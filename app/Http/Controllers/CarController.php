<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('car.index');
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return view('car.show');
    }

    public function edit(string $id)
    {
        return view('car.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function search()
    {
        return view('car.search');
    }
}