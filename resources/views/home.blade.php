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
                            <input type="text" name="name" required>
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
                            <input type="text" name="name" required>
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
                            <input type="text" name="name" required>
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
                            <input type="text" name="name" required>
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
                            <input type="text" name="name" required>
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
                            <input type="text" name="name" required>
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
