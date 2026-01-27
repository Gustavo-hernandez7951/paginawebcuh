@extends('layouts.pagina')

@section('content')
    <!-- ======= Licenciatura Index ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Carga de archivos</h2>
            <h3><i class="icofont-upload"></i> Validación de las cargas</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <a href="/" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Aceptar</a>
                @endif
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
@endsection