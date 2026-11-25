<?php

namespace App\Http\Controllers;

use App\Models\Car;
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

    public function show(Car $car)
    {
        return view('car.show', ["car" => $car]);
    }

    public function edit(Car $car)
    {
        return view('car.edit');
    }

    public function update(Request $request, Car $car)
    {
        //
    }

    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        $query = Car::where('published_at', '<', now())
            ->orderBy('published_at', 'desc');
        $carCount = $query->count();
        $cars = $query->limit(5)->get();
        return view('car.search', ['cars' => $cars, 'carCount' => $carCount]);
    }
}