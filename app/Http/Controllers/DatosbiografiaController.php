<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

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
        $dato->imagen = "img/fotoBio.jpg";   
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
        $datos = Datosbiografia::first();


        //limpiar cache....
        header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        //-------------------------------------

        return Redirect::to(route('aboutUs'));
    }


    public function ActualizarDesCorta(Request $request){

        $dato;
        //valido que sea admin 
           if(Auth::user()->tipoUser=='admin'){
              //dd($request->all());
   
              $dato = Datosbiografia::all()->last();
              $dato->desCorta = $request->desCorta;
              $dato->save();//guardo los datos en la bd                       
          }
           
           //limpiar cache....
           header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
           header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
           header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
           header("Cache-Control: post-check=0, pre-check=0", false);
           header("Pragma: no-cache");
           //-------------------------------------
           return Redirect::to(route('ActualizarIndex'));
    }

    public function index(){
       
        // Contactis::where()
       // $contacto = "hola ke tal";
        // $contacto  = Datos::find(0);
        return view('users.nosotros');//->with('contacto',$contacto);
       
    }

    public function into(){
       
        //capturo dato de la bd (con select busco alguno especifico -- "->select('titulo','descripcion')->get();"    --- )
        $datos= new Datosbiografia();  
        $datos = Datosbiografia::all()->last();
        //dd($datos);
       return view("users.nosotros", compact('datos'));
    }
}
