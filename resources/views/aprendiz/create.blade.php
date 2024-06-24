<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">AGREGAR APRENDIZ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="form-label">CEDULA</label>
              <input type="text" class="form-control"name="cedula" id="" aria-describedby="helpId" placeholder="" />
            </div>
  
            <div class="mb-3">
              <label for="" class="form-label">NOMBRE</label>
              <input type="text" class="form-control"name="nombre" id="" aria-describedby="helpId" placeholder="" />
            </div>
  
            <div class="mb-3">
              <label for="" class="form-label">APELLIDO</label>
              <input type="text" class="form-control"name="apellido" id="" aria-describedby="helpId" placeholder="" />
            </div>
  
            <div class="mb-3">
              <label for="" class="form-label">CORREO</label>
              <input type="text" class="form-control"name="correo" id="" aria-describedby="helpId" placeholder="" />
            </div>
  
            <div class="mb-3">
              <label for="" class="form-label">TELEFONO</label>
              <input type="text" class="form-control"name="telefono" id="" aria-describedby="helpId" placeholder="" />
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>