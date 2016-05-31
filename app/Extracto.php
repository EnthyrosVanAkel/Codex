<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extracto extends Model
{
    //
    protected $hidden = ['libro_id','votos','created_at','updated_at'];
    protected $fillable = ['extracto_texto'];
}
