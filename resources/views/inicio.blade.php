@extends('layout')

@section('title', 'Inicio')

@section('content')
    <!-- Masthead-->
    <header class="bg-green text-white text-center">
        <div class="d-flex align-items-center justify-content-center inicio mt-10">
            <h1 class="masthead-heading text-uppercase mb-0 fs-50 fw-bold border-green">INICIO</h1>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container pb-3">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Reforestación</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
        <div class="row fondo-verde py-5">
            <div class="col-8 mx-auto">
                <p class="text-center text-white mb-0 fs-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, non. Consectetur, aliquam. Quos
                    corporis, explicabo molestiae cupiditate eum illum consectetur at sapiente saepe ipsa maiores
                    ducimus, nostrum tempore sunt quae. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Aliquam optio, maiores illum perferendis, atque nisi officiis saepe illo animi inventore
                    reprehenderit laudantium vero. Incidunt corporis maxime doloribus optio autem. Voluptate?
                </p>
            </div>
        </div>
        <div class="container pt-3">
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center mt-5">
                <!-- Portfolio Item 1-->
                @foreach ($campanas as $campana)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <div class="img-card-container">
                                <img src="{{ asset('/assets/img/campañas/' . $campana->img) }}" class="card-img-top">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{ $campana->nombre }}</h5>
                                <p class="card-text mt-2">{{ $campana->descripcion }}</p>
                                <button type="button" class="btn btn-primary w-50 fondo-verde mx-auto borde-verde"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-nombre="{{ $campana->nombre }}" data-descripcion="{{ $campana->descripcion }}"
                                    data-img="{{ asset('/assets/img/campañas/' . $campana->img) }}"
                                    data-fecha="{{ $campana->fecha }}" data-hora="{{ $campana->hora }}"
                                    data-ubicacion="{{ $campana->ubicacion }}" data-telefono="{{ $campana->telefono }}"
                                    data-correo="{{ $campana->correo }}">
                                    Ver
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-nombre"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container-modal">
                            <img id="modal-img" class="img-fluid mb-3" alt="Imagen de la campaña">
                        </div>
                        <p id="modal-descripcion" class="mt-3 text-justify mb-1"></p>
                        <div class="d-flex justify-content-around">
                            <p class="mb-1">
                                <span class="fw-bold">Fecha: </span>
                                <span id="modal-fecha"> </span>
                            </p>
                            <p class="mb-1">
                                <span class="fw-bold">Hora: </span>
                                <span id="modal-hora"></span>
                            </p>
                        </div>
                        <p class="text-center mb-1">
                            <span class="fw-bold">Lugar: </span>
                            <span id="modal-ubicacion"></span>
                        </p>
                        <div class="d-flex justify-content-around">
                            <p class="mb-1">
                                <span class="fw-bold">Contacto: </span>
                                <span id="modal-telefono"></span>
                            </p>
                            <p class="mb-1">
                                <span class="fw-bold">Correo: </span>
                                <span id="modal-correo"></span>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fondo-verde mx-auto borde-verde px-5"
                            data-bs-dismiss="modal">Registrame</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var campanas = @json($campanas);
        console.log(campanas);

        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var nombre = button.data('nombre');
            var descripcion = button.data('descripcion');
            var img = button.data('img');
            var fecha = button.data('fecha');
            var hora = button.data('hora');
            var ubicacion = button.data('ubicacion');
            var telefono = button.data('telefono');
            var correo = button.data('correo');

            // Actualiza el contenido del modal con los datos
            var modal = $(this);
            modal.find('#modal-nombre').text(nombre);
            modal.find('#modal-descripcion').text(descripcion);
            modal.find('#modal-img').attr('src', img);
            modal.find('#modal-ubicacion').text(ubicacion);
            modal.find('#modal-fecha').text(fecha);
            modal.find('#modal-hora').text(hora);
            modal.find('#modal-telefono').text(telefono);
            modal.find('#modal-correo').text(correo);
        });
    </script>
@endsection
