<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    public function store(Request $request)
    {
        $fabricantes=Fabricante::create($request->all());

        return redirect()->route('home');
    }
}
