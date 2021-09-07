<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlagaController extends Controller
{
    //
    public function create()
    {
        return view('plagas.create');
    }
    public function store(Request $request)
    {
        //''''''''''''''''''''
        return $request;
    }
}
