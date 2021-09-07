<?php

namespace App\Http\Controllers;

use App\Models\ProductoTecnico;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function store(Request $request)
    {
        $productotecnicos=ProductoTecnico::create($request->all());
        return redirect()->route('home');
    }
}
