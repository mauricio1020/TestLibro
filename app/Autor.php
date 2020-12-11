<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    
    public function libros(){

    	return $this->belongsToMany(Libro::class)->withTimestamps();
    }
}
