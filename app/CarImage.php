<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_id', 'path'
    ];
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
