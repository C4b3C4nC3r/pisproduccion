<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use App\Models\CultivoPlagaProducto;
use App\Models\Plaga;
use App\Models\ProductoTecnico;
use Illuminate\Http\Request;

class CultivoPlagaProductoController extends Controller
{
    public function index()
    {
        $cultivoplagaproducto = CultivoPlagaProducto::paginate(2);
        $cultivos = Cultivo::all();
        $plagas = Plaga::all();
        $productotecnicos = ProductoTecnico::all();

        return view('post.index',compact('cultivoplagaproducto','cultivos','plagas','productotecnicos'));
    }
    public function store(Request $request)
    {
        $cultivoplagaproducto=CultivoPlagaProducto::create($request->all());

        return redirect()->route('home');
    }
    public function update(CultivoPlagaProducto $cultivoplagaproducto, Request $request)
    {

        $cultivoplagaproducto->update($request->all());
        return redirect()->route('cultivoplagaproducto.index');
    }
    public function destroy(CultivoPlagaProducto $cultivoplagaproducto)
    {
        $cultivoplagaproducto->destroy($cultivoplagaproducto->id);
        return redirect()->route('cultivoplagaproducto.index');
    }
}
