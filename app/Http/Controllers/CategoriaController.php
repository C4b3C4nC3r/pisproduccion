<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = Categoria::paginate(2);
        return view('categorias.index',compact('categoria'));
    }
    public function store(Request $request)
    {
        $categoria=Categoria::create($request->all());

        return redirect()->route('home');
    }

    public function update(Categoria $categoria, Request $request)
    {

        $categoria->update($request->all());
        return redirect()->route('categoria.index');
    }
    public function destroy($categoria)
    {
        $categoria = Categoria::find($categoria);
        $categoria->destroy($categoria->id);
        return redirect()->route('categoria.index');
    }
    
}
