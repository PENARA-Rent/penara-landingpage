<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\CarFeature;
use App\CarImage;
use App\Brand;

class CarController extends Controller
{
    //
    public function list(){        
        $cars = Car::all();        
        // return dd($cars[0]->brand);
        return view('car-list', compact('cars'));
    }

    public function detail($id){        
        $car = Car::findOrFail($id);                
        return view('car-detail', compact('car'));
    }
}
