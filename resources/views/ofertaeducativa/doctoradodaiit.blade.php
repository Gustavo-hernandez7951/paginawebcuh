@extends('layouts.pagina')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/calendario.css') }}">

<style>
    /* Hero section */
    #hero {
        background: url('assets/img/Doctorado/Cielo/banner-03.jpg') center center;
        background-size: cover;
        height: 300px;
    }

    @media (max-width: 820px) {
        #hero {
            background: url('assets/img/Doctorado/DoctoradoDAIIT1.png') center center;
            background-size: cover;
            height: 450px;
        }
    }

    @media (max-width: 480px) {
        #hero {
            background: url('assets/img/Doctorado/DoctoradoDAIIT1.png') center center;
            background-size: cover;
            height: 340px;
        }
    }

    /* Carrusel responsivo */
    #carouselExampleIndicators img {
        object-fit: cover;
        width: 100%;
        max-height: 350px;
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
                    <img src="assets/img/Doctorado/CAMBIOS DOC__Mesa de trabajo 1 copia 9.jpg" alt="Doctorado Cambios" class="d-block w-100 img-fluid">
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

        <!-- Objetivo -->
        <div class="row">
            <div class="col-lg-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Objetivo</h3>
                    <p style="text-align: justify;">
                        Ofrecer un programa de doctorado en Administración Integral e Innovación Tecnológica con una sólida formación en investigación teórica y aplicada en las diferentes áreas de la administración, que sean capaces de apropiarse y generar nuevo conocimiento, con alto sentido ético y con sustento científico sólido.
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
                    <p style="text-align: justify;">
                        <span class="checkmark">✔</span> Contar con un bagaje disciplinar amplio y sólido. <br>
                        <span class="checkmark">✔</span> Contar con los elementos teóricos y metodológicos, relacionados con el campo de negocios para desarrollar investigaciones. <br>
                        <span class="checkmark">✔</span> Ser egresados de Maestría en Administración o Finanzas o áreas afín a la disciplina del Doctorado en Administración Integral e Innovación Tecnológica.
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
                        <span class="checkmark">✔</span> Implementar estrategias en el ámbito financiero y fiscal. <br>
                        <span class="checkmark">✔</span> Adaptar innovación tecnológica para las organizaciones que permitan obtener ventajas competitivas.<br>
                        <span class="checkmark">✔</span> Ejercer un liderazgo en organizaciones, diseñando e implantando proyectos de innovación con enfoque prospectivo para el desarrollo sustentable en materia de negocios.<br>
                        <span class="checkmark">✔</span> Diseñar, implementar y evaluar proyectos de investigación sobre administración integral y tecnología, que aborden soluciones a problemas de las organizaciones con impacto social, económico y medioambiental.<br>
                        <span class="checkmark">✔</span> Generar nuevo conocimiento para la solución de problemáticas sobre negocios y tecnología para las organizaciones (nacionales e internacionales) y la postulación de propuestas y estrategias de mejora para el desarrollo de los negocios.<br>
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
                        <span class="checkmark">✔</span> Actitud crítica. <br>
                        <span class="checkmark">✔</span> Diseñar políticas organizacionales.<br>
                        <span class="checkmark">✔</span> Adaptación a la diversidad y al cambio.<br>
                        <span class="checkmark">✔</span> Trabajar con grupos multidisciplinarios.<br>
                        <span class="checkmark">✔</span> Desarrollar modelos para innovación tecnológica.<br>
                        <span class="checkmark">✔</span> Tomar decisiones estratégicas y solución de problemas.<br>
                        <span class="checkmark">✔</span> Investigar, analizar y evaluar problemas organizacionales.<br>
                        <span class="checkmark">✔</span> Análisis e interpretación y evaluación de información financiera.<br>
                        <span class="checkmark">✔</span> Desenvolverse en un ambiente competitivo, multicultural y globalizado.<br>
                        <span class="checkmark">✔</span> Visualizar estrategias y escenarios de vanguardia que respondan a retos globales.<br>
                        <span class="checkmark">✔</span> Detección y propuesta de soluciones a problemas financieros, fiscales y administrativos.
                    </p>
                </div>
            </div>
        </div>
        <br>

        <!-- Líneas de Investigación -->
        <div class="row">
            <div class="col-lg-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Líneas de Investigación</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Administración de Riesgos y Mercados Financieros</h3>
                    <p style="text-align: justify;">
                        Consiste en la gestión que se realiza internamente en una empresa con la finalidad de proteger y crear valor en la misma y a la vez mejorar su competitividad, así como el análisis de las distintas ofertas y demandas a las que está expuesta para comprar y vender valores financieros.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Estrategias Empresariales e Impacto Medioambiental</h3>
                    <p style="text-align: justify;">
                        Consiste en la indagación de problemáticas dentro de una empresa de cualquier sector en materia de organización y productividad que permita el diseño de estrategias, para evitar el daño ambiental y mejorar su productividad.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                    <h3 class="investigation-title">Innovación y Competitividad</h3>
                    <p style="text-align: justify;">
                        Se refiere al diseño de estrategias que permitan a una empresa ser más competitiva ante otras por medio de la creación de un producto nuevo que sea de utilidad en un área geográfica determinada.
                    </p>
                </div>
            </div>
        </div>

        <br>

        <!-- Requisitos y Modalidad -->
        <div class="row">
            <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
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
            <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
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
                        <img width="20" height="20" src="https://img.icons8.com/water-color/50/whatsapp.png" alt="whatsapp"/> (771)-139-2240 <br>
                        📩 promocion@cuh.mx
                    </p>
                </div>
            </div>
        </div>

        <br>
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
                                            <iframe src="https://drive.google.com/file/d/19xeekdZ1htM7GltbcZw16hADlRPl48qq/preview?usp=drive_link" 
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
                                            <iframe src="https://drive.google.com/file/d/1iUSpLb1p0AoLFwsUSxoaR64gqZe2qk5a/preview?usp=drive_link" 
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