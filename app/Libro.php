<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model {

	//
	protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['nombre','autor','url_img'];


    public function extractos()
    {
        return $this->hasMany('App\Extracto');
    }
}
