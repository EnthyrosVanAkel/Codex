<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    //
    //
    protected $table = 'lectores';
    protected $hidden = ['id','password','created_at','updated_at'];

   	public function gustos()
    {
        return $this->hasOne('App\Gusto');
    }
    public function leidos()
    {
        return $this->hasOne('App\Leido');
    }
}
