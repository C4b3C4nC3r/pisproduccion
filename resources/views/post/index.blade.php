@extends('layouts.app')

@section('content')

    <div class="container">
        {{$cultivoplagaproducto->links()}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Cultivo</th>
                        <th>Plaga</th>
                        <th>Producto</th>
                        <th>Descripcion</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cultivoplagaproducto as $item)
                        
                        <tr>
                           
                            <td>
                                {{$item->cultivos->name}}
                            </td>
                            <td>
                                {{$item->plagas->name}}
                            </td>
                            <td>
                                {{$item->productostecnicos->name}}
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
                                            
                                           {{$item->descripcion}}
                                            
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @include('post.modals')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
    </div>
@endsection
