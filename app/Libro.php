<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    public function autores(){

    	return $this->belongsToMany(Autor::class)->withTimestamps();
    }
}
