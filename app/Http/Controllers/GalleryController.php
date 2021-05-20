<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Photo;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $photos = Photo::simplePaginate(6);     
        return view('pages.main.gallery', compact('photos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminList()
    {
        //
        $photos = Photo::all();     
        return view('pages.admin.gallery.list', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addForm()
    {
        //
        return view('pages.admin.gallery.addForm');
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
        // return dd($request);
        $validated = $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:png,jpg|max:2000', // max 10000kb                                                
        ]);

        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = 'gallery-photo-' . time() . '.' . $request->file('file')->getClientOriginalExtension();

        $request->file('file')->storeAs('public/images/galleries', $filename);        

        $data = [            
            'title' => $request->title,
            'file_name' => $filename,
            'path' => 'storage/images/galleries/' . $filename
        ];

        $photo = Photo::create($data);

        return redirect()->route('admin.gallery.list')->with('success', 'Photo was Successfully Added :)');   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $photo = Photo::find($id);       
        unlink(public_path($photo->path)); 
        // Storage::delete($photo->file_name);
        $photo->delete();

        return redirect()->route('admin.gallery.list')->with('success', 'Photo was Successfully Removed :)');  

        
    }
}
