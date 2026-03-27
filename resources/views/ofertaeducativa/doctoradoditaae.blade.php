@extends('layouts.pagina')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/calendario.css') }}">

<style>
    /* Hero section */
    #hero {
        background: url('assets/img/Doctorado/Cielo/banner-04.jpg') center center;
        background-size: cover;
        height: 300px;
    }

    @media (max-width: 820px) {
        #hero {
            background: url('assets/img/Doctorado/Cielo/banner-06.jpg') center center;
            background-size: cover;
            height: 450px;
        }
    }

    @media (max-width: 480px) {
        #hero {
            background: url('assets/img/Doctorado/Cielo/banner-06.jpg') center center;
            background-size: cover;
            height: 340px;
        }
    }

    /* Carrusel responsivo */
    #carouselExampleIndicators img {
        object-fit: cover;
        width: 100%;
        max-height: 400px;
    }

    @media (max-width: 768px) {
        #carouselExampleIndicators img {
            max-height: 250px;
        }
    }

    @media (max-width: 480px) {
        #carouselExampleIndicators img {
            max-height: 200px;
        }
    }
</style>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center"></section>

<!-- Contenido -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <!-- Carrusel Responsivo -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/Doctorado/CAMBIOS DOC__Mesa de trabajo 1 copia 10.jpg" alt="Doctorado Cambios" class="d-block w-100 img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Doctorado/BannerDoctorado1.webp" alt="Doctorado Primer Generación" class="d-block w-100 img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Doctorado/IMG_Mesa de trabajo 1 copia 7.jpg" alt="Doctorado" class="d-block w-100 img-fluid">
                </div>
            </div>

            <!-- Controles -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <br>

        <!-- Contenido Post-Carrusel -->

        <!-- Objetivo -->
        <div class="row">
            <div class="col-lg-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Objetivo</h3>
                    <p style="text-align: justify;">
                        Formar y consolidar investigadores en los diferentes ambientes educativos (formal, no formal e informal) capaces de apropiarse y generar nuevo conocimiento, con ética científica y competentes para innovar, crear, diseñar, instrumentar, gestionar y evaluar proyectos de calidad que contribuyan a la sociedad.
                    </p>
                </div>
            </div>
        </div>
        <br>

        <!-- Perfil del Aspirante -->
        <div class="row">
            <div class="col-lg-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Perfil del Aspirante</h3>
                    <p class="text-left">
                        <span class="checkmark">✔</span> Contar con un bagaje disciplinario amplio y sólido.<br>
                        <span class="checkmark">✔</span> Contar con los elementos teóricos y metodológicos, relacionados con el campo educativo para desarrollar investigaciones.<br>
                        <span class="checkmark">✔</span> Ser egresados de Maestría en Educación o Innovación Educativa o área afín a la disciplina del Doctorado en Innovación y Tecnología Aplicadas en Ambientes Educativos.<br>
                    </p>
                </div>
            </div>
        </div>
        <br>

        <!-- Perfil de Egresado -->
        <div class="row">
            <div class="col-lg-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Perfil de Egresado</h3>
                    <p class="text-left">
                        <span class="checkmark">✔</span> Generar nuevo conocimiento para la solución de problemáticas educativas (nacionales e internacionales) y la postulación de propuestas y estrategias de mejora.<br>
                        <span class="checkmark">✔</span> Diseñar, implementar y evaluar proyectos de investigación educativa, que aborden soluciones a problemas complejos del país y de la sociedad contemporánea.<br>
                        <span class="checkmark">✔</span> Ejercer un liderazgo proactivo en organizaciones que realizan actividades educativas.<br>
                    </p>
                </div>
            </div>
        </div>
        <br>

        <!-- Habilidades -->
        <div class="row">
            <div class="col-lg-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Habilidades</h3>
                    <p class="text-left">
                        <span class="checkmark">✔</span> Actitud crítica.<br>
                        <span class="checkmark">✔</span> Diseñar políticas educativas.<br>
                        <span class="checkmark">✔</span> Adaptación a la diversidad y al cambio.<br>
                        <span class="checkmark">✔</span> Trabajar con grupos multidisciplinarios.<br>
                        <span class="checkmark">✔</span> Toma de decisiones y solución de problemas.<br>
                        <span class="checkmark">✔</span> Investigar, analizar y evaluar sistemas educativos.<br>
                        <span class="checkmark">✔</span> Desarrollarse en un ambiente competitivo, multicultural y globalizado.<br>
                    </p>
                </div>
            </div>
        </div>
        <br>

        <!-- Líneas de investigación -->
        <div class="row">
            <div class="col-lg-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Líneas de Investigación</h3>
                </div>
            </div>
        </div>

        <!-- Cobertura y Calidad / Gestión -->
        <div class="row">
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Cobertura y Calidad Educativa</h3>
                    <p style="text-align: justify;">
                        Consiste en realizar estudios que permitan vislumbrar hasta dónde llega la cobertura de la educación a nivel nacional y la calidad con la que se imparte...
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Gestión, Evaluación y Planeación Educativa</h3>
                    <p style="text-align: justify;">
                        Consiste en realizar estudios que permitan atender problemas que se encuentran dentro de una serie de procesos interrelacionados dentro de la educación...
                    </p>
                </div>
            </div>
        </div>

        <!-- Política Educativa / Innovación -->
        <div class="row">
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Política Educativa</h3>
                    <p style="text-align: justify;">
                        Consiste en realizar estudios donde se analice la capacidad y efectividad de los gobiernos para direccionar y liderar los procesos necesarios en materia de educación...
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Innovación y Tecnología</h3>
                    <p style="text-align: justify;">
                        La importancia de estos estudios radica en el reconocimiento de la necesidad de incorporar diversos recursos tecnológicos que potencialicen el conocimiento...
                    </p>
                </div>
            </div>
        </div>

        <!-- Cultura / Problemas de Enseñanza -->
        <div class="row">
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Cultura, Interculturalidad y Multiculturalidad</h3>
                    <p style="text-align: justify;">
                        Consiste en realizar estudios que construyen un camino más equitativo, atendiendo a la diversidad y la inclusión...
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Problemas de Enseñanza y Aprendizaje</h3>
                    <p style="text-align: justify;">
                        Consiste en hacer investigaciones con intervención educativa en los diferentes problemas que se encuentran dentro del proceso de enseñanza y aprendizaje...
                    </p>
                </div>
            </div>
        </div>

        <!-- Requisitos / Modalidad -->
        <div class="row">
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Requisitos</h3>
                    <p class="text-left">
                        📝 Cédula Federal <strong>(Original y 2 Copias)</strong>.<br>
                        📝 Registro Estatal <strong>(Original y 2 Copias)</strong>.<br>
                        📝 Título de Maestría <strong>(Original y 2 Copias)</strong>.<br>
                        📝 Título de Licenciatura <strong>(Original y 2 Copias)</strong>.<br>
                        📝 Certificado de Licenciatura <strong>(Original y 2 Copias)</strong>.<br>
                        📝 Certificado de Maestría <strong>(Original y 2 Copias)</strong>.<br>
                        📝 Carta de motivos para cursar estudios de posgrado y de licenciatura <strong>(Original y Copia)</strong>.<br>
                        📝 Acta de Nacimiento <strong>(Original y Copia)</strong>.<br>
                        📝 CURP <strong>(Copia)</strong>.<br>
                        📝 6 Fotografías tamaño infantil.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Modalidad</h3>
                    <h5 class="text-left">Sabatino</h5>
                    <p class="text-left">🕗 07:00 a 16:00 Hrs.</p>
                    <p class="text-left">
                        <strong>Tipo de Ciclo:</strong> Modular<br>
                        <strong>Duración:</strong> 2 años
                    </p>
                    <h5 class="text-left">Informes</h5>
                    <p class="text-left">
                        📞 (771)-719-4495<br>
                        <img width="20" height="20" src="https://img.icons8.com/water-color/50/whatsapp.png" alt="whatsapp" /> (771)-139-2240<br>
                        📩 promocion@cuh.mx
                    </p>
                </div>
            </div>
        </div>

        <!-- Documentos Desplegables -->
        <div class="row">
            <div class="col-12">
                <div class="box featured">
                    <h3 class="text-left mb-4">Documentos Oficiales</h3>

                    <!-- Acordeón Bootstrap -->
                    <div class="accordion" id="accordionDocumentos">

                        <!-- Calendario Escolar -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="accordion-header" id="headingCalendario">
                                <button class="accordion-button collapsed w-100 text-start" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseCalendario"
                                    aria-expanded="false"
                                    aria-controls="collapseCalendario">
                                    <div class="d-flex align-items-center justify-content-between w-100">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <strong class="d-block"> Calendario Escolar</strong>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseCalendario" class="accordion-collapse collapse"
                                aria-labelledby="headingCalendario"
                                data-bs-parent="#accordionDocumentos">
                                <div class="accordion-body p-0">
                                    <div class="documento-iframe-container">
                                            <iframe src="https://drive.google.com/file/d/1CUkubRcTzYdUR4YqHmqZUFybjW45RGQd/preview?usp=sharing" 
                                            width="100%"
                                            height="500"
                                            loading="lazy"
                                            title="Calendario Escolar">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Plan de Estudio 2002-2023 -->
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                            <h2 class="accordion-header" id="headingPlan2002">
                                <button class="accordion-button collapsed w-100 text-start" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapsePlan2002"
                                    aria-expanded="false"
                                    aria-controls="collapsePlan2002">
                                    <div class="d-flex align-items-center justify-content-between w-100">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <strong class="d-block"> Plan de Estudios</strong>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapsePlan2002" class="accordion-collapse collapse"
                                aria-labelledby="headingPlan2002"
                                data-bs-parent="#accordionDocumentos">
                                <div class="accordion-body p-0">
                                    <div class="documento-iframe-container">
                                        <iframe src="https://drive.google.com/file/d/1kT5yRwbREeynmclcbH9yJvFU6QPUjE0v/preview?usp=drive_link"
                                            width="100%"
                                            height="500"
                                            loading="lazy"
                                            title="Plan de Estudio 2002-2023">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Font Awesome para íconos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Bootstrap 5 JS Bundle (necesario para el acordeón) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/js/calendario.js') }}"></script>
@endsection