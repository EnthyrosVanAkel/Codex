<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

////
use App\User;
use App\Extracto;
use App\Lectores;
use App\Libro;

use Storage;
use Carbon\Carbon;
///

class APIController extends Controller {

	//
    function crear_lector(Request $request){
        if($request){
            $lector = new Lectores();
            $lector->email = $request->input('email');
            $lector->nombre = $request->input('nombre') ;
            $lector->apellido = $request->input('apellido');
            $lector->genero = $request->input('genero');
            $lector->nacimiento = $request->input('nacimiento');
            $lector->password = 'Codex2016.';
            $lector->url_img = 'imagen';

            $lector->save();
            return $lector->id;
        }
        else{
            return 'MAL';
        }
        
    }

    function modificar_lector($id,Request $request){
        $lector = Lectores::find($id);
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
