@extends('layouts.pagina')

@section('content')
<!-- ======= Aulas Multimedia Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3 font-weight-bolder text-white">Aulas multimedia</h1>
        <h2 class="text-white">CUH</h2>
    </div>
</section>
<section id="pricing" class="pricing">
    <!-- Sección de información -->
    <div class="info-section mb-4" style="max-width: 1200px; margin: 0 auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6; background-color: #f9f9f9;" data-aos="fade-up">

        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel" data-interval="3500" data-aos="fade-up">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/Aulas/Carrucel/Aula(1).webp" class="d-block w-100 carousel-image" alt="Aula 1 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Aulas/Carrucel/Aula(2).webp" class="d-block w-100 carousel-image" alt="Aula 2 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Aulas/Carrucel/Aula(3).webp" class="d-block w-100 carousel-image" alt="Aula 3 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Aulas/Carrucel/Aula(4).webp" class="d-block w-100 carousel-image" alt="Aula 4 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Aulas/Carrucel/Aula(5).webp" class="d-block w-100 carousel-image" alt="Aula 5 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Aulas/Carrucel/Aula(6).webp" class="d-block w-100 carousel-image" alt="Aula 6 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Aulas/Carrucel/Aula(7).webp" class="d-block w-100 carousel-image" alt="Aula 7 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Aulas/Carrucel/Aula(8).webp" class="d-block w-100 carousel-image" alt="Aula 8 CUH" style="max-height: 500px; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <h2 class="font-weight-bold" style="margin-bottom: 20px; font-size: 40px;">Nuestras Aulas</h2>
        </div>
        <p style="text-align: justify; color: #333; font-size: 20px; margin-bottom: 0;" data-aos="fade-up">
        Las aulas multimedia del Centro Universitario Hidalguense (CUH) están diseñadas para enriquecer la experiencia educativa y fomentar el uso de tecnologías avanzadas en el aprendizaje.
        <br>Estas aulas están equipadas con la última tecnología para apoyar diversas disciplinas académicas, desde ciencias y tecnología hasta humanidades y artes.
        Los estudiantes y profesores pueden utilizar estas aulas para llevar a cabo presentaciones interactivas, conferencias virtuales y sesiones de aprendizaje colaborativo.
        <br>El entorno tecnológico proporciona un ambiente dinámico y estimulante que facilita la comprensión y retención del conocimiento. Además, las aulas multimedia permiten la integración de recursos digitales, ampliando las oportunidades de aprendizaje más allá de los métodos tradicionales.
        <br>Estas instalaciones no solo mejoran la calidad de la enseñanza, sino que también preparan a los estudiantes para enfrentar los desafíos del mundo moderno, equipándolos con habilidades tecnológicas esenciales para su desarrollo profesional.
        </p>
    </div>
</section>
<section id="aulas-multimedia" class="aulas-multimedia">
    <div class="container" data-aos="fade-up">
        <h2 class="text-center mb-4" style="color: #000080;" data-aos="fade-up">Contamos con...</h2>
        <!-- Tarjetas Interactivas -->
        <div class="row mt-4">
            <!-- Tarjeta 1: Introducción -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/Aulas/Carrucel/AulaB1.webp" class="card-img-top" alt="Aula 1" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Aulas del Centro Universitario Hidalgo</h5>
                        <p class="card-text">En el Centro Universitario Hidalgo, las aulas están diseñadas para proporcionar un ambiente cómodo y tecnológico, ideal para el desarrollo de los estudiantes en su proceso de aprendizaje. Cada aula permite a los estudiantes interactuar de manera efectiva con los contenidos académicos.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Recursos Modernos -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/Aulas/Carrucel/AulaB2.webp" class="card-img-top" alt="Aula 2" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Recursos</h5>
                        <p class="card-text">Cada aula está equipada con herramientas y recursos de tecnología audiovisual como proyectores y sistemas de sonido, facilitando la enseñanza dinámica y participativa.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Aulas Teóricas -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/Aulas/Carrucel/AulaB3.webp" class="card-img-top" alt="Aula 3" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Aulas Teóricas</h5>
                        <p class="card-text">Las aulas teóricas están orientadas a las clases donde los estudiantes adquieren los conocimientos fundamentales en sus respectivas disciplinas. Estas aulas cuentan con tecnología audiovisual avanzada, lo que facilita la enseñanza dinámica y participativa.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4: Aulas Prácticas -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/Aulas/Carrucel/AulaB4.webp" class="card-img-top" alt="Aula 4" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Aulas Prácticas</h5>
                        <p class="card-text">Las aulas prácticas están especialmente diseñadas para carreras como Ingeniería en Sistemas Computacionales, Psicología, Derecho y otras del ámbito educativo. Están equipadas con equipos y software especializado para realizar prácticas, tareas y proyectos relacionados con las áreas tecnológicas, empresariales y educativas.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 5: Infraestructura y Comodidad -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/Aulas/Carrucel/AulaB5.webp" class="card-img-top" alt="Aula 5" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Infraestructura y Comodidad</h5>
                        <p class="card-text">Las aulas están acondicionadas con escritorios y sillas, ofreciendo un espacio para largas jornadas de estudio. Además, cuentan con acceso a internet y estaciones de trabajo equipadas para realizar actividades colaborativas, investigaciones y presentaciones.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 6: Diversidad en la Oferta Académica -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/Aulas/Carrucel/AulaB6.webp" class="card-img-top" alt="Aula 6" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Diversidad en la Oferta Académica</h5>
                        <p class="card-text">Las aulas están distribuidas en distintas áreas del Centro Universitario Hidalguense, con especial atención a la comodidad y accesibilidad para los estudiantes. Son espacios adaptables para ofrecer clases teóricas o prácticas en diversas áreas del conocimiento, permitiendo que cada estudiante desarrolle sus habilidades y competencias tanto en la teoría como en la práctica.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cuerpo de la página -->
        <div class="row mt-4">
            <!-- Servicios Institucionales -->
            <div class="row mt-5">
                <div class="col-lg-12 mt-4">
                    <h2 class="text-center mb-4" style="color: #000080;" data-aos="fade-up">Servicios Institucionales</h2>
                    <h3 class="text-center mb-4" style="color: #000080;" data-aos="fade-up">Centro Universitario Hidalguense</h3>
                    <div class="row">

                        <!-- Aula 1: Proyección -->
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-video-plus display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title" style="color: #000080;">Proyectores</h6>
                                        <p class="card-text">Para presentaciones visuales interactivas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 2: Conectividad -->
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-wifi display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title" style="color: #000080;">Internet</h6>
                                        <p class="card-text">Conexión inalámbrica para acceder a recursos en línea.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 3: Estudio Mental -->
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-brain display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title" style="color: #000080;">Estrategias de Aprendizaje</h6>
                                        <p class="card-text">Métodos para mejorar la memorización y comprensión.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 4: Organización -->
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-list-check display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title" style="color: #000080;">Material Educativo</h6>
                                        <p class="card-text">Organización y distribución de contenidos relevantes.</p>
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
<!-- Contacto WhatsApp icono Flotante 
<a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=7711392240">
    <i class="bx bxl-whatsapp"></i>
</a>
-->
@endsection
