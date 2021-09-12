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
                <form action="{{route('cultivoplagaproducto.destroy',$item)}}" method="post">
                    <div class="modal-body">
                    @csrf
                    @method('delete')
                    Esta Seguro de eliminar este registro de la base de datos?

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit-{{$item->id}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
    </button>

     <!-- Modal -->
     <div class="modal fade" id="edit-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar este registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('cultivoplagaproducto.update',$item)}}" method="post">
                    <div class="modal-body">
                    @csrf
                    @method('put')
                    <select required class="form-control form-select"  name="cultivo_id">
                        <option value="{{$item->cultivos->id}}">Elejir el Cultivo</option>
                        @foreach ($cultivos as $cultivo)
                            <option value="{{$cultivo->id}}">{{$cultivo->name}}</option>
                        @endforeach
                    </select>
                    <hr>
                    <select required class="form-control form-select"  name="plaga_id">
                        <option value="{{$item->plagas->id}}">Elejir la Plaga</option>
                        @foreach ($plagas as $plaga)
                            <option value="{{$plaga->id}}">{{$plaga->name}}</option>
                        @endforeach
                    </select>
                    <hr>
                    <select required class="form-control form-select"  name="productotecnico_id">
                        <option value="{{$item->productostecnicos->id}}">Elejir el Producto</option>
                        @foreach ($productotecnicos as $producto)
                            <option value="{{$producto->id}}">{{$producto->name}}</option>
                        @endforeach
                    </select>
                    <hr>
                    <textarea class="form-control" name="descripcion" id="" cols="30" placeholder="Ingrese una breve descripcion" rows="10">{{$item->descripcion}}</textarea>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    