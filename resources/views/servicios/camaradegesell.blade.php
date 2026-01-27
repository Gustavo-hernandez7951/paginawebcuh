@extends('layouts.pagina')

@section('content')
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 1s ease-in-out;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title-blue {
        color: #000080;
    }
</style>

<section id="pricing" class="pricing fade-in-up">
    <section id="hero" class="d-flex align-items-center fade-in-up" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Cámara de Gesell</h1>
            <h2 class="text-white">CUH</h2>
        </div>
    </section>
</section>
<section id="pricing" class="pricing fade-in-up">
    <div class="container" data-aos="fade-up">
        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide fade-in-up" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/CamaraGesell/Gesell1.webp" class="d-block w-100" alt="Cámara de Gesell 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/CamaraGesell/Gesell2.webp" class="d-block w-100" alt="Cámara de Gesell 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/CamaraGesell/Gesell3.webp" class="d-block w-100" alt="Cámara de Gesell 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/CamaraGesell/Gesell4.webp" class="d-block w-100" alt="Cámara de Gesell 4">
                </div>
            </div>
        </div>

        <!-- Cuerpo de la página -->

        <!-- Sección de información -->
        <div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;" class="fade-in-up">
            <p style="text-align: justify; color: #333; font-size: 20px;">
                La Cámara de Gesell fue creada por el Psicólogo Arnold Gesell (1880-1961) quien se dedicó a estudiar las primeras etapas de vida en el desarrollo del ser humano.
                Una cámara de Gesell consta de 2 habitaciones equipadas de manera individual, especializadas para la observación del sujeto en cuestión, para conocer y estudiar su conducta, con base a entrevistas, aplicación de pruebas psicológicas, intervención de aprendizaje, prácticas terapéuticas, entre otras actividades importantes para la práctica psicológica.
                La habitación cuenta con equipo y tecnología de punta; micrófonos ambientales anti-popeo, cámaras domo de alta resolución con visión nocturna, permitiendo diferentes ángulos, según sea el interés del investigador.
                La cámara de Gesell, además de ser una herramienta destacada de la psicología, también servirá en apoyo a la licenciatura en Derecho, para procesos y procedimientos de prácticas y técnicas de interrogatorio.
            </p>
        </div>

        <!-- Imagen footer -->
        <div class="col-lg-12 p-0 fade-in-up">
            <div class="card">
                <div class="card bg-transparent border-0">
                    <img class="card-img-top" src="assets/img/CamaraGesell/GesellBaner.webp" alt="Imagen panorámica">
                </div>
            </div>
        </div>

        <div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;" class="fade-in-up">
            <div class="text">
                <h1 style="color: #000080;"><strong>Cámara de Gesell en el Centro Universitario Hidalgo</strong></h1>
            </div>
            <p style="text-align: justify; color: #333; font-size: 20px;">
                El Centro Universitario Hidalgo cuenta con una Cámara de Gesell, un espacio especializado para realizar observaciones y entrevistas de manera controlada y confidencial. Dirigida a estudiantes de Psicología, Criminología, Trabajo Social y disciplinas relacionadas, esta área permite llevar a cabo estudios y evaluaciones sin que los observados se percaten de su presencia.
                <br>Equipado con tecnología avanzada para grabación de audio y video, facilita el análisis remoto y detallado de las interacciones sin interrumpir el proceso natural. La Cámara de Gesell ofrece a los estudiantes la oportunidad de aplicar conocimientos teóricos en situaciones reales, mejorando su formación práctica y fomentando la investigación en el análisis de comportamientos humanos.
                <br>Este espacio es clave para preparar a los estudiantes frente a situaciones complejas dentro de sus disciplinas.
            </p>
        </div>

        <!-- Tarjetas Interactivas -->
        <div class="row mt-4">
            <!-- Tarjeta 1: Cámara de Gesell -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/CamaraGesell/Tarjeta1.webp" class="card-img-top" alt="Cámara de Gesell" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Cámara de Gesell</h5>
                        <p class="card-text">
                            El Centro Universitario Hidalgo cuenta con una Cámara de Gesell, un espacio especializado para realizar observaciones y entrevistas de manera controlada, objetiva y confidencial.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Función y Utilidad -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/CamaraGesell/Tarjeta2.webp" class="card-img-top" alt="Función y Utilidad" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Función y Utilidad</h5>
                        <p class="card-text">
                            La Cámara de Gesell se utiliza para estudios y evaluaciones de individuos o grupos sin que la persona observada sea consciente de su presencia, permitiendo observaciones en situaciones reales o simuladas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Tecnología y Diseño -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/CamaraGesell/Tarjeta3.webp" class="card-img-top" alt="Tecnología y Diseño" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Tecnología y Diseño</h5>
                        <p class="card-text">
                            Equipada con tecnología avanzada para la grabación de audio y video, la Cámara de Gesell permite la observación remota y el análisis posterior de las sesiones realizadas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4: Capacitación y Formación Práctica -->
            <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/CamaraGesell/Tarjeta4.webp" class="card-img-top" alt="Capacitación y Formación Práctica" style="height: 200px; object-fit: cover; transition: opacity 0.3s ease-in-out;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Capacitación y Formación Práctica</h5>
                        <p class="card-text">
                            Los estudiantes pueden poner en práctica los conceptos aprendidos en el aula, enfrentándose a situaciones reales en un entorno controlado, promoviendo el desarrollo de nuevas metodologías y enfoques.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cuerpo de la página -->
        <div class="row mt-4">
            <!-- Servicios Institucionales -->
            <div class="row mt-5">
                <div class="col-lg-12 mt-4">
                    <h2 class="text-center mb-4 fade-in-up" style="color: #000080;">Servicios Institucionales</h2>
                    <h3 class="text-center mb-4 fade-in-up" style="color: #000080;">Centro Universitario Hidalguense</h3>
                    <div class="row">
                        <!-- Aula 1: Micrófonos -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-microphone display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Micrófonos Ambientales</h6>
                                        <p class="card-text">Micrófonos anti-popeo para captar audio de alta calidad, ideales para grabaciones claras y precisas de entrevistas y sesiones.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 2: Cámaras Domo -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-video display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Cámaras Domo</h6>
                                        <p class="card-text">Cámaras de alta resolución con visión nocturna y múltiples ángulos, permitiendo una observación detallada en diferentes condiciones de luz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 3: Sala de Observación -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-group display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Sala de Observación</h6>
                                        <p class="card-text">Capacidad para 8 personas con circuito cerrado y grabación de audio y video, permitiendo una observación discreta y controlada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 4: Aire Acondicionado -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-box display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Aire Acondicionado</h6>
                                        <p class="card-text">Ambiente controlado para mayor comodidad durante las sesiones, asegurando un entorno confortable para todos los participantes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 5: Espejo Unidireccional -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-border-all display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Espejo Unidireccional</h6>
                                        <p class="card-text">Permite la observación sin ser visto, ideal para estudios de conducta y entrevistas confidenciales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 6: Prácticas Terapéuticas -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-brain display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Prácticas Terapéuticas</h6>
                                        <p class="card-text">Espacio ideal para la aplicación de pruebas psicológicas y terapias, permitiendo una intervención controlada y efectiva.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 7: Entrevistas y Evaluaciones -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-notepad display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Entrevistas y Evaluaciones</h6>
                                        <p class="card-text">Realización de entrevistas y evaluaciones psicológicas en un entorno controlado y confidencial.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 8: Técnicas de Interrogatorio -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-user-voice display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Técnicas de Interrogatorio</h6>
                                        <p class="card-text">Práctica de técnicas de interrogatorio para estudiantes de Derecho, en un entorno realista y controlado.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 9: Investigaciones Académicas -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-book-open display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Investigaciones Académicas</h6>
                                        <p class="card-text">Espacio para la realización de investigaciones académicas y proyectos de colaboración con otras áreas de la universidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 10: Formación Integral -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-building-house display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Formación Integral</h6>
                                        <p class="card-text">Ofrece una educación integral que combina conocimientos teóricos con prácticas reales, mejorando la preparación profesional de los estudiantes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 11: Análisis de Comportamientos -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-search-alt display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Análisis de Comportamientos</h6>
                                        <p class="card-text">Permite realizar estudios y evaluaciones de individuos o grupos sin que sean conscientes de la observación, asegurando resultados objetivos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 12: Tecnología Avanzada -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-cog display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Tecnología Avanzada</h6>
                                        <p class="card-text">Equipada con tecnología avanzada para la grabación de audio y video, facilitando la observación remota y el análisis posterior de las sesiones.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 13: Capacitación Práctica -->
                        <div class="col-lg-4 col-md-6 mb-4 fade-in-up" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-user-check display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Capacitación Práctica</h6>
                                        <p class="card-text">Los estudiantes pueden poner en práctica los conceptos aprendidos en el aula, enfrentándose a situaciones reales en un entorno controlado.</p>
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
