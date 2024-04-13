
 <!-- modal usuarios-->
<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUsuario" name="formUsuario" >
                    <div class="form-group">
                        <label for="control-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                     <div class="form-group">
                        <label for="control-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" id="usuario">
                    </div>
                    <div class="form-group">
                        <label for="control-label">Contraseña:</label>
                        <input type="text" class="form-control" name="clave" id="clave">
                    </div>
                      <div class="form-group">
                         <label for="listRol">Rol</label>
                         <select class="form-control" name="listRol" id="listRol">
                            <option value="1">Administrador</option>
                            <option value="1">Asistente</option>
                         </select>
                      </div>
                      <div class="form-group">
                         <label for="listEstado">Estado</label>
                         <select class="form-control" name="listEstado" id="listEstado">
                            <option value="1">Activo</option>
                            <option value="1">Inactivo</option>
                         </select>
                      </div>
                     <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" type="submit" >Guardar</button>
            </div>
                </form>
            </div>
         
        </div>
    </div>
</div>