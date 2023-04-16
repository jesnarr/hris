<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //

    public function create(){
        $data = [
            'title' => 'Image'
        ];
        return view('image.index',$data);
    }
    public function store(Request $request){

        $path = $request->file('image')->store('images','s3');
        Storage::disk('s3')->setVisibility($path,'public');
        $storage = Storage::disk('s3')->url($path);

        return $storage;

    }
    public function get($id){

    }
}
