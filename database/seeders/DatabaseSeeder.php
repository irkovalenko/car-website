<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        CarType::insert([
            ['name' => 'Sedan'],
            ['name' => 'SUV'],
            ['name' => 'Hatchback'],
            ['name' => 'Coupe'],
            ['name' => 'Crossover'],
            ['name' => 'Sports Car'],
            ['name' => 'Jeep'],
            ['name' => 'Minivan'],
        ]);

        FuelType::insert(
            [
                ['name' => 'Gasoline'],
                ['name' => 'Diesel'],
                ['name' => 'Electric'],
                ['name' => 'Hybrid'],

            ]
        );

        $states = [
            'California' => ['Los Angeles', 'San Francisco', 'San Diego'],
            'Texas' => ['Houston', 'Austin', 'Dallas'],
            'Florida' => ['Miami', 'Orlando', 'Tampa'],
            'New York' => ['New York City', 'Buffalo', 'Albany'],
            'Illinois' => ['Chicago', 'Springfield', 'Naperville'],
            'Ohio' => ['Columbus', 'Cleveland', 'Cincinnati'],
            'Pennsylvania' => ['Philadelphia', 'Pittsburgh', 'Harrisburg'],
            'Arizona' => ['Phoenix', 'Tucson', 'Mesa'],
            'Georgia' => ['Atlanta', 'Savannah', 'Augusta'],
            'Washington' => ['Seattle', 'Spokane', 'Tacoma'],
            'Oregon' => ['Portland', 'Salem', 'Eugene'],
            'Colorado' => ['Denver', 'Boulder', 'Colorado Springs'],
            'Nevada' => ['Las Vegas', 'Reno', 'Henderson'],
            'Michigan' => ['Detroit', 'Grand Rapids', 'Lansing'],
            'North Carolina' => ['Charlotte', 'Raleigh', 'Durham'],
            'South Carolina' => ['Charleston', 'Columbia', 'Greenville'],
            'Tennessee' => ['Nashville', 'Memphis', 'Knoxville'],
            'Virginia' => ['Richmond', 'Virginia Beach', 'Norfolk'],
            'Massachusetts' => ['Boston', 'Worcester', 'Springfield'],
            'New Jersey' => ['Newark', 'Jersey City', 'Trenton']
        ];

        // creating states with related cities
        foreach ($states as $state => $cities) {
            State::factory()
                ->state(['name' => $state])
                ->has(
                    City::factory()
                        ->count(count($cities))
                        ->sequence(
                            ...array_map(fn($city) => ['name' => $city], $cities)
                        )
                )
                ->create();
        }

        $makers = [
            'Toyota' => ['Corolla', 'Camry', 'Yaris'],
            'Renault' => ['Clio', 'Megane', 'Captur'],
            'Nissan' => ['Qashqai', 'Juke', 'Micra'],
            'Volkswagen' => ['Golf', 'Passat', 'Polo']
        ];

        foreach ($makers as $maker => $models) {
            Maker::factory()
                ->state(['name' => $maker])
                ->has(
                    Model::factory()
                        ->count(count($models))
                        ->sequence(...array_map(fn($model) => ['name' => $model], $models))
                )
                ->create();
        }

        User::factory()
            ->count(3)
            ->create();

        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(5)
                    ->has(
                        CarImage::factory()
                            ->count(2)
                            ->sequence(fn(Sequence $sequence) => [
                                'position' => $sequence->index + 1,
                            ]),
                        'images'
                    )
                    ->hasFeatures(), //magic method features defined on car model
                'favouriteCars'
            )
            ->create();
    }
}
