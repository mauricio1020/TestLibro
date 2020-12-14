<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $fillable = ['id','editoriales_id','titulo','sinopsis','n_paginas'];

    public function autores(){
    	return $this->belongsToMany(Autor::class)->withTimestamps();
    }

    public function editorial(){
        return $this->belongsTo('App\Editorial','editoriales_id');
    }

}
