<?php

namespace App\Http\Controllers;
use App\ProximasFechas;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Intervention\Image\Facades\Image as Image;



class PfechasController extends Controller
{


    public function NuevaFecha(Request $request){
        // dd($request->all());
        
      //valido que sea admin 
         if(Auth::user()->tipoUser=='admin'){
         //dd($request->all());
 
         $dato = new ProximasFechas();
         //dd($request->Imagen);
         $dato->dia = $request->dia;
         $dato->mes = $request->mes;
         $dato->nombre = $request->nombre;
         $dato->lugar = $request->lugar;
         $dato->hora = $request->hora;
         $dato->link = $request->link;
         $dato->Imagen = "img/".$request->foto->getClientOriginalName();  

         $dato->save();//guardo los datos en la bd

         }
 
 
         //limpiar cache....
         header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
         header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
         header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
         header("Cache-Control: post-check=0, pre-check=0", false);
         header("Pragma: no-cache");
         //-------------------------------------
 
         return Redirect::to(route('obtenerFechas'));
     }


    public function ActualizarFechas(Request $request){
        $dato;
      //valido que sea admin 
         if(Auth::user()->tipoUser=='admin'){
            //dd($request->all());
 
            $dato = ProximasFechas::find($request->identificador);
            $dato->dia = $request->dia;
            $dato->mes = $request->mes;
            $dato->nombre = $request->nombre;
            $dato->lugar = $request->lugar;
            $dato->hora = $request->hora;
            $dato->link = $request->link;
            $dato->Imagen = "img/".$request->foto->getClientOriginalName();  
            $dato->save();//guardo los datos en la bd           
  
          
        }
         
         //limpiar cache....
         header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
         header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
         header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
         header("Cache-Control: post-check=0, pre-check=0", false);
         header("Pragma: no-cache");
         //-------------------------------------
         return Redirect::to(route('obtenerFechas'));
       
     }


     public function BorrarFecha(Request $request){
        
        //valido que sea admin 
        $fec;
        $mensaje="";
        if(Auth::user()->tipoUser=='admin'){
            
            $Fec = ProximasFechas::find($request->identificador);
            $Fec->delete();
        }
            
   
           //limpiar cache....
           header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
           header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
           header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
           header("Cache-Control: post-check=0, pre-check=0", false);
           header("Pragma: no-cache");
           //-------------------------------------
           return Redirect::to(route('obtenerFechas'));
           

       }
  


    public function index(){
       return view('index');
    }



    public function obtenerFechas(){

        $fecha = ProximasFechas::all()->sortby('id',false);

      return view("index", compact('fecha'));
     }


}
