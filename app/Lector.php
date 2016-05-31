<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    //
   	public function gustos()
    {
        return $this->hasOne('App\Gusto');
    }
}
