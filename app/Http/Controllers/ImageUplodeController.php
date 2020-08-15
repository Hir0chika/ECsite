<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageUplodeController extends Controller
{
  public function index(Request $request){
    return view('imageUplode.index');
  }
  public function confirm(Request $request){
    $imageFile = $request->file('image_file');
    $path = $imageFile->store('public/img');
    $readPath = str_replace('public/', 'storage/', $path);
    $productName = $request->product_name;
    $data = array(
        'path' => $path,
        'read_path' => $readPath,
        'product_name' => $productName,
    );
    $request->session()->put('data', $data);
    return view('imageUplode.confirm', compact('data'));
  }
  public function store(Request $request){
    $data = $request->session()->get('data');
    $path = $data['path'];
    $productName = $data['product_name'];
    $fileName = basename($path);
    $image = new Image;
    $image->file_name = $fileName;
    $image->product_name = $productName;
    $image->save();
    return view('imageUplode.store');
  }
  public function catarogue(Request $request){
    $items = Image::all();
    return view('imageUplode.catarogue', compact('items'));
  }
}
