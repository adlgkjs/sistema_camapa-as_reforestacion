@extends('layout')

@section('title', 'Detalles Campaña')

@section('content')
    <!-- Masthead-->
    <header class="bg-green text-white text-center pt-180 pb-4">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase mb-0 fs-1">{{ $campana->nombre }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div id="alerta-exito" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
            ¡Registro realizado con éxito!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="h-400 overflow-hidden rounded-3">
                        <img src="{{ asset('/assets/img/campañas/' . $campana->img) }}" class="rounded-3 img-fluid w-100"
                            alt="Imagen de la campaña">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="fs-30">{{ $campana->nombre }}</p>
                    <p class="fs-18">{{ $campana->descripcion }}</p>
                    <p class=""><span class="color-verde fw-bold">Ubicación:</span> {{ $campana->ubicacion }}</p>
                    <div class="row">
                        <div class="col-6">
                            <p class=""><span class="color-verde fw-bold">Fecha:</span> {{ $campana->fecha }}</p>
                        </div>
                        <div class="col-6">
                            <p class=""><span class="color-verde fw-bold">Hora:</span> {{ $campana->hora }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p class=""><span class="color-verde fw-bold">Telefono:</span> {{ $campana->telefono }}
                            </p>
                        </div>
                        <div class="col-6">
                            <p class=""><span class="color-verde fw-bold">Correo:</span> {{ $campana->correo }}</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <button type="button" class="btn btn-primary px-5 fondo-verde mx-auto borde-verde"
                            data-bs-toggle="modal" data-bs-target="#formularioRegistro"
                            onclick="setCampanaId({{ $campana->id }})">
                            <i class="bi bi-pencil-fill"></i>
                            <span class="fs-18">Inscribirme</span>
                        </button>
                        <button type="button" class="btn btn-primary px-5 fondo-verde mx-auto borde-verde"
                            data-bs-toggle="modal" data-bs-target="#listaInscripcion">
                            <i class="bi bi-file-earmark-medical"></i>
                            <span class="fs-18">Ver Inscritos</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Formulario -->
    <div class="modal fade" id="formularioRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 color-verde fw-bold">Formulario de Registro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row" method="POST" action="{{ route('inscripciones.store') }}">
                        @csrf
                        <!-- Campo oculto para el id de la campaña -->
                        <input type="hidden" id="id_campana" name="id_campana">

                        <div class="mb-2 col-lg-9">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input id="nombre" name="nombre" class="form-control" type="text" placeholder="Nombre"
                                aria-label="default input example" required>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input id="edad" name="edad" class="form-control" type="number" placeholder="Edad"
                                aria-label="default input example" required>
                        </div>
                        <div class="mb-2">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input id="telefono" name="telefono" class="form-control" type="number"
                                placeholder="Telefono" aria-label="default input example" required>
                        </div>
                        <div class="mb-2">
                            <label for="correo" class="form-label">Correo</label>
                            <input id="correo" name="correo" class="form-control" type="email"
                                placeholder="Correo" aria-label="default input example" required>
                        </div>
                        <div class="d-flex mt-4">
                            <button type="submit" class="btn btn-primary fondo-verde mx-auto borde-verde px-5">
                                <i class="bi bi-floppy"></i>
                                Registrarme
                            </button>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fondo-verde mx-auto borde-verde px-5"
                        data-bs-dismiss="modal">C</button>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Modal Formulario -->
    <div class="modal fade" id="listaInscripcion" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 color-verde fw-bold">Personas Inscritas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$persona->nombre}}</td>
                                    <td>{{$persona->edad}}</td>
                                    <td>{{$persona->telefono}}</td>
                                    <td>{{$persona->correo}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Alerta de exito --}}

    <script>
        function setCampanaId(campanaId) {
            document.getElementById('id_campana').value = campanaId;
        }

        $('#formularioRegistro form').on('submit', function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe de manera tradicional

            // Obtener la URL de la acción del formulario
            var actionUrl = $(this).attr('action');

            // Realizar la solicitud AJAX
            $.ajax({
                url: actionUrl,
                type: "POST",
                data: $(this).serialize(), // Enviar los datos del formulario
                success: function(response) {
                    // Si la inscripción es exitosa, cerramos el modal
                    $('#formularioRegistro').modal('hide');
                    $('#alerta-exito').fadeIn();
                },
                error: function(xhr, status, error) {
                    // Si ocurre un error, puedes mostrar un mensaje
                    alert('Hubo un error al procesar el formulario.');
                }
            });
        });
    </script>
@endsection
