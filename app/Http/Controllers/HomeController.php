<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Cultivo;
use App\Models\Fabricante;
use App\Models\Plaga;
use App\Models\ProductoTecnico;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $datos= null;
        //productotecnico , [categoria_id, fabricante_id,name,nametech,mode_action,composicion,lmr_ppm]
        $productotecnicos = ProductoTecnico::get();
        $plagas = Plaga::get();
        $cultivos = Cultivo::get();
        $categorias = Categoria::get();
        $fabricantes = Fabricante::get();

        return view('home',compact('plagas','categorias','fabricantes','cultivos','datos','productotecnicos'));
    }
}
