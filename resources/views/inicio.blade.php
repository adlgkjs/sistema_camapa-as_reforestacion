@extends('layout')

@section('title', 'Inicio')

@section('content')
    <header class="bg-green text-white text-center">
        <div class="d-flex align-items-center justify-content-center inicio mt-10">
            <h1 class="masthead-heading text-uppercase mb-0 fs-50 fw-bold border-green">INICIO</h1>
        </div>
    </header>
    <section class="page-section portfolio" id="portfolio">
        <div class="container pb-3">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Reforestación</h2>
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
            <div class="row justify-content-center mt-5">
                @foreach ($campanas as $campana)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card">
                            <div class="img-card-container">
                                <img src="{{ asset('/assets/img/campañas/' . $campana->img) }}" class="card-img-top">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center fw-bold color-verde">{{ $campana->nombre }}</h5>
                                <p class="card-text mt-2">{{ $campana->descripcion }}</p>
                                <a href="{{ route('detalles.campana', $campana->id) }}"
                                    class="btn btn-primary w-50 fondo-verde mx-auto borde-verde">
                                    <i class="bi bi-eye fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
