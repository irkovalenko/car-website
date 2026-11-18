<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'mileage',
        'vin',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at'
    ];

    public function features(): HasOne
    {
        return $this->hasOne(CarFeature::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImage::class)->oldestOfMany('position');
    }

    public function carType(): HasOne
    {
        return $this->hasOne(CarType::class);
    }

    public function city(): HasOne
    {
        return $this->hasOne(City::class);
    }

    public function fuelType(): HasOne
    {
        return $this->hasOne(FuelType::class);
    }

    public function maker(): HasOne
    {
        return $this->hasOne(Maker::class);
    }

    public function model(): HasOne
    {
        return $this->hasOne(Model::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}