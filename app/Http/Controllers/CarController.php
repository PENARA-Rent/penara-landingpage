<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        
        return view('pages.main.car.list', compact('cars','brands','allCarCount','brandId'));
    }  
    
    
    public function detail($id){        
        $car = Car::findOrFail($id);                
        return view('pages.main.car.detail', compact('car'));
    }
    
    public function adminList(){                
        $cars = Car::all();                
        return view('pages.admin.car.list', compact('cars'));
    }  
    public function addForm(){                
        $brands = Brand::all();
        return view('pages.admin.car.addForm', compact('brands'));
    }

    public function adminDetail($id){                
        $brands = Brand::all();
        $car = Car::findOrFail($id);
        return view('pages.admin.car.detail', compact('brands','car'));
    }

    public function edit(Request $request){  
        
        $validated = $request->validate([
            'brand_id' => 'required|integer',
            'name' => 'required',            
            'description' => 'required',
            'price' => 'required|integer|between:1,10000000',            
        ]);

        $brands = Brand::all();                      
        $car = Car::find($request->id);

        // return dd($car);

        $data = [            
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ];
        
        $car->brand_id = $request->brand_id;
        $car->name = $request->name;
        $car->description = $request->description;
        $car->price = $request->price;
        $car->save();
        
        return redirect()->back()->with('success', 'Car was Successfully Updated :)');   
        // return view('pages.admin.car.detail', compact('brands','car'));
    }

    public function store(Request $request){        
        $validated = $request->validate([
            'brand_id' => 'required|integer',
            'name' => 'required',            
            'description' => 'required',
            'price' => 'required|integer|between:1,10000000',                
            'car_image' => 'required|mimes:png|max:2000' // max 10000kb  
        ]);
            
        $data = [            
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'car_image' => $request->car_image,
        ];

        
        
        $car = Car::create($data);

        //Car Image        

        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = 'profile-photo-' . time() . '.' . $request->file('car_image')->getClientOriginalExtension();

        $request->file('car_image')->storeAs('public/images/cars', $filename);        

        $data = [            
            'car_id' => $car->id,
            'path' => 'storage/images/cars/' . $filename
        ];

        $carImage = CarImage::create($data);
        

        // return dd($carImage);
        return redirect()->route('admin.car.list')->with('success', 'Car was Successfully Added :)');   
        // return redirect()->back()->with('message','Car was Successfully Added :)');   
    }
}
