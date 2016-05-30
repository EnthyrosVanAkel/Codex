<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Extracto extends Model {

	//
	protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['votos','extracto_texto'];
}
