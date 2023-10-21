<div>
    <div class="row">
        <div class="row col-12 mt-5 d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate"
                data-bs-whatever="@getbootstrap">Crear Pelicula @getbootstrap</button>
        </div>
    </div>
    <div wire:ignore.self class="modal" id="ModalCreate" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                @if (session()->has('cerrarModal'))
                    <script>
                       // $('#ModalCreate').modal('hide');
                       //console.log('fuuu');
                    </script>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger d-block mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="modal-body">
                    <form wire:submit="save">
                        @csrf
                        <div class="mb-3">
                            <label class="col-form-label">Nombre:</label>
                            <input wire:model.live="movie.Nombre" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Descripción:</label>
                            <input wire:model.live="movie.Descripcion" type="text" class="form-control">
                        </div>

                        <!-- Mover los botones dentro del formulario -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
