<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 540px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="nb-id">Agregar usuario nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" role="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="#" onsubmit="return false;" method="post">
          <div class="">
            <label for="" class="mb-0">Nombre</label>
            <input type="text" class="form-control" name="" value="">
            <small class="invalid-feedback">No puede estar en blanco</small>
          </div>
          <div class="">
            <label for="" class="mb-0 mt-2">Apellido</label>
            <input type="text" class="form-control" name="" value="">
            <small class="invalid-feedback">No puede estar en blanco</small>
          </div>
          <div class="">
            <label for="" class="mb-0 mt-2">Correo Electrónico</label>
            <input type="text" class="form-control" name="" value="">
            <small class="invalid-feedback">No puede estar en blanco</small>
          </div>
          <div class="">
            <label for="" class="mb-0 mt-2">Oficina Principal</label>
            <select class="form-control" name="">
              <option value="">Selecciona una oficina</option>
              <option value="160">Manzanillo</option>
              <option value="240">Nuevo Laredo</option>
              <option value="430">Veracruz</option>
              <option value="470">Aeropuerto</option>
            </select>
            <small class="invalid-feedback">Seleccione una opción de la lista</small>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="addTripButtonLoading" style="display: none" class="btn btn-success disabled" name="button" disabled><i class="fas fa-circle-notch fa-spin"></i></button>
        <button type="button" id="addUser" class="btn btn-success disabled" name="button" disabled>Agregar Usuario</button>
      </div>
    </div>
  </div>
</div>
