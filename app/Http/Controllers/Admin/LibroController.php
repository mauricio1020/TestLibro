<?php

namespace App\Http\Controllers\Admin;

use App\Editorial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
   public function index(Request $request){
       $libros = Libro::with('editorial')->orderBy('id','desc')->paginate(15);
       return view('admin.libro.index', compact('libros'));
   }
    public function create(){
        $editoriales =  Editorial::all();
        return view('admin.libro.create', compact('editoriales'));
    }
    public function store(Request $request){
        $request->validate([
            'editoriales_id' => 'required',
            'titulo' => 'required',
            'sinopsis' => 'required',
            'n_paginas' => 'required'
        ]);
        $libro = Libro::create($request->all());
        $message = $libro ? 'Libro creado correctamente!' : 'No puedo crearse el libro!';
        return redirect()->route('libro.index')->with('message', $message);
    }
    public function edit(Libro $libro){
        return view('admin.libro.edit', compact('libro'));
    }

}
