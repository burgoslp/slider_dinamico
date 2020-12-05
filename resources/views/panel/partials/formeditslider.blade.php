<div class="modal fade modalformeditslider" id="modalformeditslider" tabindex="-1" role="dialog" aria-labelledby="modalformeditslider" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Presentacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formeditslider" action="" method="POST" >
          {{csrf_field()}}
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
              <input type="text" name="id" class="form-control" hidden>
              <div class="invalid-feedback" id="errorid"></div>
          </div>
          <div class="form-group">
              <label for="textInputName">Titulo:</label>
              <input type="text" name="titulo" class="form-control" >
              <div class="invalid-feedback" id="errortitulo"></div>
          </div>
          <div class="form-group">
              <label for="textInputLastname">Descripcion:</label>
              <input type="text" name="descripcion" class="form-control">
              <div class="invalid-feedback" id="errordescripcion"></div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" form="formeditslider" value="Guardar">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalformeditslider">Cerrar</button>
      </div>
    </div>
  </div>
</div>