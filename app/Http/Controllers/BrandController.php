<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $brands = Brand::simplePaginate(6);     
        return view('pages.admin.brand.list', compact('brands'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addForm()
    {
        //
        return view('pages.admin.brand.addForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        
        $validated = $request->validate([
            'name' => 'required',            
        ]);

              

        $data = [            
            'name' => $request->name,            
        ];

        $brand = Brand::create($data);

        return redirect()->route('admin.brand.list')->with('success', 'Brand was Successfully Added :)');   
        
    }

    public function adminDetail($id){                
        
        $brand = Brand::findOrFail($id);
        return view('pages.admin.brand.detail', compact('brand'));
    }

    
    public function edit(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',            
        ]);
            
        $brand = Brand::find($request->id);          
              
        $brand->name = $request->name;        

        $brand->save();        

        return redirect()->route('admin.brand.list')->with('success', 'Brand was Successfully Updated :)');   
    }

    
    public function update(Request $request, Photo $photo)
    {
        //
    }

    
    public function delete($id)
    {
        //        
        
    }
}
