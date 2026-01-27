@extends('layouts.pagina')

@section('content')
<link href="assets/css/manualseguridad.css" rel="stylesheet">
<section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3 font-weight-bolder text-white">Manual de Seguridad</h1>
        <h2 class="text-white">CUH</h2>
    </div>
</section>
<!-- ======= Manual de Seguridad Section ======= -->
<div class="row">
    <!-- Sección de información -->
    <div class="box featured shadow-lg border-light rounded" data-aos="fade-up" style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;">
        <div class="container text-center">
            <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestro Manual</h2>
        </div>
        <p style="text-align: justify; color: #333; font-size: 20px;" data-aos="fade-up">
            El Manual de Seguridad del Centro Universitario Hidalguense (CUH) tiene como objetivo garantizar un entorno seguro para los estudiantes de licenciatura y maestría, promoviendo la prevención de riesgos y una cultura de seguridad. Establece procedimientos claros para actuar en caso de emergencias como incendios, sismos o evacuaciones, y fomenta la capacitación continua de la comunidad universitaria. Además, resalta la importancia de la responsabilidad individual y colectiva en el cumplimiento de las normas de seguridad. El manual se actualiza según nuevas normativas y situaciones de riesgo, buscando siempre el bienestar de todos los miembros de la institución.
        </p>
    </div>
</div>
<section id="services" class="services">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="embed-responsive embed-responsive-1by1 shadow-lg border-light rounded">
                    <iframe src="{{ asset('https://drive.google.com/file/d/1x_Zax1xXEO6nbyxi2uKNC5itEZxKiNqq/preview') }}" class="w-100 h-100"></iframe>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->
    
    <!-- Contacto WhatsApp icono Flotante 
    <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=7711392240">
        <i class="bx bxl-whatsapp"></i>
    </a>
    -->
@endsection