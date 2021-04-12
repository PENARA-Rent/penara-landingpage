<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
    //
    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
