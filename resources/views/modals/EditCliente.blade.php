<div class="modal fade" id="EditClienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form id="editClienteForm" method="post" action="{{route('edit.cliente')}}">
          @csrf
          <input type="hidden" name="id" id="id">
          <div class="form-group required">
            <label for="recipient-name" class="col-form-label control-label">Nombre:</label>
            <input name="nombre" type="text" class="form-control" id="nombre" required  autofocus>
                   @if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                        @endif


          </div>

          <div class="form-group required">
            <label for="recipient-name" class="col-form-label control-label">Email:</label>
            <input name="email" type="email" class="form-control" id="email" required >

                               @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
          </div>
                  <div class="form-group">
                      <label class="control-label">Sexo</label>
<select required class="form-control"  name="sexo" id="sexo" >

  <option disabled selected value="">Seleccione una opción</option>
  <option value="0">Masculino</option>
  <option value="1">Femenino</option>
</select>

                   @if ($errors->has('sexo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sexo') }}</strong>
                        </span>
                        @endif
          </div>


          <div class="form-group required">
            <label for="message-text" class="col-form-label control-label">Ocupación:</label>
            <textarea id="ocupacion" class="form-control" id="message-text" required  name="ocupacion" ></textarea>

                   @if ($errors->has('ocupacion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ocupacion') }}</strong>
                        </span>
                        @endif

          </div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>

</form>

    </div>
  </div>
</div>
