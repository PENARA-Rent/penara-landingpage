<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    //
    public function list(){        
        $services = Service::all();        
        return view('service', compact('services'));
    }

    public function detail($id){        
        $services = Service::all();        
        $selectedService = Service::findOrFail($id);        
        return view('service-detail', compact('services','selectedService'));
    }
}
