<div>
    <div wire:ignore.self class="modal fade" id="ModalCreate" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalCreateLabel">Nueva Pelicula</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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
                    <form wire:submit.prevent="guardar">
                        @csrf
                        <div class="mb-3">
                            <label class="col-form-label">Nombre:</label>
                            <input wire:model="pelicula.Nombre" type="text" class="form-control">
                            @error('pelicula.Nombre') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Descripción:</label>
                            <input wire:model="pelicula.Descripcion" type="text" class="form-control"></textarea>
                            @error('pelicula.Descripcion') <span class="error">{{ $message }}</span> @enderror
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
