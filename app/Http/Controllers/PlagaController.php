<?php

namespace App\Http\Controllers;

use App\Models\Plaga;
use Illuminate\Http\Request;

class PlagaController extends Controller
{
    public function index()
    {
        $plagas = Plaga::paginate(2);
        return view('plagas.index',compact('plagas'));
    }
    public function store(Request $request)
    {
        $plagas=Plaga::create($request->all());

        return redirect()->route('home');
    }
    public function update(Plaga $plagas, Request $request)
    {

        $plagas->update($request->all());
        return redirect()->route('plaga.index');
    }
    public function destroy($plaga)
    {
        $plaga = Plaga::find($plaga);
        $plaga->delete();
        return redirect()->route('plaga.index');
    }
}
