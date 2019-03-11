<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


use App\datosbiografia;

use Intervention\Image\Facades\Image as Image;


class DatosbiografiaController extends Controller
{
    public function actualizardatosBiografia(Request $request){
       // dd($request->all());
       
     //valido que sea admin 
        if(Auth::user()->tipoUser=='admin'){
        //dd($request->all());

        $dato = new Datosbiografia();
        $dato->titulo = $request->titulo;
        $dato->descripcion = $request->descripcion;
        $dato->imagen = "";   
        $dato->save();//guardo los datos en la bd

            if ($request->hasFile('foto')) {//subo y guardo la foto en mi public/img
                //dd($request->all());
                $image      = $request->file('foto');
                $fileName   ='fotoBio.jpg'; 
                $image       = $request->file('foto');
                $image_resize = Image::make($image->getRealPath());
                $image_resize->save(public_path('img/' .$fileName));
            }    
        }           
    }


    public function index(){
       
        // Contactis::where()
        $contacto = "hola ke tal";
        // $contacto  = Datos::find(0);
        return view('admin.contactoM')->with('contacto',$contacto);
       
    }
}
