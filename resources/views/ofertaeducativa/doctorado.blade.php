@extends('layouts.pagina')
@section('content')

<style>
    #hero {
        background: url('assets/img/Doctorado/Cielo/banner_doctorados -01.jpg') center center;
        background-size: cover;
        height: 300px;
    }

    /* Media query para pantallas más pequeñas */
    @media (max-width: 820px) {
        #hero {
            background: url('assets/img/Doctorado/Cielo/banner_doctorados -01.jpg') center center;
            background-size: cover;
            height: 450px; /* Ajusta la altura para pantallas más pequeñas */
        }
    }

    /* Media query para pantallas muy pequeñas, como móviles */
    @media (max-width: 480px) {
        #hero {
            background: url('assets/img/Doctorado/Cielo/banner-08.jpg') center center;
            background-size: cover;
            height: 340px; /* Ajusta la altura para pantallas muy pequeñas */
        }
    }

    /* Responsividad del carrusel */
    #carouselDoctorado img {
        object-fit: cover;
        max-height: 400px;
    }

    @media (max-width: 768px) {
        #carouselDoctorado img {
            max-height: 250px;
        }
    }

    @media (max-width: 480px) {
        #carouselDoctorado img {
            max-height: 200px;
        }
    }
</style>

<!-- ======= Doctorado Section ======= -->
<section id="hero" class="d-flex align-items-center">
</section>

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 align="center">Doctorado</h3>
                    <p class="text-justify" style="color: #333; font-size: 16px;">
                        Nuestro modelo educativo está diseñado para ofrecer una formación avanzada y especializada, tanto para profesionales como para académicos, en diversas áreas del conocimiento. A través de un plan de estudios riguroso y presencial, permite a los estudiantes profundizar en sus campos de interés mientras mantienen sus compromisos profesionales. Este enfoque promueve el uso de metodologías de investigación avanzadas y tecnologías innovadoras, garantizando una formación de alta calidad y relevancia científica.
                        <br>Además, se enfoca en el desarrollo de habilidades críticas y analíticas, procesos de investigación exhaustivos y la aplicación práctica del conocimiento, generando contribuciones significativas para la sociedad y el avance de cada disciplina.
                        <br>Ofrecemos diversos programas de doctorado, incluyendo:
                        <p align="justify">
                            ✔ Doctorado en Ciencias del Derecho<br>
                            ✔ Doctorado en Administración Integral e Innovación Tecnológica<br>
                            ✔ Doctorado en Innovación y Tecnología Aplicada en Ambientes Educativos<br>
                        </p>
                        <br>
                        <p class="text-justify" style="color: #333; font-size: 16px;">
                            Cada programa está diseñado para preparar a los estudiantes con las herramientas necesarias para su éxito profesional y académico, fomentando la generación de nuevo conocimiento y la aplicación innovadora de soluciones a problemas complejos en sus respectivos campos. Nuestros doctorados buscan formar líderes capaces de enfrentar los desafíos globales con ética, creatividad y un profundo compromiso con la excelencia.
                        </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= Carrusel Responsivo ======= -->
<div class="container" data-aos="fade-up">
    <div id="carouselDoctorado" class="carousel slide" data-ride="carousel" data-interval="3500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/Doctorado/IMG_Mesa de trabajo 1 copia 7.jpg" 
                    class="d-block w-100 img-fluid" 
                    alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="assets/img/Doctorado/BannerDoctorado1.webp" 
                    class="d-block w-100 img-fluid" 
                    alt="Slide 2">
            </div>
        </div>

        <!-- Botón anterior -->
        <a class="carousel-control-prev" href="#carouselDoctorado" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>

        <!-- Botón siguiente -->
        <a class="carousel-control-next" href="#carouselDoctorado" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
    <br>

    <!-- Tarjetas de Información -->
    <div class="row">
        <!-- Doctorado en Administración Integral e Innovación Tecnológica -->
        <div class="col-md-4">
            <div class="card h-100 animated-card">
                <img src="assets/img/Doctorado/CUADRICULA_208X208PX_DAIIT.jpg" class="card-img-top custom-card-img" alt="Doctorado en Administración Integral e Innovación Tecnológica">
                <div class="card-body">
                    <h5 class="card-title card-title-blue" style="color: #000080;">
                        <a href="doctoradodaiit">Doctorado en Administración Integral e Innovación Tecnológica</a>
                    </h5>
                    <p class="card-text"><strong>R.V.O.E. SEMSyS 2513416</strong></p>
                </div>
            </div>
        </div>
        <!-- Doctorado en Ciencias del Derecho -->
        <div class="col-md-4">
            <div class="card h-100 animated-card">
                <img src="assets/img/Doctorado/CUADRICULA_208X208PX_DCD.jpg" class="card-img-top custom-card-img" alt="Doctorado en Ciencias del Derecho">
                <div class="card-body">
                    <h5 class="card-title card-title-blue" style="color: #000080;">
                        <a href="doctoradodcd">Doctorado en Ciencias del Derecho</a>
                    </h5>
                    <p class="card-text"><strong>R.V.O.E. SEMSyS 2513415</strong></p>
                </div>
            </div>
        </div>
        <!-- Doctorado en Innovación y Tecnología Aplicadas en Ambientes Educativos -->
        <div class="col-md-4">
            <div class="card h-100 animated-card">
                <img src="assets/img/Doctorado/CUADRICULA_208X208PX_DITAAE.jpg" class="card-img-top custom-card-img" alt="Doctorado en Innovación y Tecnología Aplicadas en Ambientes Educativos">
                <div class="card-body">
                    <h5 class="card-title card-title-blue" style="color: #000080;">
                        <a href="doctoradoditaae">Doctorado en Innovación y Tecnología Aplicadas en Ambientes Educativos</a>
                    </h5>
                    <p class="card-text"><strong>R.V.O.E. SEMSyS 2513414</strong></p>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

@endsection