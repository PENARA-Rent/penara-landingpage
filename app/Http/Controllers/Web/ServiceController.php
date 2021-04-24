<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    //
    public function list(){        
        $services = Service::all();        
        return view('pages.main.service', compact('services'));
    }

    public function detail($id){        
        $services = Service::all();        
        $selectedService = Service::findOrFail($id);        
        return view('pages.main.service-detail', compact('services','selectedService'));
    }
}
