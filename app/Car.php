<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function car_features()
    {        
        return $this->belongsToMany(CarFeature::class, 'car_car_features');
    }

    public function car_images()
    {
        return $this->hasMany(CarImage::class);
    }
}
