<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car;
use App\CarFeature;
use App\CarImage;
use App\Brand;

class CarController extends Controller
{
    //
    public function list($brandId = 0){        
        
        if($brandId == 0){
            $cars = Car::paginate(4);                
        }else {
            $cars = Car::whereHas('brand', function($query) use($brandId)
            {
                $query->where('id','=', $brandId);

            })->paginate(4);
        }

        $allCarCount = Car::all()->count();
        $brands = Brand::all();      
        
        return view('pages.main.car-list', compact('cars','brands','allCarCount','brandId'));
    }    

    public function detail($id){        
        $car = Car::findOrFail($id);                
        return view('pages.main.car-detail', compact('car'));
    }
}
