<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use Illuminate\Http\Request;

class CultivoController extends Controller
{
    public function store(Request $request)
    {
        $cultivos=Cultivo::create($request->all());

        return redirect()->route('home');
    }
}
