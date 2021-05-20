<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    //
    public function list()
    {
        //
        $customers = User::whereHas('roles', function ($query) {
            return $query->where('role_id', '=', 4);
        })->get();
        // return dd($customers);
        return view('pages.admin.customer.list', compact('customers'));
    }

    public function adminDetail($id){        
        $customer = User::findOrFail($id);                
        return view('pages.admin.customer.detail', compact('customer'));
    }

    public function edit(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',            
        ]);
            
        $customer = User::find($request->id);          
              
        $customer->name = $request->name;        

        $customer->save();        

        return redirect()->route('admin.customer.list')->with('success', 'Customer was Successfully Updated :)');   
    }
}
