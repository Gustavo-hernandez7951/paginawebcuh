@extends('layouts.pagina')
@section('content')
<!-- Estilos adicionales para responsividad -->
    <link href="assets/css/testvocacional.css" rel="stylesheet">

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="font-weight-bolder text-white mb-3">¡Encuentra tu pasión!</h1>
        <h2 class="text-white mb-4">Toma el control de tu futuro profesional con nuestro Test Vocacional</h2>
        <a href="/testvocacional/" class="btn btn-light btn-lg btn-pop">¡Realiza tu Test!</a>
    </div>
</section>

<!-- Sección Carrucel -->
<section id="carousel-section" class="py-4">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/test/BANNER-CARRUSEL-1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/test/BANNER-CARRUSEL-2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/test/BANNER-CARRUSEL-3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- Introducción Test Vocacional -->
<section id="about" class="py-5">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h2 class="font-weight-bold text-center mb-4" style="color: #183161; font-size: 2.2rem;">
                    Test Vocacional CUH
                </h2>
                <p class="text-justify mx-auto" style="font-size: 1.1rem; color: #333; max-width: 900px;">
                    ¿Aún no tienes claro qué carrera estudiar?
                    En el <strong>Centro Universitario Hidalguense</strong> queremos acompañarte en una de las decisiones más importantes de tu vida.
                    Nuestro <strong>Test Vocacional</strong> no es solo un cuestionario, es una herramienta poderosa que te ayudará a descubrir las áreas profesionales que mejor se ajustan a tus intereses, habilidades y valores.
                    <br><br>Es el momento de mirar hacia tu futuro con claridad, confianza y visión,
                    da el primer paso hacia una carrera que potencie tu talento y te permita generar un impacto positivo en tu entorno,
                    descubre tu vocación, encuentra tu camino profesional,
                    en el CUH no caminas solo, estamos contigo en cada paso de tu formación.<br><br>
                    <span class="d-block text-center font-weight-bold mt-3" style="font-size: 1.4rem; color: #183161;">
                        ¡Atrévete a dar el siguiente paso! <br> ¡Realiza tu Test Vocacional hoy mismo!
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Información de 3 pasos -->
<div class="background-section py-5">
    <div class="container">
        <!-- Título y botón arriba de las tarjetas -->
        <div class="access-title text-center mb-4">
            <h1>¿Cómo acceder al test?</h1>
            <a href="/testvocacional/" class="btn btn-light btn-lg btn-pop">¡Realiza tu Test!</a>
        </div>

        <!-- Tarjetas de pasos -->
        <div class="steps-container">
            <!-- Step 1 -->
            <div class="step">
                <div class="step-number">1</div>
                <img src="assets/img/test/7.-Acceso.webp" alt="Acceso al Test">
                <h4>Acceso al Test</h4>
                <p>Ingresa dando clic al botón para acceder a nuestro test vocacional. Solo necesitas seguir las instrucciones en pantalla para comenzar.</p>
            </div>
            <!-- Step 2 -->
            <div class="step">
                <div class="step-number">2</div>
                <img src="assets/img/test/8.-Cuestionario.webp" alt="Responde las Preguntas">
                <h4>Responde las Preguntas</h4>
                <p>Completa el cuestionario en línea, que consta de una serie de preguntas diseñadas para evaluar tus intereses y habilidades.</p>
            </div>
            <!-- Step 3 -->
            <div class="step">
                <div class="step-number">3</div>
                <img src="assets/img/test/9.-Resultados.webp" alt="Obtén tus Resultados">
                <h4>Obtén tus Resultados</h4>
                <p>Una vez completado el test, recibirás un informe detallado con tus resultados, que te ayudará a entender mejor tus opciones profesionales.</p>
            </div>
        </div>
    </div>
</div>

<!-- Información e Imágenes -->
<section id="test-info" class="py-5">
    <div class="container">
        <h2 class="font-weight-bold text-center mb-5" style="color: #183161; font-size: 2.2rem;">¿Para qué sirve un Test Vocacional?</h2>
        <div class="info-card">
            <div class="card-header">
                <h3 class="mb-0">Orientación</h3>
            </div>
            <div class="card-body">
                <div class="card-img-container">
                    <img src="assets/img/test/Test/Orientación-azul.png" alt="Orientación" class="img-fluid">
                </div>
                <div class="card-text-container">
                    <p class="card-text">
                        Un test vocacional es una herramienta de orientación diseñada para ayudarte a identificar las áreas de estudio o campos profesionales que mejor se alinean con tu personalidad, intereses, habilidades y valores.
                    </p>
                </div>
            </div>
        </div>
        <div class="info-card">
            <div class="card-header">
                <h3 class="mb-0">Descubrir Intereses</h3>
            </div>
            <div class="card-body">
                <div class="card-img-container">
                    <img src="assets/img/test/Test/Intereses-azul.png" alt="Descubrir Intereses" class="img-fluid">
                </div>
                <div class="card-text-container">
                    <p class="card-text">
                        Te ayuda a reconocer qué actividades disfrutas, qué habilidades tienes más desarrolladas y en qué tipo de tareas te sientes más cómodo o motivado.
                    </p>
                </div>
            </div>
        </div>
        <div class="info-card">
            <div class="card-header">
                <h3 class="mb-0">Elección de Carrera</h3>
            </div>
            <div class="card-body">
                <div class="card-img-container">
                    <img src="assets/img/test/Test/Elección-azul.png" alt="Elección de Carrera" class="img-fluid">
                </div>
                <div class="card-text-container">
                    <p class="card-text">
                        Basado en tus respuestas, el test propone carreras o áreas de estudio que se ajustan a tu perfil, facilitando una decisión informada y consciente sobre tu futuro académico.
                    </p>
                </div>
            </div>
        </div>
        <div class="info-card">
            <div class="card-header">
                <h3 class="mb-0">Reducir Indecisión</h3>
            </div>
            <div class="card-body">
                <div class="card-img-container">
                    <img src="assets/img/test/Test/Indesición-azul.png" alt="Reducir Indecisión" class="img-fluid">
                </div>
                <div class="card-text-container">
                    <p class="card-text">
                        Muchas personas se sienten perdidas al elegir una carrera. Un test vocacional brinda claridad y dirección, reduciendo la ansiedad y el riesgo de tomar decisiones impulsivas o equivocadas.
                    </p>
                </div>
            </div>
        </div>
        <div class="info-card">
            <div class="card-header">
                <h3 class="mb-0">Autoconocimiento</h3>
            </div>
            <div class="card-body">
                <div class="card-img-container">
                    <img src="assets/img/test/Test/Autoconocimiento-azul.png" alt="Autoconocimiento" class="img-fluid">
                </div>
                <div class="card-text-container">
                    <p class="card-text">
                        Además de orientarte académicamente, el test promueve la autoexploración y el conocimiento personal, elementos clave para desarrollar un proyecto de vida alineado con lo que realmente quieres y necesitas.
                    </p>
                </div>
            </div>
        </div>
        <div class="info-card">
            <div class="card-header">
                <h3 class="mb-0">Motivación</h3>
            </div>
            <div class="card-body">
                <div class="card-img-container">
                    <img src="assets/img/test/Test/Motivación-azul.png" alt="Motivación" class="img-fluid">
                </div>
                <div class="card-text-container">
                    <p class="card-text">
                        Al identificar opciones que se adaptan a ti, es más probable que te sientas comprometido, motivado y seguro con la carrera que elijas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
