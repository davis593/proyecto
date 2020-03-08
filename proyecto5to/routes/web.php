<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Productos2;

Route::get('/', function () {
    return view('app');
});

Route::get('/miruta',function(){

echo('hola esta es la ruta que creastes..');
});

Route::get('/saludo/{nombre}/{apellido?}',function($nombre, $apellido='(no hay apellido)'){
    echo'hola '.$nombre.' '.$apellido;
});

//----------------------vista de las vista normales-----------------------//
Route::get('/marcas',
'MarcasController@index');

Route::get('/categorias',
'CategoriasController@index');

Route::get('/productos',
'ProductosController@index');


//----------------------vista de formularios----------------------------//
Route::get('/formulariomarcas',
'MarcasController@index2');

Route::get('/formulariocategorias',
'CategoriasController@index2');

Route::get('/formularioproductos',
'ProductosController@index2');

//--------------------------Marcas---------------------------------//

Route::get('marcas', 'MarcasController@index')
->name('marcas.index');


Route::get('marcas/create', 'MarcasController@create')
->name('marcas.create');

Route::post('marcas/store', 'MarcasController@store')
->name('marcas.store');


Route::get('marcas/{id}', 'MarcasController@show')
->name('marcas.show');


Route::get('marcas/{id}/edit', 'MarcasController@edit')
->name('marcas.edit');


Route::put('marcas/{id}', 'MarcasController@update')
->name('marcas.update');

Route::delete('marcas/{id}','MarcasController@delete')
->name('marcas.delete');







//----------------------------Productos-------------------------------------//


Route::get('productos', 'ProductosController@index')
->name('productos.index');


Route::get('productos/create', 'ProductosController@create')
->name('productos.create');

Route::post('productos/store', 'ProductosController@store')
->name('productos.store');


Route::get('productos/{id}', 'ProductosController@show')
->name('productos.show');


Route::get('productos/{id}/edit', 'ProductosController@edit')
->name('productos.edit');


Route::put('productos/{id}', 'ProductosController@update')
->name('productos.update');

Route::delete('productos/{id}','ProductosController@delete')
->name('productos.delete');
