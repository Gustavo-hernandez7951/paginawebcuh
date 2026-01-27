@extends('layouts.pagina')

@section('content')
<style>
  .featured-services {
    padding: 60px 0;
    background-color: #fff;
    color: #333;
  }

  .featured-services .section-title {
    margin-bottom: 40px;
    text-align: center;
  }

  .featured-services .section-title h2 {
    font-size: 36px;
    font-weight: bold;
    color: #000080;
  }

  .featured-services .section-title h3 {
    font-size: 28px;
    color: #000080;
  }

  .featured-services .section-title h3 span {
    color: #000080;
  }

  .featured-services .icon-box {
    padding: 20px;
    border: 2px solid #007BFF;
    border-radius: 12px;
    background-color: #e7f3ff;
    color: #333;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .featured-services .icon-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }

  .featured-services .icon-box .icon {
    font-size: 48px;
    color: #007BFF;
    margin-bottom: 20px;
  }

  .featured-services .icon-box .title {
    font-size: 24px;
    font-weight: bold;
    color: #000080;
    margin-bottom: 10px;
  }

  .featured-services .icon-box .description {
    font-size: 18px;
    color: #777;
    line-height: 1.6;
  }

  .custom-img {
    width: 100%;
    height: auto;
    max-height: 300px;
    object-fit: cover;
    margin-bottom: 20px;
  }
</style>

<section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3 font-weight-bolder text-white">Logros Académicos</h1>
        <h2 class="text-white">CUH</h2>
    </div>
</section>
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
  <div class="container" data-aos="fade-up">
    <div class="col-lg-12 text-center mb-4" data-aos="zoom-out" data-aos-delay="100">
        <img src="assets/img/LogrosAcademicos/portada1.webp" class="img-fluid custom-img rounded shadow" alt="Imagen Logros Académicos CUH">
    </div>
    <br><br>
    <div class="row">
      @php
        $logros = [
          [
            'titulo' => '¡Top 10 en Hackaton!',
            'descripcion' => 'El 10° lugar en el torneo Hackaton por la Ingeniería en Sistemas Computacionales en la Expo Computación Electrónica y Telecomunicación 2019 organizado por la UAEH. Noviembre 2019.'
          ],
          [
            'titulo' => '¡19° en Hackmex!',
            'descripcion' => 'El 19° lugar en el torneo Hackmex por la Ingeniería en Sistemas Computacionales en el Instituto Politécnico Nacional 2019.'
          ],
          [
            'titulo' => '¡Doble Reconocimiento Regional en Ética!',
            'descripcion' => 'El 8° y 9° lugar regional del equipo de contaduría y sistemas fiscales en el Concurso Código de Ética Profesional y Contabilidad 2019, con sede en la Ciudad de México.'
          ],
          [
            'titulo' => '¡14° en Mediación Nacional!',
            'descripcion' => 'El 14° lugar del equipo de mediación en la fase regional del IV Concurso Nacional de Mediación ABA-ROLI en el 2019. Desarrolladas en julio, Ciudad de Puebla.'
          ],
          [
            'titulo' => '¡Premio CENEVAL de Excelencia!',
            'descripcion' => 'Premio CENEVAL al desempeño de excelencia-EGEL 2018 de la licenciatura en derecho celebrado en la Universidad Autónoma de Sinaloa en mayo de 2019.'
          ],
          [
            'titulo' => '¡4° en Juicio Oral Nacional!',
            'descripcion' => 'El 4° lugar del equipo de litigación oral en la fase nacional del VI Concurso Nacional de Juicio Oral y Audiencias Preliminares California Western 2019, con sede en la Ciudad de Tijuana, Baja California.'
          ],
          [
            'titulo' => '¡4° en Hackaton 2018!',
            'descripcion' => 'El 4° lugar en el torneo Hackaton por la Ingeniería en Sistemas Computacionales en la Expo Computación Electrónica y Telecomunicación 2018 organizado por la UAEH.'
          ],
          [
            'titulo' => '¡5° en Litigación Penal Nacional!',
            'descripcion' => 'La 5° posición en puntaje general del equipo de litigación oral del X Concurso Nacional Universitario de Litigación Penal INECIP 2018, desarrollado en la Facultad de Derecho de la Universidad del Rosario, Argentina.'
          ],
          [
            'titulo' => '¡9° en Ética Profesional Regional!',
            'descripcion' => 'El 9° lugar regional del equipo de contaduría y sistemas fiscales en el Concurso Código de Ética Profesional 2018, con sede en la Ciudad de México.'
          ],
          [
            'titulo' => '¡9° en Litigación Oral Nacional!',
            'descripcion' => 'El 9° lugar del equipo de litigación oral en la fase nacional de la V Competencia Nacional de Litigación Oral ABA-ROLI 2018, con sede en la Ciudad de México.'
          ],
          [
            'titulo' => '¡4° y 10° en Litigación Oral Regional!',
            'descripcion' => 'El 4° y 10° lugar de 2 equipos de litigación oral en la fase regional de la V Competencia Nacional de Litigación Oral ABA-ROLI en el 2018. Desarrolladas en Oaxaca y Monterrey.'
          ],
          [
            'titulo' => '¡5° en Litigación Penal Universitaria!',
            'descripcion' => 'El 5° lugar del equipo de litigación oral en la Primer Competencia Universitaria de Litigación Penal 2017, organizado por la Facultad de Derecho de la UNAM.'
          ],
          [
            'titulo' => '¡Nuevas Carreras en 2016!',
            'descripcion' => 'La apertura de las carreras en Ciencias de la Educación e Ingeniería en Sistemas Computacionales, en el año 2016.'
          ],
          [
            'titulo' => '¡Maestrías Implementadas en 2014!',
            'descripcion' => 'La implementación de las maestrías en Administración de Negocios, Derecho Civil, Derecho Procesal Penal Acusatorio, Estrategias de Intervención en Problemas de Aprendizaje, Finanzas y Formación Docente a partir del año 2014.'
          ],
          [
            'titulo' => '¡3er Lugar en Campeonato Fiscal Estatal!',
            'descripcion' => 'El 3er lugar de contaduría y sistemas fiscales en el Primer Campeonato Fiscal Estatal 2010, organizado por el Sistema de Administración Tributaria con sede en Pachuca.'
          ],
        ];
      @endphp

      @foreach ($logros as $logro)
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5">
          <div class="icon-box shadow-lg" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
            <div class="icon"><i class='bx bxs-medal text-primary'></i></div>
            <h4 class="title">{{ $logro['titulo'] }}</h4>
            <p class="description">{{ $logro['descripcion'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section><!-- End Featured Services Section -->
<!-- Contacto WhatsApp icono Flotante 
<a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=7711392240">
    <i class="bx bxl-whatsapp"></i>
</a>
-->
@endsection