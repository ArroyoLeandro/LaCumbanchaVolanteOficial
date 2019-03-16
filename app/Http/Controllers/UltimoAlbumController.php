<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\UltimoAlbum;

class UltimoAlbumController extends Controller
{
    

    public function index(){
        return view('index');
     }
 
 
 
     public function obtenerAlbum(){
        // $album;
        // $album= new UltimoAlbum();  
        //  $album = UltimoAlbum::orderBy('id', 'desc')->first();
 
        // return view("index", compact('album'));
      }






    public function ActualizarAlbum(Request $request){


        if(Auth::user()->tipoUser=='admin'){
            //dd($request->all());
    
            $dato = new UltimoAlbum();
            //$dato->link = $request->link;
            $dato->link = str_replace("https://open.spotify.com/", "https://open.spotify.com/embed/", $request->link);
            $dato->imagen = "img/".$request->foto->getClientOriginalName();  
            //dd($dato->link);
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
}
