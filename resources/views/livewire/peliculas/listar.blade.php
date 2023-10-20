<div>
    <div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate"
            data-bs-whatever="@mdo">Open modal for @mdo</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate"
            data-bs-whatever="@fat">Open modal for @fat</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate"
            data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

        <div class="row">
            <div class="row col-12 mt-5 d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="#ModalCreate" data-toggle="modal">
                    <button class="btn btn-primary me-md-2" type="button">Crear Pelicula</button>
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center my-5">
                @if (!empty($peliculas))
                    @foreach ($peliculas as $peli)
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col" style="max-width: 400px; max-height: 600px;">
                                <div class="card">
                                    <img src="{{ asset('images/Nanpa.jpg') }}" class="card-img-top" alt="image">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $peli->Nombre }}</h5>
                                        <p class="card-text">{{ $peli->Descripcion }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    @endforeach

                @endif
                @livewire('peliculas.crear')
            </div>
        </div>
    </div>
</div>
</div>
