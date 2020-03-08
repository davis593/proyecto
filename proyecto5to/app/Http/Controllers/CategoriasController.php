<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

        public function index(){
            $categorias=Categoria::get();
            return view('sistema.categorias', compact('categorias'));

    }

    public function index2(){
        $categorias=Categoria::get();
        return view('sistema.formulariocategorias', compact('categorias'));


    }
}

