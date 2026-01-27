@extends('layouts.pagina')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/calendario.css') }}">
<style>
    /* Hero section */
    #hero {
        background: url('assets/img/Doctorado/Cielo/banner-02.jpg') center center;
        background-size: cover;
        height: 300px;
    }

    @media (max-width: 820px) {
        #hero {
            background: url('assets/img/Doctorado/DoctoradoDCD1.png') center center;
            background-size: cover;
            height: 450px;
        }
        .carousel-item img {
            height: 250px !important;
        }
        .investigation-title {
            font-size: 1.5rem;
        }
        .box {
            padding: 15px;
        }
    }

    @media (max-width: 450px) {
        #hero {
            background: url('assets/img/Doctorado/DoctoradoDCD1.png') center center;
            background-size: cover;
            height: 340px;
        }
        .carousel-item img {
            height: 200px !important;
        }
        .investigation-title {
            font-size: 1.3rem;
        }
        iframe {
            width: 100% !important;
            height: 350px !important;
        }
    }

    /* Carrusel general */
    .carousel-item img {
        object-fit: cover;
        width: 100%;
        height: 350px;
    }

    /* Ajuste de checkmarks */
    .checkmark {
        margin-right: 8px;
    }
</style>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center"></section>

<!-- Contenido -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <!-- Carrusel Responsivo -->
        <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/Doctorado/CienciasdelDerecho.jpg" class="d-block w-100" alt="Doctorado en DCD">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Doctorado/BannerDoctorado1.webp" class="d-block w-100" alt="Doctorado Primer Generación">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Doctorado/IMG_Mesa de trabajo 1 copia 7.jpg" class="d-block w-100" alt="Doctorado">
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

        <!-- Objetivo -->
        <div class="row">
            <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3">
                    <h3 class="investigation-title">Objetivo</h3>
                    <p class="text-justify">Formar y consolidar investigadores en los diferentes ámbitos del Derecho, capaces de apropiarse y generar nuevo conocimiento, con ética científica y competentes para innovar, crear, diseñar, instrumentar, gestionar, evaluar proyectos de calidad que contribuyan a la sociedad.</p>
                </div>
            </div>
        </div>

        <!-- Perfil del Aspirante -->
        <div class="row">
            <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3">
                    <h3 class="investigation-title">Perfil del Aspirante</h3>
                    <p class="text-left mb-0">
                        <span class="checkmark">✔</span> Contar con un bagaje disciplinario amplio y sólido<br>
                        <span class="checkmark">✔</span> Ser egresados de Maestría en Derecho o área afín a la disciplina del Doctorado en Ciencias del Derecho<br>
                        <span class="checkmark">✔</span> Contar con los elementos teóricos y metodológicos, relacionados con el campo jurídico para desarrollar propuestas e innovaciones en el campo jurídico, ya sea como operadores jurisdiccionales o bien como abogados postulantes.
                    </p>
                </div>
            </div>
        </div>

        <!-- Perfil de Egresado -->
        <div class="row">
            <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3">
                    <h3 class="investigation-title">Perfil de Egresado</h3>
                    <p class="text-justify">Enfrentará eficazmente con conocimientos jurídicos y habilidades argumentativas científicas los nuevos paradigmas y fenómenos jurídicos, así como para la generación de conocimiento, mediante la investigación, con alta capacidad para diseñar, coordinar, emprender, dirigir y participar en la investigación aplicada, interactuando con otros científicos sociales, orientada a la solución de los problemas socio-jurídicos.</p>
                </div>
            </div>
        </div>

        <!-- Habilidades -->
        <div class="row">
            <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3">
                    <h3 class="investigation-title">Habilidades</h3>
                    <p class="text-left mb-0">
                        <span class="checkmark">✔</span> Actitud crítica.<br>
                        <span class="checkmark">✔</span> Adaptación a la diversidad y al cambio.<br>
                        <span class="checkmark">✔</span> Toma de decisiones y solución de problemas.<br>
                        <span class="checkmark">✔</span> Desenvolverse en un ambiente competitivo, multicultural y globalizado.<br>
                        <span class="checkmark">✔</span> Aplica la metodología jurídica para determinar los procesos a seguir en la integración de casos.<br>
                        <span class="checkmark">✔</span> Diseña procesos de investigación jurídica colaborativos, para profundizar en temas relacionados con el derecho.<br>
                        <span class="checkmark">✔</span> Detección y análisis de problemas jurídicos, sociales, económicos, políticos, su diseño, implantación y evaluación de las soluciones propuestas.
                    </p>
                </div>
            </div>
        </div>

        <!-- Líneas de Investigación -->
        <div class="row">
            <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3">
                    <h3 class="investigation-title">Líneas de Investigación</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3 h-100">
                    <h3 class="investigation-title">Derecho Penal y Ciencias Auxiliares</h3>
                    <p class="text-justify">Estudio de la conducta delictiva y medidas de seguridad para los responsables.</p>
                    <p class="text-justify mb-0">
                        <span class="checkmark">✔</span> Investigación Penal y Cadena de Custodia.<br>
                        <span class="checkmark">✔</span> Criminalística y Criminología.<br>
                        <span class="checkmark">✔</span> Seguridad y Política Criminal.<br>
                        <span class="checkmark">✔</span> Proceso Penal Acusatorio.<br>
                        <span class="checkmark">✔</span> Justicia para Adolescentes.<br>
                        <span class="checkmark">✔</span> Dogmática Penal.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3 h-100">
                    <h3 class="investigation-title">Derecho Civil y sus Ramas</h3>
                    <p class="text-justify">Análisis de daños en la sociedad y su resolución.</p>
                    <p class="text-justify mb-0">
                        <span class="checkmark">✔</span> Propiedad Intelectual.<br>
                        <span class="checkmark">✔</span> Sucesorio Registral.<br>
                        <span class="checkmark">✔</span> Contratos y Obligaciones.<br>
                        <span class="checkmark">✔</span> Equidad y Género.<br>
                        <span class="checkmark">✔</span> Mercantil.<br>
                        <span class="checkmark">✔</span> Familiar.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3 h-100">
                    <h3 class="investigation-title">Estudio del Derecho y la Ciencia Jurídica</h3>
                    <p class="text-justify">Estudio teórico-práctico de legislaciones para mejorar la justicia.</p>
                    <p class="text-justify mb-0">
                        <span class="checkmark">✔</span> Derecho Constitucional y Amparo.<br>
                        <span class="checkmark">✔</span> Razonamiento Probatorio y Argumentación.<br>
                        <span class="checkmark">✔</span> Técnicas de Litigación Oral.<br>
                        <span class="checkmark">✔</span> Justicia y Derechos Humanos.<br>
                        <span class="checkmark">✔</span> Filosofía del Derecho.<br>
                        <span class="checkmark">✔</span> Derecho Comparado.
                    </p>
                </div>
            </div>
        </div>

        <!-- Requisitos y Modalidad -->
        <div class="row">
            <div class="col-md-6 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3 h-100">
                    <h3 class="investigation-title">Requisitos</h3>
                    <p class="text-left mb-0">
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

            <div class="col-md-6 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured p-3 h-100">
                    <h3 class="investigation-title">Modalidad</h3>
                    <h5 class="text-left">Sabatino</h5>
                    <p class="text-left">🕗 07:00 a 16:00 Hrs.</p>
                    <p class="text-left"><strong>Tipo de Ciclo:</strong> Modular<br><strong>Duración:</strong> 2 años</p>
                    <h5 class="text-left">Informes</h5>
                    <p class="text-left mb-0">📞 (771)-719-4495<br>📱 (771)-139-2240<br>📩 promocion@cuh.mx</p>
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
                                            <iframe src="https://drive.google.com/file/d/1ELU43CXTA05906qOo7uJQIXSFwN7LnoL/preview?usp=drive_link" 
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