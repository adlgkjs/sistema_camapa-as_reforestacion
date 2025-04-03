@extends('layout')

@section('title', 'Inicio')

@section('content')
    <header class="bg-green text-white text-center">
        <div class="d-flex align-items-center justify-content-center header-contacto mt-10">
            <h1 class="masthead-heading text-uppercase mb-0 fs-50 fw-bold border-green">CONTACTO</h1>
        </div>
    </header>
    <section class="page-section" id="contact">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactanos</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Nombre</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Correo</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Telefono</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Mensaje</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-flex pt-3">
                            <button class="btn btn-primary fondo-verde mx-auto borde-verde color-white px-5 py-2 fs-5"
                                type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
