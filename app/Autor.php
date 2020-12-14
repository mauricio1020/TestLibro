<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';

    protected $fillable = ['nombres','apellidos'];

    public function libros(){
    	return $this->belongsToMany(Libro::class)->withTimestamps();
    }
}
