<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request){
        $path = $request->file('image')->store('uploads', 'public');

        return view('admin.components.form_image', ['path' => $path]);
    }

    public function form(){
        return view('admin.components.form_image');
    }
}
