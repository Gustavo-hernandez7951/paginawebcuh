@extends('layouts.pagina')

@section('content')
<section id="pricing" class="pricing">
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Laboratorios de Computo</h1>
            <h2 class="text-white">CUH</h2>
        </div>
    </section>
</section>
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        <div class="container text-center">
            <div class="container text-center">
                <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestros Laboratorios</h2>
            </div>
            <p style="text-align: justify; color: #333; font-size: 20px;">
                El Laboratorio de Centro de Cómputo del Centro Universitario Hidalgo es un espacio moderno y funcional, diseñado para que los estudiantes de todas las carreras de la universidad puedan realizar sus tareas, trabajos, prácticas y actividades académicas.
                <br>Equipado con computadoras de última generación y software especializado, el laboratorio ofrece a los estudiantes un entorno ideal para el desarrollo de proyectos, investigaciones y trabajos prácticos.
                <br>Además, en este laboratorio los alumnos pueden realizar actividades como impresiones de trabajos, programación de software, diseño de bases de datos, análisis de redes y más.
                <br>Este espacio está orientado a apoyar el aprendizaje teórico y práctico, brindando las herramientas necesarias para que los estudiantes de todas las disciplinas puedan llevar a cabo sus actividades académicas de manera eficiente y con la mejor tecnología disponible.
            </p>
        </div>
        <br><br>
        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets\img\CentroComputo\Computo1.webp" class="d-block w-100 carousel-image" alt="Laboratorio 1">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\CentroComputo\Computo2.webp" class="d-block w-100 carousel-image" alt="Laboratorio 2">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\CentroComputo\Computo3.webp" class="d-block w-100 carousel-image" alt="Laboratorio 3">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\CentroComputo\Computo4.webp" class="d-block w-100 carousel-image" alt="Laboratorio 4">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\CentroComputo\Computo5.webp" class="d-block w-100 carousel-image" alt="Laboratorio 5">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\CentroComputo\Computo6.webp" class="d-block w-100 carousel-image" alt="Laboratorio 5">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\CentroComputo\Computo7.webp" class="d-block w-100 carousel-image" alt="Laboratorio 5">
                </div>
            </div>
        </div>

        <!-- Tarjetas de Información -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="assets\img\CentroComputo\Tarjeta1.webp" class="card-img-top custom-card-img" alt="Centro de Computo Aula">
                    <div class="card-body">
                        <h5 class="card-title card-title-blue">Centro de Computo Aula</h5>
                        <p class="card-text">El Centro de Cómputo está equipado con tecnología de última generación, proporcionando un espacio ideal para que los estudiantes de cualquier carrera puedan realizar tareas, trabajos y actividades prácticas. Este centro permite a los estudiantes realizar sus actividades académicas de manera eficiente, fortaleciendo sus habilidades técnicas y creativas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="assets\img\CentroComputo\Tarjeta2.webp" class="card-img-top custom-card-img" alt="Centro de Computo">
                    <div class="card-body">
                        <h5 class="card-title card-title-blue">Centro de Computo</h5>
                        <p class="card-text">El Centro de Cómputo es un área diseñada para ofrecer infraestructura especializada, donde los estudiantes puedan llevar a cabo tareas, proyectos y actividades prácticas. Este espacio está orientado a facilitar el aprendizaje y el uso de software profesional, permitiendo que los alumnos realicen actividades relacionadas con sus carreras.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="assets\img\CentroComputo\Tarjeta3.webp" class="card-img-top custom-card-img" alt="Aula 25">
                    <div class="card-body">
                        <h5 class="card-title card-title-blue">Aula 25</h5>
                        <p class="card-text">Es un espacio dedicado a la realización de tareas, trabajos y actividades prácticas en materias de informática y tecnologías educativas. Este aula está diseñada para que los estudiantes puedan desarrollar sus competencias en el uso de herramientas tecnológicas y software educativo, facilitando la realización de sus actividades académicas.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Servicios Institucionales -->
        <div class="row mt-5">
            <div class="col-lg-12 mt-4">
                <h2 class="text-center" style="color: #000080;">Nuestros servicios</h2>
                <br><br>
                <div class="row">
                    <!-- Servicio 1 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-desktop display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Estaciones de Trabajo</h6>
                                    <p class="card-text">Computadoras con software actualizado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 2 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-wifi display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Conexión a Internet</h6>
                                    <p class="card-text">Acceso a internet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 3 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-printer display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Servicios de Impresión</h6>
                                    <p class="card-text">Impresoras de alta calidad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 4 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-support display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Soporte Técnico</h6>
                                    <p class="card-text">Asistencia técnica disponible en todo momento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 5 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-network-chart display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Redes Seguras</h6>
                                    <p class="card-text">Conexiones de red seguras y confiables</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 6 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-video display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Recursos Multimedia</h6>
                                    <p class="card-text">Acceso a software de edición de video y audio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 7 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-pie-chart-alt display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Visualización de Datos</h6>
                                    <p class="card-text">Herramientas para crear gráficos y visualizaciones</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 8 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-lock-alt display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Seguridad Informática</h6>
                                    <p class="card-text">Protección contra amenazas cibernéticas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 9 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1200">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-server display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Servidores de Alta Capacidad</h6>
                                    <p class="card-text">Infraestructura robusta para proyectos grandes</p>
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

<style>
    .carousel-item {
        position: relative;
    }
    .bottom-left {
        position: absolute;
        bottom: 10px;
        left: 10px;
        text-align: left;
    }
    .carousel-image {
        height: 500px;
        object-fit: cover;
    }
    .card-title-blue {
        color: #000080;
    }
    .custom-card-img {
        height: 250px; /* Ajusta la altura según tus necesidades */
        object-fit: cover;
        width: 100%;
    }
</style>
