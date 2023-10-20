<div>
    <div class="container">
        <div class="row">
            <div class="row col-12 mt-5 ">
                <a href="#ModalCreate" data-toggle="modal">
                    <a class="d-grid gap-2 d-md-flex justify-content-md-end">
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
            </div>
        </div>
    </div>
</div>
</div>
