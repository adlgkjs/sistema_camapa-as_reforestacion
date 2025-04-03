@extends('layout')

@section('title', 'Nosotros')

@section('content')
    <header class="bg-green text-white text-center">
        <div class="d-flex align-items-center justify-content-center header-nosotros mt-10">
            <h1 class="masthead-heading text-uppercase mb-0 fs-50 fw-bold border-green">NOSOTROS</h1>
        </div>
    </header>
    <!-- About Section-->
    <section class="page-section bg-green text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Sobre Nosotros</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quasi ducimus. Minus,
                        aliquam fuga alias eligendi temporibus dolorem expedita dolor velit, cum laudantium, saepe quasi
                        dolores ex facere veritatis unde?</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi iure in consequuntur,
                        minima, doloremque maiores ad possimus accusamus dolor odit facilis impedit eveniet cumque obcaecati
                        reprehenderit rerum officiis quidem magni?
                    </p>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light fs-5 px-5 py-2" href="{{ url('/contacto') }}">
                    ¡Contactanos!
                </a>
            </div>
        </div>
    </section>
@endsection
