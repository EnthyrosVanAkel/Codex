<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
    //
    public function index(){
        return view('Static/index');
    }

    public function acuerdo(){
        return view('Static/acuerdo');
    }

    public function terminos(){
        return view('Static/terminos');
    }
}
