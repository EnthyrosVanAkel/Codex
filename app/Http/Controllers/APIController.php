<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CrearLector;

use App\User;
use App\Extracto;
use App\Lector;
use App\Libro;

//
use App\Gusto;
use App\Leido;
use App\leidoExtracto;
use App\leidoLibro;
use App\gustoExtracto;
use App\gustoLibro;
//
use Crypt;
use Storage;
use File;
use Carbon\Carbon;
use Validator;


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
        $v = Validator::make($request->all(),[
            'email' => 'unique:lectores'
            ]);

        if($v->fails()){
            $errors = $v->errors();
            return $errors->toJson();
        }
        else
        {
            $lector = new Lector();
            $lector->email = $request->input('email');
            $lector->nombre = $request->input('nombre') ;
            $lector->apellido = $request->input('apellido');
            $lector->genero = $request->input('genero');
            $lector->nacimiento = $request->input('nacimiento');
            if ($request->input('password')) {
                $lector->password = Crypt::encrypt($request->input('password'));
            }
            $lector->save();

            $file = $request->file('imagen');
            if($file) {
                $extension = $file->getClientOriginalExtension();
                $nombre = 'lector'.$lector->id.'.'.$extension;
                Storage::disk('s3')->put('lectores/' . $nombre, File::get($file));
                $url = Storage::cloud()->url('lectores/' . $nombre);
                $lector->url_img = $url;
            }
            
            $lector->save();
 
            $gustos = new Gusto();
            $gustos->lector_id = $lector->id;
            $gustos->save();

            $leidos = new Leido();
            $leidos->lector_id = $lector->id;
            $leidos->save();

            return $lector->id;
        }
        
    }

    function modificar_lector(Request $request){
        $lector = Lector::find($request->input('id'));
        //$lector->email = $request->input('email');
        if ($lector) {
            if ($request->input('nombre')) {
                $lector->nombre = $request->input('nombre');
            }
            if ($request->input('apellido')) {
                $lector->apellido = $request->input('apellido');
            }
            if ($request->input('email')) {
                $lector->email = $request->input('email');
            }
            if ($request->input('genero')) {
                $lector->genero = $request->input('genero');
            }
            if ($request->input('nacimiento')) {
                $lector->nacimiento = $request->input('nacimiento');
            }
            if ($request->file('imagen')) {

                $file = $request->file('imagen');
                $extension = $file->getClientOriginalExtension();
                $nombre = 'lector'.$lector->id.'.'.$extension;
                Storage::disk('s3')->put('lectores/' . $nombre, File::get($file));
                $url = Storage::cloud()->url('lectores/' . $nombre);
                $lector->url_img = $url;

            }

            $lector->save();
            return 'Reader Changed!';
        }
        else{
            return 'NotFound';
        }
    }

    function change_password(Request $request){
        $lector = Lector::find($request->input('id'));
        if ($lector) {
            if($lector->password){
                $lector->password = Crypt::encrypt($request->input('password'));
                $lector->save();
                return 'Password Changed!';   
            }
            else{
                return 'FB login';
            }
        }
        else{
            return 'NotFound';
        }
    }

    function login_lector(Request $request){
        $lector = Lector::where('email',$request->input('email'))->first();
        if ($lector) {
            $p = Crypt::decrypt($lector->password);
            $r = $request->input('password');
            if($p == $r){
                return $lector;   
            }
            else{
                return 'Incorrect Password';
            }
        }
        else{
            return 'NotFound';
        }
    }

/*

    public function obtener_gustos(Request $request){
        $id = $request->input('id');         
        $lector = Lector::find($id);
        $leidos = $lector->gustos;
        $gustos = $lector->leidos;
        $libros = $request->input('libros');
        $s = "";
        foreach ($libros as $libro) {
            $s = $s.$libro['id_l'];

        }
        return $s;
    }
*/

    
    public function obtener_gustos(Request $request){
        $id = $request->input('id');         
        $lector = Lector::find($id);
        $leidos = $lector->gustos;
        $gustos = $lector->leidos;
        $libros = $request->input('libros'); 
        $t = count($libros);
        foreach ($libros as $l) {
            $libro_id = $l['id_l'];
            $libro = Libro::find($libro_id);
            $genero = strtolower($libro->genero);
            switch ($genero) {
                case 'novela':
                    $n = $leidos->m_novela;
                    $leidos->m_novela = $n + 1;
                    break;
                case 'ensayo':
                    $n = $leidos->m_ensayo;
                    $leidos->m_ensayo = $n + 1;
                     break;
                case 'poesia':
                    $n = $leidos->m_poesia;
                    $leidos->m_poesia = $n + 1;
                    break;
                case 'cuento':
                    $n = $leidos->m_cuento;
                    $leidos->m_cuento = $n + 1;
                    break;
                case 'teatro':
                    $n = $leidos->m_teatro;
                    $leidos->m_teatro = $n + 1;
                    break; 
            }
            $leidos->save(); 
            $leidoLibro = new leidoLibro();
            $leidoLibro->lector_id = $id;
            $leidoLibro->libro_id = $libro_id;
            $leidoLibro->save();
            foreach ($l['extractos'] as $e) {
                 $extracto_id = $e['id_e'];
                 $leidoExtracto = new leidoExtracto();
                 $leidoExtracto->lector_id = $id;
                 $leidoExtracto->extracto_id = $extracto_id;
                 $leidoExtracto->save();
                if ($e['gusto'] == 1) {
                    $gustoExtracto = new gustoExtracto();
                    $gustoExtracto->lector_id = $id;
                    $gustoExtracto->extracto_id = $extracto_id;
                    $gustoExtracto->save();
                }
            }
        }
        
        return 'hecho';
    }    
}
