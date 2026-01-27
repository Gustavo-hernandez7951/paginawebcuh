@extends('layouts.pagina')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/ofertaacademica.css') }}">

    <section id="pricing" class="pricing">
        <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;" data-aos="fade-up">
            <div class="container text-center">
                <h1 class="display-3 font-weight-bolder text-white">OFERTA EDUCATIVA</h1>
                <h2 class="text-white">Licenciatura CUH</h2>
            </div>
        </section>
    </section>

    <!-- ======= Licenciatura Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-aos="fade-up">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets\img\Licu\imagen1.webp" class="d-block w-100" alt="Oferta Educativa Licenciatura">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Licu\imagen1.webp" class="d-block w-100" alt="Oferta Educativa Licenciatura">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Licu\imagen1.webp" class="d-block w-100" alt="Oferta Educativa Licenciatura">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 align="justify">Licenciatura</h3>
                        <p class="text-justify" style="color: #333; font-size: 16px;">
                            Nuestro modelo educativo está diseñado para ofrecer una formación integral y flexible tanto a profesionales como a estudiantes. A través de un plan bimestral presencial, permite compatibilizar el estudio con el trabajo, fomentando un sistema sinérgico de enseñanza-aprendizaje.
                            <br>Este enfoque promueve el uso de métodos pedagógicos innovadores y tecnologías avanzadas, garantizando una formación profesional de alta calidad. Además, se enfoca en técnicas de estudio, procesos de investigación y la causística propia de cada disciplina, generando aprendizajes significativos para nuestros estudiantes.
                            <br>Ofrecemos diversas licenciaturas, incluyendo:
                                <p align="justify">
                                ✔ Licenciatura en Administración y Sistemas Computacionales<br>
                                ✔ Licenciatura en Contaduría y Sistemas Fiscales<br>
                                ✔ Licenciatura en Derecho <br>
                                ✔ Licenciatura en Ciencias de la Educación<br>
                                ✔ Licenciatura en Psicología<br>
                                ✔ Ingeniería en Sistemas Computacionales<br>
                                </p>
                                <br>
                                Cada programa está diseñado para preparar a los estudiantes con las herramientas necesarias para su éxito profesional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="container text-center" data-aos="fade-up">
                <h1 class="display-3 font-weight-bolder" style="color: #000080; margin-bottom: 40px;">Conoce nuestras ofertas</h1>
            </div>
        </div>

        <!-- ======= Hero Section ======= -->
        <div class="container" data-aos="fade-up">
            <br>
            <!-- Tarjetas de Información -->
            <div class="row mt-4">
                <!-- Licenciatura 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Licu\OfertaEducativa\LogoAdministracion.webp" class="card-img-top custom-card-img" alt="Centro de Computo Aula">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue"><a href="licadminysiscom">Licenciatura en Administración y Sistemas Computacionales</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSYS 0213102</strong> <br> CLAVE: 1314201 </p>
                        </div>
                    </div>
                </div>
                <!-- Licenciatura 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Licu\OfertaEducativa\LogoContaduria.webp" class="card-img-top custom-card-img" alt="Centro de Computo">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue"><a href="liccontaysisfis">Licenciatura en Contaduría y Sistemas Fiscales</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSYS 0213101 <br> CLAVE: 1314101 </strong></p> 
                        </div>
                    </div>
                </div>
                
                <!-- Licenciatura 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Licu\OfertaEducativa\LogoDerecho.webp" class="card-img-top custom-card-img" alt="Aula 25">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue"><a href="licderecho">Licenciatura en Derecho</a></h5>
                            <p class="card-text"><strong>R.V.O.E. IHEMSYS 0211103 <br>CLAVE: 13140301</strong></p>
                        </div>
                    </div>
                </div>
                
                <!-- Licenciatura 4 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Licu\OfertaEducativa\LogoPsicologia.webp" class="card-img-top custom-card-img" alt="Aula 25">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue"><a href="licpsicologia">Licenciatura en Psicología</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SEMSYS 0218104 <br>CLAVE: 13140401 </strong></p>
                        </div>
                    </div>
                </div>
                
                <!-- Licenciatura 5 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Licu\OfertaEducativa\LogoEducacion.webp" class="card-img-top custom-card-img" alt="Aula 25">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue"><a href="liceducacion">Licenciatura en Ciencias de la Educación</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SSEMSyS 1513111 <br> CLAVE: 13151101</strong></p>
                        </div>
                    </div>
                </div>
                
                <!-- Licenciatura 6 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 animated-card">
                        <img src="assets\img\Licu\OfertaEducativa\LogoIngenieria.webp" class="card-img-top custom-card-img" alt="Aula 25">
                        <div class="card-body">
                            <h5 class="card-title card-title-blue"><a href="licsiscom">Ingeniería en Sistemas Computacionales</a></h5>
                            <p class="card-text"><strong>R.V.O.E. SSEMSyS 1513112 <br> CLAVE: 13161201 </strong></p> 
                        </div>
                    </div>
                </div>
                
        </div>
    </section>
@endsection