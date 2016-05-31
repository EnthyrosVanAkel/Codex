<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gusto extends Model
{
    //
    protected $hidden = ['lector_id','id','created_at','updated_at'];
    protected $fillable = ['m_novela','m_ensayo','m_poesia','m_cuento','m_teatro'];
}
