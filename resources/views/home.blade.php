@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Ingresar Nuevo Cultivo
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form action="{{route('cultivo.store')}}" method="post">
                            @csrf
                            <input class="form-control form-input" placeholder="Ingrese el nombre" type="text" name="name" required>
                            <hr>
                            <button class="btn btn-primary" type="submit">Agregarlo</button>
                        </form>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Ingresar Nueva Plaga
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form action="{{route('plaga.store')}}" method="post">
                            @csrf
                            <input class="form-control form-input" placeholder="Ingrese el nombre" type="text" name="name" required>
                            <hr>
                            <button class="btn btn-primary"  type="submit">Agregarlo</button>
                        </form>
                  </div>
                </div>
            </div>
                
            <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Ingresar Nuevo Fabricante
                    </button>
                  </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form action="{{route('fabricante.store')}}" method="post">
                            @csrf
                            <input class="form-control form-input" placeholder="Ingrese el nombre" type="text" name="name" required>
                            <hr>
                            <button class="btn btn-primary"  type="submit">Agregarlo</button>
                        </form>
                    </div>
                </div>
            </div>
                
            <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Ingresar Nueva Categoria
                      </button>
                    </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form action="{{route('categoria.store')}}" method="post">
                            @csrf
                            <input class="form-control form-input" placeholder="Ingrese el nombre" type="text" name="name" required>
                            <hr>
                            <button class="btn btn-primary"  type="submit">Agregarlo</button>
                        </form>
                    </div>
                </div>
            </div>
                <!--REQUIERE DATOS-->
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Ingresar Nuevo Producto
                    </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <form action="{{route('productotecnico.store')}}" method="post">
                            @csrf
                                <select required class="form-control form-select"  name="categoria_id">
                                    <option value="">Elejir la Categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                    @endforeach
                                </select>
                            <hr>
                                <select required class="form-control form-select"  name="fabricante_id">
                                    <option value="">Elejir el Fabricante</option>
                                    @foreach ($fabricantes as $fabricante)
                                        <option value="{{$fabricante->id}}">{{$fabricante->name}}</option>
                                    @endforeach
                                </select>
                            <hr>
                            <input class="form-control form-input"  placeholder="Ingrese el nombre" type="text" name="name" required>
                            
                            <hr>
                            <input class="form-control form-input" placeholder="Ingrese el nombre tecnico" type="text" name="nametech" required>
                            <hr>
                            <input class="form-control form-input" placeholder="Ingrese el modo de action" type="text" name="mode_action" required>
                            <hr>
                            <input class="form-control form-input" placeholder="Ingrese su composicion" type="text" name="composicion" required>
                            <hr>
                            <input class="form-control form-input" placeholder="Ingrese el tiempo de aplicacion" type="text" name="tiempoaplicacion" required>
                            <hr>
                            <input class="form-control form-input" placeholder="Ingrese el lmr_ppm" type="text" name="lmr_ppm" required>
                            <hr>
                            <button class="btn btn-primary"  type="submit">Agregarlo</button>
                        </form>
                    </div>
                  </div>
                </div>
                <!--REQUIERE DATOS-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                          Nueva Publicacion
                      </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <form action="{{route('cultivoplagaproducto.store')}}" method="post">
                            @csrf
                            <select required class="form-control form-select"  name="cultivo_id">
                                <option value="">Elejir el Cultivo</option>
                                @foreach ($cultivos as $cultivo)
                                    <option value="{{$cultivo->id}}">{{$cultivo->name}}</option>
                                @endforeach
                            </select>
                            <hr>
                            <select required class="form-control form-select"  name="plaga_id">
                                <option value="">Elejir la Plaga</option>
                                @foreach ($plagas as $plaga)
                                    <option value="{{$plaga->id}}">{{$plaga->name}}</option>
                                @endforeach
                            </select>
                            <hr>
                            <select required class="form-control form-select"  name="productotecnico_id">
                                <option value="">Elejir el Producto</option>
                                @foreach ($productotecnicos as $producto)
                                    <option value="{{$producto->id}}">{{$producto->name}}</option>
                                @endforeach
                            </select>
                            <hr>
                            <textarea class="form-control" name="descripcion" id="" cols="30" placeholder="Ingrese una breve descripcion" rows="10"></textarea>
                            <hr>
                            <button class="btn btn-primary"  type="submit">Agregarlo</button>
                        </form>
                        </div>
                    </div>
                </div>
        </div>      
        <!--SE USA UN SCRIPT PARA ESTO-->
    </div>
   
</div>
@endsection
