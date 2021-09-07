@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="form-control text-center">
            <a href="{{route('cultivo.create')}}">Ingresar Nuevo Cultivo</a>
        </div>
        <div class="form-control text-center">
            <a href="{{route('plaga.create')}}">Ingresar Nueva Plaga</a>
        </div>

        <!--SE USA UN SCRIPT PARA ESTO-->
        <div id="cultivo">
            <form action="{{route('cultivo.store')}}" method="post">
                @csrf
                <input type="text" name="name" required>
                <button class="btn btn-primary" type="submit">Agregarlo</button>
            </form>
        </div>
        <div id="plaga" >
            <form action="{{route('plaga.store')}}" method="post">
                @csrf
                <input type="text" name="name" required>
                <button class="btn btn-primary"  type="submit">Agregarlo</button>
            </form>
        </div>
    </div>
   
</div>
@endsection
