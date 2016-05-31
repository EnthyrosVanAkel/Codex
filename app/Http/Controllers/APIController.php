<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Extracto;
use App\Lector;
use App\Libro;
use App\Gusto;
use Storage;
use Carbon\Carbon;


class APIController extends Controller
{
    
    function lista_libros(){
        $libros = Libro::with('extractos')->get();
        return $libros;
    }

    function lista_lectores(){
        $lectores = Lector::with('gustos')->get();
        return $lectores;
    }

    //LECTORES
    function crear_lector(Request $request){
        if($request){
            $lector = new Lector();
            $lector->email = $request->input('email');
            $lector->nombre = $request->input('nombre') ;
            $lector->apellido = $request->input('apellido');
            $lector->genero = $request->input('genero');
            $lector->nacimiento = $request->input('nacimiento');
            $lector->password = 'Codex2016.';
            $lector->url_img = 'imagen';
            $lector->save();

            $gustos = new Gusto();
            $gustos->lector_id = $lector->id;
            $gustos->save();

            return $lector->id;
        }
        else{
            return 'MAL';
        }
        
    }

    function modificar_lector($id,Request $request){
        $lector = Lector::find($id);
        //$lector->email = $request->input('email');
        if ($lector) {
            $lector->email = $request->input('email');
            $lector->save();
            return 'Reader Changed!';
        }
        else{
            return 'NotFound';
        }
    }
}
