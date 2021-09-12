<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Fabricante;
use App\Models\ProductoTecnico;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productotecnicos = ProductoTecnico::paginate(2);
        $collectionCate = Categoria::all();
        $collectionFabri = Fabricante::all();
        return view('productos.index',compact('productotecnicos','collectionCate','collectionFabri'));
    }

    public function store(Request $request)
    {
        $productotecnicos=ProductoTecnico::create($request->all());
        return redirect()->route('home');
    }
    public function update($productotecnicos, Request $request)
    {
        $productotecnicos=ProductoTecnico::find($productotecnicos);
        $productotecnicos->update($request->all());
        return redirect()->route('productotecnico.index');
    }
    public function destroy($productotecnicos)
    {
        $productotecnicos = ProductoTecnico::find($productotecnicos);
        $productotecnicos->destroy($productotecnicos->id);
        return redirect()->route('productotecnico.index');
    }
}
