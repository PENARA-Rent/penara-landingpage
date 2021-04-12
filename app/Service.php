<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    public function service_points()
    {
        return $this->hasMany(ServicePoint::class);
    }

    public function service_faqs()
    {
        return $this->hasMany(ServiceFAQ::class);
    }
}
