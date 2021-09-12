@extends('layouts.app')

@section('content')

    <div class="container">
        {{$fabricantes->links()}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Actualizar</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fabricantes as $item)
                        <tr>
                           
                            <td>
                                {{$item->name}}
                            </td>
                           
                            <td>
                                <div class="accordion" id="accordionExample-{{$item->id}}">
                                    <div class="accordion-item-{{$item->id}}">
                                      <h2 class="accordion-header" id="headingOne-{{$item->id}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                         Revisar Descripcion
                                        </button>
                                      </h2>
                                      <div id="collapseOne-{{$item->id}}" class="accordion-collapse collapse show" aria-labelledby="headingOne-{{$item->id}}" data-bs-parent="#accordionExample-{{$item->id}}">
                                        <div class="accordion-body">
                                            
                                            <form action="{{route('fabricante.update',$item)}}" method="post">
                                                @csrf
                                                @method('put')

                                                <input class="form-control form-input" placeholder="Ingrese el nombre" type="text" name="name" value="{{$item->name}}" required>
                                                <hr>
                                                <button class="btn btn-primary" type="submit">Agregarlo</button>
                                            </form>
                                        
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @include('fabricantes.modals')

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
    </div>
@endsection
