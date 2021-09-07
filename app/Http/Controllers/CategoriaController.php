<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        $categoria=Categoria::create($request->all());

        return redirect()->route('home');
    }
}
