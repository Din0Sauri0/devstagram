<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request){
        $imagen = $request->file('file');

        $imageName = Str::uuid().".".$imagen->extension(); //crea el nombre de la imagen, creandole un id unico de nombre

        $imageServer = Image::make($imagen); //crea una imagen de interventionImage
        $imageServer->fit(1000, 1000); //la moldea para que sea de 1000x1000

        $imagePath = public_path('uploads').'/'.$imageName; //crear la ruta donde se alojaran las imagenes
        $imageServer->save($imagePath); //guarda las imagenes en la ruta creada anteriormente

        return response()->json(['imagen'=> $imageName]);
        
    }
}
