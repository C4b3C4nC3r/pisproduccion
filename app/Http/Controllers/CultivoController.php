<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use Illuminate\Http\Request;

class CultivoController extends Controller
{
    public function index()
    {
        $cultivos = Cultivo::paginate(2);
        return view('cultivos.index',compact('cultivos'));
    }
    public function store(Request $request)
    {
        $cultivos=Cultivo::create($request->all());

        return redirect()->route('home');
    }
    public function update(Cultivo $cultivo, Request $request)
    {

        $cultivo->update($request->all());
        return redirect()->route('cultivo.index');
    }
    public function destroy($cultivo)
    {
        $cultivo = Cultivo::find($cultivo);
        $cultivo->delete();
        return redirect()->route('cultivo.index');
    }
}
