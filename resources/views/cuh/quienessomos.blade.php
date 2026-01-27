@extends('layouts.pagina')

@section('content')
<link href="assets/css/quienessomos.css" rel="stylesheet">
<section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3 font-weight-bolder text-white">¿Quiénes Somos?</h1>
        <h2 class="text-white">Conoce más sobre CUH</h2>
    </div>
</section>
<!-- ======= Quiénes Somos Section ======= -->
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
        <div class="col-lg-12 text-center mb-4" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/QuienesSomos/quienes-somos.webp" class="img-fluid custom-img rounded shadow" alt="Imagen Quiénes Somos">
        </div>

        <div class="row mt-4">
            <!-- Misión -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-lg border-light">
                    <div class="card-body text-center">
                        <i class="bx bx-target-lock display-4 text-primary mb-3"></i>
                        <h3 class="card-title" style="color: #000080;">Misión</h3>
                        <p class="card-text" align="justify">
                            Formar mujeres y hombres libres, humanistas de pensamiento creativo y crítico, con una sólida preparación científica, técnica y cultural, desarrollando en ellos los valores universales y excelencia profesional; lo cual les permitirá alta competitividad profesional para una mejor convivencia y eficaz transformación de la sociedad.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Visión -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-lg border-light">
                    <div class="card-body text-center">
                        <i class="bx bx-user display-4 text-primary mb-3"></i>
                        <h3 class="card-title" style="color: #000080;">Visión</h3>
                        <p class="card-text" align="justify">
                            Ser una institución de enseñanza superior, cuya visión integral e innovadora de la educación promueve y sustenta total calidad académica, sólida estructura ética y profesionalismo. Principios que distinguen a la institución y forjan en sus estudiantes, a fin de cumplir sus metas con éxito laboral, profesional y cultural en su entorno social.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Filosofía Institucional -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-lg border-light">
                    <div class="card-body text-center">
                        <i class="bx bx-book-open display-4 text-primary mb-3"></i>
                        <h3 class="card-title" style="color: #000080;">Filosofía Institucional</h3>
                        <p class="card-text" align="justify">
                            Promover los valores universales del ser humano para favorecer un desarrollo integral y equilibrado del estudiante, futuro profesional. En la acción educativa del Centro Universitario Hidalguense, subyacen como principios fundamentales el respeto, el aprecio y la confianza en el ser humano, así como la búsqueda de la verdad.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Servicios Institucionales -->
        <div class="row mt-5">
            <div class="col-lg-12 mt-4">
                <h2 class="font-weight-bold text-center" style="margin-bottom: 40px; font-size: 40px; color: #000080;">Servicios Institucionales <br> Centro Universitario Hidalguense </h2>
                <br><br>
                <div class="row">
                    <!-- Servicio 1 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-user-voice display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Personal Docente</h6>
                                    <p class="card-text">Altamente capacitado y con experiencia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 2 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-award display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Sistema de Becas</h6>
                                    <p class="card-text">Atractivo sistema de becas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 3 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-wallet display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Inscripción y Cuotas</h6>
                                    <p class="card-text">Accesibles para todos los estudiantes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 4 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-book-reader display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Enseñanza Innovadora</h6>
                                    <p class="card-text">Sistema de enseñanza-aprendizaje innovador e intensivo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 5 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-football display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Actividades Deportivas</h6>
                                    <p class="card-text">Actividades deportivas, recreativas, culturales y sociales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 6 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-desktop display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Centro de Cómputo</h6>
                                    <p class="card-text">Instalaciones con tecnología de vanguardia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 7 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-book-open display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Biblioteca Universitaria</h6>
                                    <p class="card-text">Amplia colección de libros y recursos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 8 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-wifi display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Internet Inalámbrico</h6>
                                    <p class="card-text">Conexión a internet en todo el campus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 9 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-video-recording display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Sistemas de Video Vigilancia</h6>
                                    <p class="card-text">Seguridad garantizada en todo momento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 10 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-chalkboard display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Aulas de Uso Múltiple</h6>
                                    <p class="card-text">Espacios versátiles para diversas actividades</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 11 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-food-menu display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Cafetería</h6>
                                    <p class="card-text">Variedad de opciones alimenticias</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 12 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1200">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-building-house display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Sala de Juicios Orales</h6>
                                    <p class="card-text">Espacio para prácticas legales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 13 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1300">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-camera-home display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Cámara de Gesell</h6>
                                    <p class="card-text">Entorno controlado para observación</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 14 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1400">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-buildings display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title" style="color: #000080;">Instalaciones Cómodas</h6>
                                    <p class="card-text">Espacios amplios y seguros con tecnología multimedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contacto WhatsApp icono Flotante 
    <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=7711392240">
        <i class="bx bxl-whatsapp"></i>
    </a>
    -->
@endsection