@extends('layouts.app')

@section('content')

    <div class="container">
        {{$productotecnicos->links()}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>fabricante</th>
                        <th>Producto</th>
                        <th>Nombre Tecnico</th>
                        <th>Descripcion</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productotecnicos as $item)
                        <tr>
                            <td>
                                {{$item->categorias->name}}
                            </td>
                            <td>
                                {{$item->fabricantes->name}}
                            </td>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                {{$item->nametech}}
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
                                            
                                            <p><strong>Modo Accion: </strong>{{$item->mode_action}}</p> 
                                            <p><strong>Composicion: </strong>{{$item->composicion}}</p> 
                                            <p><strong>Tiempo Aplicacion: </strong>{{$item->tiempo_aplicacion}}</p> 
                                            <p><strong>LMR PPM: </strong>{{$item->lmr_ppm}}</p> 
                                        
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @include('productos.modals')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
    </div>
@endsection
