<div class="modal fade" id="modalCreateslider" tabindex="-1" role="dialog" aria-labelledby="modalCreateslider" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cargar nuevo item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="slidercreate" enctype="multipart/form-data" action="{{route('slider_store')}}" method="POST" >
          {{csrf_field()}}
          <div class="form-group">
              <label for="textInputName">Titulo:</label>
              <input type="text" name="titulo" class="form-control" placeholder="" >
              <div class="invalid-feedback" id="errortitulo"></div>
          </div>
          <div class="form-group">
              <label for="textInputLastname">Descripcion:</label>
              <input type="text" name="descripcion" class="form-control" placeholder="" >
              <div class="invalid-feedback" id="errordescripcion"></div>
          </div>
          <div class="form-group">
              <label for="textInputDni">Imagen:</label>
              <input type="file" name="file" accept="image/jpeg" class="form-control" placeholder="">
              <div class="invalid-feedback" id="errorfile"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="slidercreate" >Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="botoncerrarmodal">Cerrar</button>
      </div>
    </div>
  </div>
</div>