@extends('layout')

@section('title', 'Campañas')

@section('content')
    <header class="bg-green text-white text-center">
        <div class="d-flex align-items-center justify-content-center header-campanas mt-10">
            <h1 class="masthead-heading text-uppercase mb-0 fs-50 fw-bold border-green">CAMPAÑAS</h1>
        </div>
    </header>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Proximas Campañas</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
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
                                    <h5 class="card-title text-center fw-bold color-verde">{{ $campana->nombre }}</h5>

                                    <p class="mb-0"><span class="color-verde fw-bold">Fecha:</span> {{ $campana->fecha }}
                                    </p>
                                    <p class=""><span class="color-verde fw-bold">Ubicación:</span>
                                        {{ $campana->ubicacion }}</p>

                                    <a href="{{ route('detalles.campana', $campana->id) }}"
                                        class="btn btn-primary w-50 fondo-verde mx-auto borde-verde py-1 mt-3">
                                        <i class="bi bi-eye fs-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
