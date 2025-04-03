@extends('layout')

@section('title', 'Productos')

@section('content')
    <header class="bg-green text-white text-center">
        <div class="d-flex align-items-center justify-content-center header-productos mt-10">
            <h1 class="masthead-heading text-uppercase mb-0 fs-50 fw-bold border-green">PRODUCTOS</h1>
        </div>
    </header>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Nuestros Productos</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                @foreach ($productos as $producto)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <div class="img-card-container">
                                <img src="{{ asset('/assets/img/productos/' . $producto->img) }}"
                                    class="img-fluid w-100 h-100 object-fit-cover">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bold color-verde mb-0">{{ $producto->nombre }}</h5>
                                <p class=" card-text text-center fw-bold fs-5">${{ $producto->precio }}</p>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-primary w-50 fondo-verde mx-auto borde-verde"
                                        data-bs-toggle="modal" data-bs-target="#detallesProducto"
                                        data-nombre="{{ $producto->nombre }}"
                                        data-descripcion="{{ $producto->descripcion }}"
                                        data-precio="{{ $producto->precio }}"
                                        data-img="{{ asset('/assets/img/productos/' . $producto->img) }}">
                                        Ver Detalles
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="detallesProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4 color-verde fw-bold" id="modal-nombre"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="img-container-modal">
                        <img id="modal-img" class="img-fluid mb-3" alt="Imagen de la campaña">
                    </div>
                    <p class="mb-1 text-justify">
                        <span id="modal-descripcion"> </span>
                    </p>
                    <p class="mb-1 text-center color-verde fs-5">
                        <span class="fw-bold">Precio: $ </span>
                        <span id="modal-precio" class="fw-bold"> </span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fondo-verde mx-auto borde-verde px-5"
                        data-bs-dismiss="modal">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#detallesProducto').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var nombre = button.data('nombre');
            var descripcion = button.data('descripcion');
            var precio = button.data('precio');
            var img = button.data('img');

            // Actualiza el contenido del modal con los datos
            var modal = $(this);
            modal.find('#modal-nombre').text(nombre);
            modal.find('#modal-descripcion').text(descripcion);
            modal.find('#modal-img').attr('src', img);
            modal.find('#modal-precio').text(precio);
        });
    </script>
@endsection
