<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
            public function index(){
                $productos=Producto::get();
                return view('sistema.productos', compact('productos'));

            }

            public function index2(){
                $productos=Producto::get();
                return view('sistema.formularioproductos', compact('productos'));


        }

        public function create(){

            return view('sistema.productos.create');

        }

        public function store(Request $request){

            $producto= Producto::create ($request->all());
            return redirect()->route('productos.index');

        }



        public function edit($id){
            $producto=Producto::findOrFail($id);
            return view('sistema.productos.edit')->with(compact('producto'));

        }


        public function  update(Request $request, $id){
                $producto=Producto::find($id);
                $producto->update($request->all());
                return redirect()->route('productos.index');


        }
        public function delete($id){
            $producto=Producto::destroy($id);
            return redirect('productos');
        }

        }

