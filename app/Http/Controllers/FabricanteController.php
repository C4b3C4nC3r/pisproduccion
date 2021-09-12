<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{

    public function index()
    {
        $fabricantes = Fabricante::paginate(2);
        return view('fabricantes.index',compact('fabricantes'));
    }

    public function store(Request $request)
    {
        $fabricantes=Fabricante::create($request->all());

        return redirect()->route('home');
    }
    public function update(Fabricante $fabricantes, Request $request)
    {

        $fabricantes->update($request->all());
        return redirect()->route('fabricante.index');
    }
    public function destroy($fabricantes)
    {
        $fabricantes = Fabricante::find($fabricantes);
        $fabricantes->delete();
        return redirect()->route('fabricante.index');
    }
}
