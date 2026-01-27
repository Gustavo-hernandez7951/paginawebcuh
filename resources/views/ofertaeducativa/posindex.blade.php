@extends('layouts.pagina')

@section('content')
        <link rel="stylesheet" href="{{ asset('assets/css/posgradoindex.css') }}">

        <!-- ======= Licenciatura Section ======= -->
        <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/12.png') center center; background-size: cover; height: 300px;">
            <div class="container text-center" data-aos="fade-up">
                <h1 class="display-3 font-weight-bolder text-white">OFERTA EDUCATIVA</h1>
                <h2 class="text-white">Maestria CUH</h2>
            </div>
        </section>
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3 align="justify">Maestria</h3>
                            <p class="text-justify" style="color: #333; font-size: 16px;">
                                Nuestro modelo educativo está diseñado para ofrecer una formación integral y flexible tanto a profesionales como a estudiantes. A través de un plan bimestral presencial, permite compatibilizar el estudio con el trabajo, fomentando un sistema sinérgico de enseñanza-aprendizaje.
                                <br>Este enfoque promueve el uso de métodos pedagógicos innovadores y tecnologías avanzadas, garantizando una formación profesional de alta calidad. Además, se enfoca en técnicas de estudio, procesos de investigación y la causística propia de cada disciplina, generando aprendizajes significativos para nuestros estudiantes.
                                <br>Ofrecemos diversas maestrías, incluyendo:
                                    <p align="justify">
                                    ✔ Maestría en Estrategias de Intervención en Problemas de Aprendizaje<br>
                                    ✔ Maestría en Derecho Procesal Penal Acusatorio<br>
                                    ✔ Maestría en Administración de Negocios<br>
                                    ✔ Maestría en Formación Docente<br>
                                    ✔ Maestría en Derecho Civil<br>
                                    ✔ Maestría en Finanzas<br>
                                    </p>
                                    <br>
                                    Cada programa está diseñado para preparar a los estudiantes con las herramientas necesarias para su éxito profesional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Hero Section ======= -->
        <div class="container" data-aos="fade-up">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets\img\Macu\imagen1.webp" class="d-block w-100" alt="Oferta Educativa Maestria">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Macu\imagen1.webp" class="d-block w-100" alt="Oferta Educativa Maestria">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Macu\imagen1.webp" class="d-block w-100" alt="Oferta Educativa Maestria">
                    </div>
                </div>
            </div>
            <br>
            <!-- Tarjetas de Información -->
            <div class="row">

                <!-- Maestría en Administración de Negocios -->
                <div class="col-md-4">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Macu\OfertaEducativa\MaestriaNegocios.webp" class="card-img-top custom-card-img" alt="Maestría en Administración de Negocios">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue" style="color: #000080;"><a href="posadminnegocios">Maestría en Administración de Negocios</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSyS: 1413310 <br> CLAVE: 13341001 </strong> </p>
                        </div>
                    </div>
                </div>

                <!-- Maestría en Derecho Civil -->
                <div class="col-md-4">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Macu\OfertaEducativa\MaestriaDerechoCivil.webp" class="card-img-top custom-card-img" alt="Maestría en Derecho Civil">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue" style="color: #000080;"><a href="posderechocivil">Maestría en Derecho Civil</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSyS: 1413305  <br> CLAVE: 13340501 </strong></p>
                        </div>
                    </div>
                </div>

                <!-- Maestría en Derecho Procesal Penal Acusatorio -->
                <div class="col-md-4">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Macu\OfertaEducativa\MaestriasDerechoProcesal.webp" class="card-img-top custom-card-img" alt="Maestría en Derecho Procesal Penal Acusatorio">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue" style="color: #000080;"><a href="posdppa">Maestría en Derecho Procesal Penal Acusatorio</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSyS: 1613313 <br> CLAVE: 13341301 </strong></p>
                        </div>
                    </div>
                </div>

                <!-- Maestría en Estrategias de Intervención en problemas de Aprendizaje -->
                <div class="col-md-4">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Macu\OfertaEducativa\MaestriaEstrategias.webp" class="card-img-top custom-card-img" alt="Maestría en Estrategias de Intervención">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue" style="color: #000080;"><a href="poseipa">Maestría en Estrategias de Intervención en Problemas de Aprendizaje</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSyS: 1413307 <br> CLAVE: 13350701 </strong> </p>
                        </div>
                    </div>
                </div>

                <!-- Maestría en Finanzas -->
                <div class="col-md-4">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Macu\OfertaEducativa\MaestriaFinanzas.webp" class="card-img-top custom-card-img" alt="Maestría en Finanzas">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue" style="color: #000080;"><a href="posfinanzas">Maestría en Finanzas</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSyS: 1413309 <br> CLAVE: 13340901 </strong></p>
                        </div>
                    </div>
                </div>

                <!-- Maestría en Formación Docente -->
                <div class="col-md-4">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Macu\OfertaEducativa\MaestriaDocente.webp" class="card-img-top custom-card-img" alt="Maestría en Formación Docente">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue" style="color: #000080;"><a href="posformaciondocente">Maestría en Formación Docente</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSYS: 1413306 <br> CLAVE: 13350601 </strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection