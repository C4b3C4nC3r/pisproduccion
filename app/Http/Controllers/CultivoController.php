<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CultivoController extends Controller
{
    public function create()
    {
        return view('cultivos.create');
    }
    public function store(Request $request)
    {
        //''''''''''''''''''''
        return $request;
    }
}
