@extends('layouts.pagina')
@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="assets/css/biblioteca.css" rel="stylesheet">

<section id="pricing" class="pricing">
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Biblioteca</h1>
            <h2 class="text-white">CUH</h2>
        </div>
    </section>
</section>
<section id="library" class="library section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="container text-center">
                <div class="container text-center">
                    <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestra Biblioteca</h2>
                </div>
                <p style="text-align: justify; color: #333; font-size: 20px;">
                    La biblioteca del Centro Universitario Hidalguense (CUH) es un espacio diseñado para fomentar el aprendizaje y la curiosidad intelectual dentro de la comunidad universitaria. Nuestra biblioteca te ofrece una amplia colección de libros que abarcan diversas disciplinas académicas, desde ciencias y humanidades hasta literatura y arte.
                    Los estudiantes y profesores pueden pedir y consultar libros directamente en la biblioteca, aprovechando un ambiente tranquilo y propicio para la lectura y el estudio. Además, la biblioteca permite a sus usuarios llevarse libros prestados, facilitando el acceso al conocimiento más allá de las paredes del CUH.
                </p>
            </div>
        </div>
        <!-- Carrusel Principal -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/Biblioteca/CarrucelBiblioteca1.webp" class="d-block w-100 carousel-image" alt="Biblioteca 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Biblioteca/CarrucelBiblioteca2.webp" class="d-block w-100 carousel-image" alt="Biblioteca 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Biblioteca/CarrucelBiblioteca3.webp" class="d-block w-100 carousel-image" alt="Biblioteca 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Biblioteca/CarrucelBiblioteca4.webp" class="d-block w-100 carousel-image" alt="Biblioteca 4">
                </div>
            </div>
            <!-- Controles para el Carrusel Principal -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <!-- Cuerpo de la página -->
        <div class="row mt-4 align-items-start">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-lg border-light">
                    <div class="card-body p-4">
                        <h3 class="card-title" style="color: #000080;">Nuestra Misión</h3>
                        <p class="card-text">Nuestra biblioteca ofrece a los estudiantes la información necesaria para apoyar sus procesos de aprendizaje y mejorar los resultados de sus trabajos e investigaciones con alta calidad.</p>
                    </div>
                </div>
                <div class="card shadow-lg border-light mt-4">
                    <div class="card-body p-4">
                        <h3 class="card-title" style="color: #000080;">Servicios</h3>
                        <p class="card-text">Contamos con servicios de consulta, préstamo y fotocopiado de libros diseñados para enriquecer tu experiencia educativa.</p>
                    </div>
                </div>
                <div class="card shadow-lg border-light mt-4">
                    <div class="card-body p-4">
                        <h3 class="card-title" style="color: #000080;">Materiales Disponibles</h3>
                        <p class="card-text">Explora nuestra colección de libros para complementar nuestros programas académicos y enriquecer tu aprendizaje. Además, encontrarás recursos digitales y materiales de consulta especializados que te ayudarán a profundizar en tus estudios y proyectos de investigación.</p>
                    </div>
                </div>
            </div>
            <!-- Carrusel en el lado derecho -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400"><br>
                <div id="carouselSide" class="carousel slide" data-ride="carousel" data-interval="3500">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/Biblioteca/TarjetaBiblioteca1.webp" class="d-block w-100 carousel-image" alt="Interior de la Biblioteca">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/Biblioteca/TarjetaBiblioteca2.webp" class="d-block w-100 carousel-image" alt="Interior de la Biblioteca 2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/Biblioteca/TarjetaBiblioteca3.webp" class="d-block w-100 carousel-image" alt="Interior de la Biblioteca 3">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/Biblioteca/TarjetaBiblioteca4.webp" class="d-block w-100 carousel-image" alt="Interior de la Biblioteca 4">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/Biblioteca/TarjetaBiblioteca5.webp" class="d-block w-100 carousel-image" alt="Interior de la Biblioteca 5">
                        </div>
                    </div>
                    <!-- Controles para el Carrusel Lateral -->
                    <a class="carousel-control-prev" href="#carouselSide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselSide" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Tarjetas de Imágenes -->
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-lg border-light mb-4">
                    <img class="card-img-top card-image" src="assets/img/Biblioteca/TarjetaImagen1.webp" alt="Enciclopedia">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="color: #000080;">Enciclopedias</h4>
                        <p class="card-text">Contamos con una selección de enciclopedias especializadas que abarcan una amplia gama de disciplinas académicas, desde ciencias exactas hasta humanidades. Estos recursos ofrecen información detallada, confiable y actualizada, lo que permite a los estudiantes profundizar en sus áreas de interés.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-lg border-light mb-4">
                    <img class="card-img-top card-image" src="assets/img/Biblioteca/TarjetaImagen2.webp" alt="Diccionario">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="color: #000080;">Diccionarios</h4>
                        <p class="card-text">Ofrecemos una amplia variedad de diccionarios especializados y generales para apoyar tus estudios. Son ideales para resolver dudas lingüísticas y técnicas, y están disponibles tanto en formato impreso como digital, para que puedas acceder a ellos de manera cómoda y práctica.Visita nuestra Biblioteca.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-lg border-light mb-4">
                    <img class="card-img-top card-image" src="assets/img/Biblioteca/TarjetaImagen3.webp" alt="Tesis">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="color: #000080;">Tesis</h4>
                        <p class="card-text">Nuestros diccionarios especializados son indispensables para la redacción de tesis, ofreciendo definiciones precisas y terminología técnica. Estos recursos mejoran la claridad y precisión de tus escritos académicos y están disponibles en formato impreso y digital para tu conveniencia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-lg border-light mb-4">
                    <img class="card-img-top card-image" src="assets/img/Biblioteca/TarjetaImagen4.webp" alt="Monografía">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="color: #000080;">Monografías</h4>
                        <p class="card-text">Nuestros diccionarios especializados son fundamentales para la elaboración de monografías, ofreciendo definiciones precisas y terminología específica. Estos recursos mejoran la calidad y precisión de tus escritos y están disponibles en formato impreso y digital para tu conveniencia.</p>
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
                    <!-- Servicio 1 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                            <i class="bx bx-book-open display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Colección de Libros</h6>
                                    <p class="card-text">Amplia variedad de libros y recursos educativos</p>
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
                                    <h6 class="card-title card-title-blue">Acceso a Internet</h6>
                                    <p class="card-text">Conexión a internet para investigación y estudio</p>
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
                                    <p class="card-text">Impresión de documentos y materiales académicos</p>
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
                                    <h6 class="card-title card-title-blue">Asistencia Bibliotecaria</h6>
                                    <p class="card-text">Apoyo en la búsqueda de información y recursos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 5 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-server display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Acceso a E-books</h6>
                                    <p class="card-text">Colección de libros electrónicos disponibles en línea</p>
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
                                    <p class="card-text">Acceso a videos educativos y audiolibros</p>
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
                                    <h6 class="card-title card-title-blue">Espacios de Estudio</h6>
                                    <p class="card-text">Áreas silenciosas para estudio y lectura</p>
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
                                    <h6 class="card-title card-title-blue">Seguridad y Privacidad</h6>
                                    <p class="card-text">Protección de datos personales y privacidad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection