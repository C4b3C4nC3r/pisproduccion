<?php

namespace App\Http\Controllers;

use App\Models\Plaga;
use Illuminate\Http\Request;

class PlagaController extends Controller
{
   
    public function store(Request $request)
    {
        $plagas=Plaga::create($request->all());

        return redirect()->route('home');
    }
}
