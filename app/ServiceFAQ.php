<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceFAQ extends Model
{
    //
    protected $table = 'service_faqs';

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
