@extends('layouts.pagina')

@section('content')
<section id="pricing" class="pricing">
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Instalaciones Cómodas</h1>
            <h2 class="text-white">CUH</h2>
        </div>
    </section>
    <br>
    <div class="container" data-aos="fade-up">
        <div class="container text-center">
            <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestras Instalaciones</h2>
        </div>
        <div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;">
            <p style="text-align: justify; color: #333; font-size: 20px;">
                En el Centro Universitario Hidalguense, estamos profundamente comprometidos en proporcionar una infraestructura de calidad que apoye el proceso de enseñanza-aprendizaje, garantizando un ambiente ideal para el desarrollo académico y profesional de nuestros estudiantes. Sabemos que la calidad de las instalaciones juega un papel crucial en el éxito educativo, por lo que hemos diseñado y acondicionado espacios especializados para cubrir diversas necesidades académicas.
            </p>
        </div>

        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/InstalacionesComodas/Aula1.webp" class="d-block w-100" alt="Instalaciones 1" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula2.webp" class="d-block w-100" alt="Instalaciones 2" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula3.webp" class="d-block w-100" alt="Instalaciones 3" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula4.webp" class="d-block w-100" alt="Instalaciones 4" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula5.webp" class="d-block w-100" alt="Instalaciones 5" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula6.webp" class="d-block w-100" alt="Instalaciones 6" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula7.webp" class="d-block w-100" alt="Instalaciones 7" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula8.webp" class="d-block w-100" alt="Instalaciones 8" style="max-height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/InstalacionesComodas/Aula9.webp" class="d-block w-100" alt="Instalaciones 9" style="max-height: 450px; object-fit: cover;">
                </div>
            </div>
        </div>

        <br><br>
        <h2 class="text-center" style="color: #000080;">Conoce más...</h2>
        <br><br>

        <!-- Cuerpo de la página -->
        <div class="row mt-4">
            <!-- Tarjetas Interactivas -->
            <div class="row mt-4">
                <!-- Tarjeta 1: Seguridad -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 shadow-lg border-light">
                        <img src="assets/img/InstalacionesComodas/Tarjeta1.webp" class="card-img-top" alt="Seguridad" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000080;">Seguridad</h5>
                            <p class="card-text">
                                En el Centro Universitario Hidalguense, nos comprometemos a garantizar un ambiente seguro, moderno y conectado para todos nuestros estudiantes. Ofrecemos un servicio de vigilancia constante, tanto dentro como fuera de nuestras instalaciones, con controles de acceso y vigilancia las 24 horas del día, los 7 días de la semana.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2: Conectividad -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 shadow-lg border-light">
                        <img src="assets/img/InstalacionesComodas/Tarjeta2.webp" class="card-img-top" alt="Conectividad" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000080;">Conectividad</h5>
                            <p class="card-text">
                                Comprendemos la importancia de estar conectados en la era digital. Por eso, todo el centro universitario está cubierto con Internet gratuito, disponible en los cinco pisos de las instalaciones y en cada uno de los salones de clase. Este acceso a internet de alta velocidad permite a los estudiantes y docentes realizar investigaciones, participar en clases en línea, acceder a recursos educativos y mantenerse actualizados en tiempo real.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3: Portal Escolar -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 shadow-lg border-light">
                        <img src="assets/img/InstalacionesComodas/Tarjeta3.webp" class="card-img-top" alt="Portal Escolar" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000080;">Página Web</h5>
                            <p class="card-text">
                                A través de nuestro portal oficial, los estudiantes, padres de familia y personal docente pueden mantenerse informados sobre las últimas noticias, eventos, actualizaciones académicas y administrativas, entre otros aspectos importantes. Este portal también facilita el acceso a recursos institucionales clave.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 4: Portal Alumno -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 shadow-lg border-light">
                        <img src="assets/img/InstalacionesComodas/Tarjeta4.webp" class="card-img-top" alt="Portal Alumno" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000080;">Portal Alumno</h5>
                            <p class="card-text">
                                En este espacio, los estudiantes pueden consultar toda su información académica de manera rápida y fácil. Desde sus calificaciones y horarios hasta su historial académico y materiales complementarios. Además, se pueden realizar trámites y acceder a diferentes servicios en línea que agilizan su experiencia educativa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 5: Portal Docente -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 shadow-lg border-light">
                        <img src="assets/img/InstalacionesComodas/Tarjeta4.webp" class="card-img-top" alt="Portal Docente" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000080;">Portal Docente</h5>
                            <p class="card-text">
                                Este portal está diseñado para apoyar a nuestros profesores, permitiéndoles gestionar de manera eficiente su información académica y administrativa. Aquí pueden consultar y registrar calificaciones, compartir material de estudio con los estudiantes, y acceder a recursos que facilitan la enseñanza y el seguimiento de su desempeño.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 6: Resumen -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="card h-100 shadow-lg border-light">
                        <img src="assets/img/InstalacionesComodas/Tarjeta5.webp" class="card-img-top" alt="Resumen" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000080;">CUH</h5>
                            <p class="card-text">
                                El Centro Universitario Hidalguense no solo nos enfocamos en ofrecer una educación de calidad, sino también en crear un entorno seguro, conectado y adaptado a las necesidades del siglo XXI. Te invitamos a conocer todos nuestros servicios y disfrutar de un ambiente académico que te respalda en todo momento.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Servicios Institucionales -->
        <div class="row mt-5">
            <div class="col-lg-12 mt-4">
                <h2 class="text-center" style="color: #000080;">Nuestros Servicios</h2>
                <br><br>
                <div class="row">
                    <!-- Servicio 1: Colección de Libros -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-book-open display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Colección de Libros</h6>
                                    <p class="card-text">Amplia variedad de libros y recursos educativos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 2: Acceso a Internet -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-wifi display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Acceso a Internet</h6>
                                    <p class="card-text">Conexión a internet para investigación y estudio.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 3: Servicios de Impresión -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-printer display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Servicios de Impresión</h6>
                                    <p class="card-text">Impresión de documentos y materiales académicos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 4: Asistencia Bibliotecaria -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-support display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Asistencia Bibliotecaria</h6>
                                    <p class="card-text">Apoyo en la búsqueda de información y recursos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 5: Acceso a E-books -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-server display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Acceso a E-books</h6>
                                    <p class="card-text">Colección de libros electrónicos disponibles en línea.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 6: Recursos Multimedia -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-video display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Recursos Multimedia</h6>
                                    <p class="card-text">Acceso a videos educativos y audiolibros.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 7: Espacios de Estudio -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-pie-chart-alt display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Espacios de Estudio</h6>
                                    <p class="card-text">Áreas silenciosas para estudio y lectura.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 8: Seguridad y Privacidad -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-lock-alt display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Seguridad y Privacidad</h6>
                                    <p class="card-text">Protección de datos personales y privacidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 9: Mesa de Ayuda -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-help-circle display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Mesa de Ayuda</h6>
                                    <p class="card-text">Asistencia para problemas del portal y correo institucional.</p>
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
