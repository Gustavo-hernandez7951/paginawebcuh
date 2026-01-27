@extends('layouts.pagina')

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/ofertaacademica.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendario.css') }}">

    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">OFERTA EDUCATIVA</h1>
            <h2 class="text-white">Maestría en Derecho Procesal Penal Acusatorio</h2>
        </div>
    </section>

    <!-- ======= Seccion Maestría en Derecho Procesal Penal Acusatorio ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <!-- imagenes portada -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets\img\Macu\MacuDerechoProcesal.webp" class="d-block w-100" alt="Derecho Procesal Penal Acusatorio">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Macu\MacuDerechoProcesal.webp" class="d-block w-100" alt="Derecho Procesal Penal Acusatorio">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Macu\MacuDerechoProcesal.webp" class="d-block w-100" alt="Derecho Procesal Penal Acusatorio">
                    </div>
                </div>
            </div>
            <br>
            <!-- cards carrera -->
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Objetivo</h3>
                        <p class="text-left">
                            ✔ La formación de maestros con elevado nivel de conocimientos y habilidades del sistema penal acusatorio, que mediante la aplicación de las normas y principios fundamentales de este nuevo sistema en materia penal.<br>
                            ✔ Proporcionar al egresado las herramientas teóricas y prácticas suficientes para participar exitosamente en el desarrollo del procedimiento, ya sea como autoridad, como parte principal, o como auxiliar, realizando su función con vocación, preparación y ética al servicio de la sociedad y del país.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Perfil del Aspirante</h3>
                        <p class="text-left">
                            Ser egresado de la Licenciatura en Derecho y tener la disposición para profundizar sus conocimientos en materia penal para desenvolverse en el ramo público y privado, apoyándose de las nuevas tecnologías.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Perfil de Egresado</h3>
                        <p class="text-left">
                            El egresado aplicará sus destrezas, habilidades tecnológicas, aptitudes y conocimientos jurídicos en las diferentes ramas del derecho, ya sea público o privado, nacional o internacional, para responder de una manera rápida y oportuna, de acuerdo con la transformación dinámica de las diferentes normatividades, para el ejercicio de su profesión.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Habilidades</h3>
                        <p class="text-left">
                            ✔ Habilidad para la evaluación crítica, de investigación y propuesta en la aplicación del derecho penal y procesal penal en torno al sistema acusatorio.<br>
                            ✔ Habilidad para plantear, analizar, desarrollar y resolver litigios penales.<br>
                            ✔ Desarrollar nuevas técnicas para el debate oral.<br>
                            ✔ Analizar y plantear mecanismos alternativos de solución a conflictos en materia penal.<br>
                            ✔ Mejorar el ejercicio profesional del derecho a través de sus diversos campos de estudio y funciones específicas para los operadores públicos del sistema tanto como jueces, ministerios públicos, defensores públicos, así como abogados particulares.<br>
                            ✔ Competencias para aplicar las técnicas de litigación adversarial y de la teoría del caso en el desarrollo de las diversas audiencias del proceso penal acusatorio.
                        </p>
                    </div>
                </div>
            </div>
            <br>

            <!-- Requisitos y Modalidad -->
            <div class="row">
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Requisitos</h3>
                        <p class="card-text text-left">
                            📝 Acta de Nacimiento <strong>(Original y Copia)</strong>.<br>
                            📝 Certificado de Licenciatura / Constancia de Terminación de Estudios <strong>(Original)</strong>.<br>
                            📝 Carta de motivos para cursar estudios de posgrado <strong>(Original y Copia)</strong>.<br>
                            📝 CURP <strong>(Copia)</strong>.<br>
                            📝 6 Fotografías tamaño infantil.<br>
                        </p>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Modalidad</h3>
                        <h5 class="card-title text-left">Sabatino</h5>
                        <p class="card-text text-left">
                            🕗 07:00 a 16:00 Hrs.
                        </p>
                        <p class="card-text text-left">
                            <strong>Tipo de Ciclo:</strong> Cuatrimestral<br>
                            <strong>Duración:</strong> 1 Año 4 meses
                        </p>
                        <h5 class="card-title text-left">INFORMES</h5>
                        <p class="card-text text-left">
                            📞 (771) 719 4495<br>
                            <img width="20" height="20" src="https://img.icons8.com/water-color/50/whatsapp.png" alt="whatsapp"/> (771)-139-22-40 <br>
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
                                                    <strong class="d-block">Ver Calendario Escolar</strong>
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
                                            <iframe src="https://drive.google.com/file/d/1a-OKwbuwvPViuK5WVrs_DzXVVfto383e/preview?usp=sharing" 
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
                                                    <strong class="d-block">Ver Plan de Estudios</strong>
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
                                            <iframe src="https://drive.google.com/file/d/1fgVTHClClU5z8OsTqCwIkYhKdr7zElw_/preview" 
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
    </section><!-- End Pricing Section -->

    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap 5 JS Bundle (necesario para el acordeón) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/calendario.js') }}"></script>
@endsection