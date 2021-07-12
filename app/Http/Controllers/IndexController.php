<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\CarFeature;
use App\CarImage;
use App\Brand;

class IndexController extends Controller
{
    
    public function index()
    {        
        $cars = Car::where('activated', true)->take(3)->get();             
        return view('pages.main.index', compact('cars'));
    }
}
