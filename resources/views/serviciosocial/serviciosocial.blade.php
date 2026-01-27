@extends('layouts.pagina')

@section('content')
<section id="pricing" class="pricing fade-in-up">
    <section id="hero" class="d-flex align-items-center fade-in-up" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">¿En qué consiste el Servicio Social?</h1>
            <h2 class="text-white">SERVICIO SOCIAL CUH</h2>
        </div>
    </section>
</section>
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        <!-- 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/servicios/servicio_social1.jpg" class="d-block w-100" alt="Servicio Social 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/servicios/servicio_social2.jpg" class="d-block w-100" alt="Servicio Social 2">
                </div>
            </div>
        </div>
        -->

        <!-- Sección de información -->
        <div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;">
            <div class="container text-center">
                <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestro Servicio Social</h2>
            </div>
            <p style="text-align: justify; color: #333; font-size: 20px;">
                El servicio social es una actividad formativa, de carácter temporal, obligatorio y supervisado, que debes realizar como parte de tu plan de estudios universitarios. Tiene como objetivo retribuir a la sociedad los beneficios de tu formación académica, al mismo tiempo que adquieres experiencia profesional y fortaleces tu compromiso social.
                El Servicio Social es mucho más que un requisito para titularte. Es una experiencia formativa y profesional clave para tu desarrollo. Te permite aportar a la sociedad, aprender en el campo y acercarte al mundo laboral.
                        Desde el Centro Universitario Hidalguense, estamos para acompañarte en cada etapa del proceso y asegurarnos de que vivas esta etapa de forma enriquecedora y significativa.
            </p>
        </div>

        <!-- Tarjetas Interactivas -->
        <div class="row mt-4">
            <!-- Tarjeta 1: ¿Qué es el Servicio Social? -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-lg border-light">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">¿Qué es el Servicio Social?</h5>
                        <p class="card-text">
                            El servicio social es una actividad formativa, de carácter temporal, obligatorio y supervisado, que debes realizar como parte de tu plan de estudios universitarios. Tiene como objetivo retribuir a la sociedad los beneficios de tu formación académica, al mismo tiempo que adquieres experiencia profesional y fortaleces tu compromiso social.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: ¿Para qué sirve? -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-lg border-light">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">¿Para qué sirve?</h5>
                        <p class="card-text">
                            Aplicar en el campo real los conocimientos teóricos adquiridos en tu carrera.<br>
                            Contribuir al desarrollo social, comunitario e institucional.<br>
                            Fortalecer tus habilidades profesionales, sociales y éticas.<br>
                            Tener un primer acercamiento al entorno laboral.<br>
                            Abrir posibilidades de vinculación o empleo a futuro.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: ¿En qué consiste? -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-lg border-light">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">¿En qué consiste?</h5>
                        <p class="card-text">
                            Debes cumplir un mínimo de 480 horas, distribuidas en un plazo no menor a 6 meses y no mayor a 24 meses.<br>
                            Se realiza en instituciones del sector público, privados, social y en convenios autorizados por el CUH.<br>
                            Las actividades deben estar relacionadas directamente con tu área de estudio.<br>
                            Es necesario realizar reportes periódicos y entregar documentación final para validar tu proceso.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ¿Cómo iniciar tu Servicio Social? -->
        <div class="row mt-4">
            <div class="col-lg-12 mt-4">
                <h2 class="text-center" style="color: #000080;">¿Cómo iniciar tu Servicio Social?</h2>
                <br><br>
                <div class="row">
                    
                    <!-- Paso 1 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-check display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Cubre el 70% de créditos</h6>
                                    <p class="card-text">Asegúrate de haber cubierto al menos el 70% de tus créditos académicos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 2 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-search display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Consulta opciones</h6>
                                    <p class="card-text">Consulta las opciones de instituciones y programas registrados por el CUH.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 3 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-file display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Documentación</h6>
                                    <p class="card-text">
                                        Presenta la documentación requerida:
                                        <ul style="padding-left: 20px; margin-bottom: 0;">
                                            <li>Solicitud de servicio social</li>
                                            <li>Carta de presentación</li>
                                            <li>Carta de aceptación</li>
                                            <li>Reportes mensuales</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Paso 4 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-calendar display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Realiza tu servicio</h6>
                                    <p class="card-text">Realiza tu servicio conforme al plan establecido.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Paso 5 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-receipt display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Entrega final</h6>
                                    <p class="card-text">
                                        <ul style="padding-left: 20px; margin-bottom: 0;">
                                            <li>Carta de terminación</li>
                                            <li>Reporte final</li>
                                            <li>Fotografía tamaño infantil</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Beneficios del Servicio Social por Licenciatura -->
        <div class="row mt-4">
            <div class="col-lg-12 mt-4">
                <h2 class="text-center" style="color: #000080;">Beneficios del Servicio Social por Licenciatura</h2>
                <br><br>
                <div class="row">
                    <!-- Administración y Sistemas Computacionales -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-briefcase-alt-2 display-4" style="color: #FF5733;"></i>
                                    <h6 class="card-title card-title-blue">Administración y Sistemas Computacionales</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="bx bx-check-circle" style="color: #FF5733;"></i>Aplicas modelos administrativos y tecnológicos en contextos reales.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FF5733;"></i>Fortaleces tu liderazgo, capacidad de análisis y toma de decisiones.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FF5733;"></i>Manejas herramientas como ERPs o software de gestión.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FF5733;"></i>Diseñas soluciones digitales para mejorar procesos organizacionales.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FF5733;"></i>Adquieres experiencia en gestión empresarial y proyectos TIC.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Ciencias de la Educación -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-book-open display-4" style="color: #4CAF50;"></i>
                                    <h6 class="card-title card-title-blue">Ciencias de la Educación</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="bx bx-check-circle" style="color: #4CAF50;"></i>Ganas experiencia en diseño de materiales, clases y evaluación educativa.</li>
                                    <li><i class="bx bx-check-circle" style="color: #4CAF50;"></i>Aplicas estrategias pedagógicas en contextos escolares y comunitarios.</li>
                                    <li><i class="bx bx-check-circle" style="color: #4CAF50;"></i>Participas en programas de tutoría, intervención y orientación educativa.</li>
                                    <li><i class="bx bx-check-circle" style="color: #4CAF50;"></i>Desarrollas habilidades en trabajo con poblaciones con necesidades especiales.</li>
                                    <li><i class="bx bx-check-circle" style="color: #4CAF50;"></i>Contribuyes a programas de mejora del rendimiento escolar.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Contaduría y Sistemas Fiscales -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-calculator display-4" style="color: #2196F3;"></i>
                                    <h6 class="card-title card-title-blue">Contaduría y Sistemas Fiscales</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="bx bx-check-circle" style="color: #2196F3;"></i>Realizas tareas reales de contabilidad, auditoría y gestión fiscal.</li>
                                    <li><i class="bx bx-check-circle" style="color: #2196F3;"></i>Aprendes el uso de software contable como CONTPAQi o herramientas del SAT.</li>
                                    <li><i class="bx bx-check-circle" style="color: #2196F3;"></i>Asistes en el cumplimiento de obligaciones fiscales de instituciones.</li>
                                    <li><i class="bx bx-check-circle" style="color: #2196F3;"></i>Apoyas en procesos presupuestales y financieros.</li>
                                    <li><i class="bx bx-check-circle" style="color: #2196F3;"></i>Te formas como asesor contable para pymes y organizaciones civiles.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Derecho -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-book display-4" style="color: #9C27B0;"></i>
                                    <h6 class="card-title card-title-blue">Derecho</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="bx bx-check-circle" style="color: #9C27B0;"></i>Apoyas en asesoría jurídica, defensoría pública y orientación legal comunitaria.</li>
                                    <li><i class="bx bx-check-circle" style="color: #9C27B0;"></i>Redactas documentos legales, haces análisis normativo y apoyo jurídico.</li>
                                    <li><i class="bx bx-check-circle" style="color: #9C27B0;"></i>Te familiarizas con procesos administrativos, judiciales y de derechos humanos.</li>
                                    <li><i class="bx bx-check-circle" style="color: #9C27B0;"></i>Participas en actividades de divulgación legal y defensa de derechos.</li>
                                    <li><i class="bx bx-check-circle" style="color: #9C27B0;"></i>Amplías tu red profesional dentro del sistema jurídico.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Psicología -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-brain display-4" style="color: #FFC107;"></i>
                                    <h6 class="card-title card-title-blue">Psicología</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="bx bx-check-circle" style="color: #FFC107;"></i>Participas en programas de salud mental en escuelas o centros comunitarios.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FFC107;"></i>Aplicas observación, orientación y técnicas psicoeducativas básicas.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FFC107;"></i>Adquieres experiencia en intervención con enfoque preventivo o asistencial.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FFC107;"></i>Trabajas en colaboración con profesionales de salud o educación.</li>
                                    <li><i class="bx bx-check-circle" style="color: #FFC107;"></i>Desarrollas empatía, escucha activa y competencias para trabajo social.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Sistemas Computacionales -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-laptop display-4" style="color: #00BCD4;"></i>
                                    <h6 class="card-title card-title-blue">Sistemas Computacionales</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="bx bx-check-circle" style="color: #00BCD4;"></i>Apoyas en desarrollo de software, mantenimiento de redes o seguridad informática.</li>
                                    <li><i class="bx bx-check-circle" style="color: #00BCD4;"></i>Participas en soluciones tecnológicas aplicadas a problemas sociales.</li>
                                    <li><i class="bx bx-check-circle" style="color: #00BCD4;"></i>Colaboras en proyectos de análisis de datos, apps, IA o desarrollo web.</li>
                                    <li><i class="bx bx-check-circle" style="color: #00BCD4;"></i>Refuerzas tus conocimientos en programación, bases de datos y diseño de sistemas.</li>
                                    <li><i class="bx bx-check-circle" style="color: #00BCD4;"></i>Trabajas en entornos colaborativos con metodologías ágiles.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
