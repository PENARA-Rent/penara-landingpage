<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    //
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
