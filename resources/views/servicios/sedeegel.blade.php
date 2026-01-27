@extends('layouts.pagina')

@section('content')
    <link href="assets/css/egel.css" rel="stylesheet">

<section id="pricing" class="pricing fade-in-up">
    <section id="hero" class="d-flex align-items-center fade-in-up" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Ceneval</h1>
            <h2 class="text-white">Conoce más sobre nuestra sede</h2>
        </div>
    </section>
</section>
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up"> 
        <!-- Carrusel de imágenes -->
        <h1 class="display-4 font-weight-bolder animate__animated animate__pulse animate__infinite custom-text" style="color: #000080; text-shadow: 2px 2px 4px rgba(0,0,128,0.8);">¡Da el último paso para tu Licenciatura!</h1>
        <h2 class="custom-text" style="color: #000080; text-shadow: 1px 1px 3px rgba(0, 0, 128, 0.8);">Sede Oficial CENEVAL - Tu Pasaporte al Éxito Profesional</h2>
                <!-- Sección de tarjetas sobre Proceso de Titulación Egel-Ceneval -->
        <div class="row mt-4 d-flex">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-lg border-light hover-effect" data-aos="fade-up" data-aos-duration="1500">
                    <img src="assets/img/Ceneval/TarjetaCeneval1.webp" class="card-img-top" alt="Proceso de Titulación Egel-Ceneval">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title custom-text">Proceso de Titulación Egel-Ceneval</h4>
                        <p class="card-text">Si eres alumno que está por decidir cómo titularse, te ofrecemos que lo hagas a través del examen Egel. Para ello, sigue estos pasos:</p>
                        <ol class="flex-grow-1">
                            <li>Tener cursados el 100% de créditos de la licenciatura (Total de materias).</li>
                            <li>Haber concluido el Servicio Social.</li>
                            <li><strong>Período de Inscripción:</strong> Lunes 10 de noviembre 2025 – Lunes 26 de enero del 2026.</li>
                            <li>Para realizar el proceso de inscripción al examen, debes mandar tus datos como alumno al correo: omar.rios@cuh.mx con el responsable Operativo del Egel Lic. Omar Ríos Mendoza, Tel. 771 719 5300, 771 719 5301.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-lg border-light hover-effect" data-aos="fade-up" data-aos-duration="1600">
                    <img src="assets/img/Ceneval/TarjetaCeneval2.webp" class="card-img-top" alt="Detalles del Pago Ceneval">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title custom-text">Detalles del Pago</h4>
                        <p class="card-text">A continuación, se detallan los costos y la información de pago:</p>
                        <ul class="flex-grow-1">
                            <li><strong>Costo del examen:</strong> $2,217.00.</li>
                            <li><strong>Banco:</strong> Banamex, S.A.</li>
                            <li><strong>Cuenta:</strong> 6502-71294.</li>
                            <li><strong>Clabe:</strong> 002180650200712945.</li>
                            <li><strong>Beneficiario:</strong> Centro Nacional de Evaluación A.C.</li>
                            <li><strong>Costo de historial académico:</strong> $400.00 pagar en finanzas y dejar copia en servicios escolares para su elaboración.</li>
                        </ul>
                        <p class="card-text">Se cuenta con 3 días para realizar ambos pagos.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-lg border-light hover-effect" data-aos="fade-up" data-aos-duration="1700">
                    <img src="assets/img/Ceneval/TarjetaCeneval3.webp" class="card-img-top" alt="Elaboración de Expediente Ceneval">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title custom-text">Elaboración de Expediente</h4>
                        <p class="card-text">El expediente debe contener los siguientes documentos:</p>
                            <ul class="flex-grow-1">
                                <li>Pase de Ingreso</li>
                                <li>Baucher de pago de Banamex</li>
                                <li>Historial académico</li>
                            </ul>
                        <p class="card-text">Para mayor información, checa el siguiente enlace: <a href="https://www.youtube.com/watch?v=PGD04o7hePc" target="_blank" rel="noopener noreferrer">Video Informativo</a></p>
                    </div>
                </div>
            </div>
        </div> <br>

        <!-- Tarjetas con efectos -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card shadow-lg border-light hover-effect" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <h3 class="card-title custom-text">¿Qué es el CENEVAL?</h3>
                        <p class="card-text">El Centro Nacional de Evaluación para la Educación Superior (CENEVAL) es una institución mexicana que ofrece exámenes estandarizados para evaluar conocimientos y habilidades en diversos niveles educativos y áreas profesionales...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta sobre ¿Qué es el examen EGEL? -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card shadow-lg border-light hover-effect" data-aos="fade-up" data-aos-duration="1200">
                    <div class="card-body">
                        <h3 class="card-title custom-text">¿Qué es el examen EGEL?</h3>
                        <p class="card-text">El EGEL significa Examen General para el Egreso de Licenciatura (de ahí el acrónimo EGEL) y es un instrumento desarrollado por el Centro Nacional de Evaluación para la Educación Superior (Ceneval)...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta sobre Examen General para el Egreso de la Licenciatura (EGEL) -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card shadow-lg border-light hover-effect" data-aos="fade-up" data-aos-duration="1300">
                    <div class="card-body">
                        <h4 class="card-title custom-text">Examen General para el Egreso de la Licenciatura (EGEL)</h4>
                        <p class="card-text">El Examen General para el Egreso de la Licenciatura (EGEL) es un instrumento de evaluación de cobertura nacional cuyo propósito es determinar si los egresados que concluyen un plan de estudios de la licenciatura cuentan con los conocimientos y las habilidades que se consideran indispensables al término de su formación académica.</p>
                        <p class="card-text"><strong>¿A quién está dirigido?</strong> A los egresados de programas de educación superior que han cubierto 100% de los créditos y, en su caso, a estudiantes que están cursando el último semestre de la carrera, siempre y cuando la institución formadora así lo solicite.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta sobre Sede EGEL -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card shadow-lg border-light hover-effect" data-aos="fade-up" data-aos-duration="1400">
                    <div class="card-body">
                        <h4 class="card-title custom-text">Sede EGEL</h4>
                        <p class="card-text">Gracias al compromiso de toda nuestra comunidad, Centro Universitario Hidalguense ha sido seleccionado como sede institucional para la aplicación del Examen General de Egreso para la Licenciatura (EGEL Ceneval).
                            <br>Nuestros estudiantes al egresar podrán titularse mediante esta evaluación y registrarse para aplicarla en las instalaciones de nuestra universidad.
                            <br>Orgullosos de nuestros alumnos egresados que nos representan en la aplicación del Examen General de Egreso de Licenciatura "EGEL".
                            <br>¡El mayor de los éxitos para ustedes!
                            <br>La sabiduría es nuestra fuerza
                            <br><a href="https://twitter.com/hashtag/OrgulloCUH" target="_blank" rel="noopener noreferrer">#OrgulloCUH</a> <a href="https://twitter.com/hashtag/SomosSedeEGELCUH" target="_blank" rel="noopener noreferrer">#SomosSedeEGELCUH</a></p>
                    </div>
                </div>
                <br>
            </div>
        </div>

        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/Ceneval/PortadaEgel.webp" class="d-block w-100 carousel-custom-image" alt="Portada EGEL">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Ceneval/CarrucelEgel1.webp" class="d-block w-100 carousel-custom-image" alt="Portada EGEL">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Ceneval/CarrucelEgel2.webp" class="d-block w-100 carousel-custom-image" alt="Imagen EGEL 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Ceneval/CarrucelEgel3.webp" class="d-block w-100 carousel-custom-image" alt="Imagen EGEL 4">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Ceneval/CarrucelEgel4.webp" class="d-block w-100 carousel-custom-image" alt="Imagen EGEL 5">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Ceneval/CarrucelEgel5.webp" class="d-block w-100 carousel-custom-image" alt="Imagen EGEL 6">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Ceneval/CarrucelEgel6.webp" class="d-block w-100 carousel-custom-image" alt="Imagen EGEL 7">
                </div>
            </div>
        </div>
                <div class="row mt-4">
            <div class="col-lg-12">
                <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <img class="img-fluid" src="assets/img/Ceneval/Ceneval1.webp" width="200" height="200" alt="Logo CENEVAL">
                        </div>
                        <div class="carousel-item text-center">
                            <img class="img-fluid" src="assets/img/Ceneval/Ceneval2.webp" width="200" height="200" alt="Logo CENEVAL">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection