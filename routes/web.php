<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\PlagaController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CultivoPlagaProductoController;
use App\Models\CultivoPlagaProducto;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    $buscar = $request->buscar;
    $data = null;
    $cultivoplagaproductos = CultivoPlagaProducto::whereHas('cultivos',function ($query) use ($buscar)
    {
        $query->where('cultivos.name','LIKE','%'.$buscar.'%');
    })->paginate(3);

    return view('welcome',compact('cultivoplagaproductos','data','buscar'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CULTIVO

Route::resource('cultivo', CultivoController::class);
Route::resource('plaga', PlagaController::class);
Route::resource('fabricante', FabricanteController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('productotecnico', ProductoController::class);
Route::resource('cultivoplagaproducto', CultivoPlagaProductoController::class);


