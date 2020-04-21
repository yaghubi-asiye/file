<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function ImageUploader($file, $location){
    $filename = time()."-".$file->getClientOriginalName();
    $path = public_path("/".$location);
    $file->move($path,$filename);

    // $img=Image::make($files->getRealPath());
    // $img->resize(200,150);
    // $img->save($path."small-".$filename);
    return "$location".$filename;

  }
}
