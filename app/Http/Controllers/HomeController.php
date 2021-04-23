<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\CarFeature;
use App\CarImage;
use App\Brand;

class HomeController extends Controller
{
    
    public function home()
    {
        
        $cars = Car::take(3)->get();             
        return view('pages.main.home', compact('cars'));
    }
}
