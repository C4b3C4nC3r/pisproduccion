<?php

namespace App\Http\Controllers;

use App\Models\CultivoPlagaProducto;
use Illuminate\Http\Request;

class CultivoPlagaProductoController extends Controller
{
    public function store(Request $request)
    {
        $cultivoplagaproducto=CultivoPlagaProducto::create($request->all());

        return redirect()->route('home');
    }
}
