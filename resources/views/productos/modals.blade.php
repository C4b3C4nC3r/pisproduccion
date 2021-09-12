<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$item->id}}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
    </svg>
</button>
      
    <!-- Modal -->
    <div class="modal fade" id="exampleModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar este registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('productotecnico.destroy',$item)}}" method="post">
                    <div class="modal-body">
                    @csrf
                    @method('delete')
                    Esta Seguro de eliminar {{$item->name}} de la base de datos?

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit-{{$item->id}}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg>
</button>
      
    <!-- Modal -->
    <div class="modal fade" id="edit-{{$item->id}}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar este registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('productotecnico.update',$item)}}" method="post">
                <div class="modal-body">

                    @csrf
                    @method('put')
                        <select  required class="form-control form-select"  name="categoria_id">
                            <option value="{{$item->categorias->id}}">{{$item->categorias->name}}</option>
                            @foreach ($collectionCate as $categorias)
                                <option value="{{$categorias->id}}">{{$categorias->name}}</option>
                            @endforeach                            
                        </select>
                    <br>
                        <select required class="form-control form-select"  name="fabricante_id">
                            <option value="{{$item->fabricantes->id}}">{{$item->fabricantes->name}}</option>
                            @foreach ($collectionFabri as $fabricantes)
                                <option value="{{$fabricantes->id}}">{{$fabricantes->name}}</option>
                            @endforeach                            
                            
                        </select>
                    <br>
                    <input class="form-control form-input" placeholder="Ingrese el nombre" type="text" name="name" value="{{$item->name}}" required>
                    <br>
                    <input class="form-control form-input" placeholder="Ingrese el nombre tecnico" type="text" name="nametech" value="{{$item->nametech}}" required><br>
                    <input class="form-control form-input" placeholder="Ingrese el modo de action" type="text" name="mode_action" value="{{$item->mode_action}}" required><br>
                    <input class="form-control form-input" placeholder="Ingrese su composicion" type="text" name="composicion" value="{{$item->composicion}}" required><br>
                    <input class="form-control form-input" placeholder="Ingrese el tiempo de aplicacion" type="text" name="tiempoaplicacion" value="{{$item->tiempoaplicacion}}" required><br>
                    <input class="form-control form-input" placeholder="Ingrese el lmr_ppm" type="text" name="lmr_ppm" value="{{$item->lmr_ppm}}" required><br>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizarlo</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    




