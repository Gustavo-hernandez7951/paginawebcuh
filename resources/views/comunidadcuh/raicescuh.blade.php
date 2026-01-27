@extends('layouts.pagina')
@section('content')
<link href="assets/css/raicescuh.css" rel="stylesheet">
<!-- ======= Gaceta Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3 font-weight-bolder text-white">Raices</h1>
        <h2 class="text-white">Gaceta Oficial del Centro Universitario Hidalguense</h2>
    </div>
</section>
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <div class="card-deck">
                <div class="card bg-transparent border-0 d-flex align-items-center justify-content-center">
                    <img class="img-fluid" src="assets/img/Gaceta/raices.webp" width="900" height="500" alt="Card image cap">
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
        <!-- Sección de información gaceta -->
        <div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;">
            <div class="text">
                <h1><strong>Surgimiento</strong></h1>
            </div>
            <p style="text-align: justify; color: #333; font-size: 20px;">
                Raíces llega a dar voz y participación a la comunidad estudiantil sobre diferentes ejes temáticos, los cuales están pensados para que cada una de las licenciaturas y maestrías que oferta la institución puedan atribuir con algún tema u opinión.
                La gaceta está estructurada por diferentes secciones de interés común las cuales abordan temas relacionados con: educación, administración y cuidado de las finanzas personales, tips y recomendaciones, espacios de opinión, deportes, salud y empoderamiento, entre otras, eso sin olvidar que la gaceta se suma al órgano de difusión académica de nuestra institución.
                Raíces busca fomentar el sentido de pertenencia e identidad en nuestros alumnos para con nuestra institución.
            </p>
        </div>
        <br>
        <center>
            <!-- Carrusel de texto -->
            <div id="textCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Primer item -->
                    <div class="carousel-item active" style="color: #00004a;">
                        <h1 class="d-block w-100 text-center"><strong>Conoce nuestro último número</strong></h1>
                    </div>
                    <!-- Segundo item -->
                    <div class="carousel-item" style="color: #00004a;">
                        <h1 class="d-block w-100 text-center"><strong>Disfruta de nuestra Gaceta CUH</strong></h1>
                    </div>
                </div>
            </div>
        </center>
        <!-- Sección para Mostrar el contenido de la Gaceta -->
        <div id="contenidoGaceta">
            <iframe style="width:100%;height:600px" src="https://publuu.com/flip-book/1027406/2271305" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
        </div>
        <!-- Sección para Mostrar el contenido de tomas anteriores seccion por años -->
        <div id="accordion">
            <!-- Año 2025 -->
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapse2025">
                        <h4>2025</h4>
                    </a>
                </div>
                <div id="collapse2025" class="collapse" data-parent="#accordion">
                    <div class="card-body">

                    <div class="card-body">
                        <!-- Edición 15: JUL-AGO/2025 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFifteen">
                                    <h5>Edición 15: JUL-AGO/2025</h5>
                                </a>
                            </div>
                            <div id="collapseFifteen" class="collapse" data-parent="#collapse2025">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(15)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Edición 14: MAY-JUN/2025 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFourteen">
                                    <h5>Edición 14: MAY-JUN/2025</h5>
                                </a>
                            </div>
                            <div id="collapseFourteen" class="collapse" data-parent="#collapse2025">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(14)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Edición 13: MAR-ABR/2025 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThirteen">
                                    <h5>Edición 13: MAR-ABR/2025</h5>
                                </a>
                            </div>
                            <div id="collapseThirteen" class="collapse" data-parent="#collapse2025">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(13)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 12: ENE-FEB/2025 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwelve">
                                    <h5>Edición 12: ENE-FEB/2025</h5>
                                </a>
                            </div>
                            <div id="collapseTwelve" class="collapse" data-parent="#collapse2025">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(12)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Año 2024 -->
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapse2024">
                        <h4>2024</h4>
                    </a>
                </div>
                <div id="collapse2024" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <!-- Edición 11: NOV-DIC/2024 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseEleven">
                                    <h5>Edición 11: NOV-DIC/2024</h5>
                                </a>
                            </div>
                            <div id="collapseEleven" class="collapse" data-parent="#collapse2024">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(11)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 10: SEP-OCT/2024 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTen">
                                    <h5>Edición 10: SEP-OCT/2024</h5>
                                </a>
                            </div>
                            <div id="collapseTen" class="collapse" data-parent="#collapse2024">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(10)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 09: JUL-AGO/2024 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">
                                    <h5>Edición 09: JUL-AGO/2024</h5>
                                </a>
                            </div>
                            <div id="collapseNine" class="collapse" data-parent="#collapse2024">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(9)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 08: MAY-JUN/2024 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">
                                    <h5>Edición 08: MAY-JUN/2024</h5>
                                </a>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#collapse2024">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(8)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 07: MAR-ABR/2024 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                                    <h5>Edición 07: MAR-ABR/2024</h5>
                                </a>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#collapse2024">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(7)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 06: ENE-FEB/2024 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                    <h5>Edición 06: ENE-FEB/2024</h5>
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#collapse2024">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(6)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Año 2023 -->
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapse2023">
                        <h4>2023</h4>
                    </a>
                </div>
                <div id="collapse2023" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <!-- Edición 05: NOV-DIC/2023 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                    <h5>Edición 05: NOV-DIC/2023</h5>
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#collapse2023">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(5)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 04: AGO-SEP/2023 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                    <h5>Edición 04: AGO-SEP/2023</h5>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#collapse2023">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(4)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 03: JUN-JUL/2023 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <h5>Edición 03: JUN-JUL/2023</h5>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#collapse2023">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(3)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 02: ABR-MAY/2023 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <h5>Edición 02: ABR-MAY/2023</h5>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#collapse2023">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(2)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Edición 01: FEB-MAR/2023 -->
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                    <h5>Edición 01: FEB-MAR/2023</h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#collapse2023">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block botonGaceta" onclick="actualizarDiv(1)">
                                        Mostrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin de mostrar Información del contenido de tomas anteriores -->
        <br><br>
        <!-- Sección de las imágenes de Codex Sapientia -->
        <div class="container" style="margin-top: 40px;">
            <!-- Apartado de MENSAJE ING Meda -->
            <h1 class="tituloVistas" id="tituloVistas"><strong>Un poco de nuestro contenido...</strong></h1>
            <!-- Imagen 1 con texto -->
            <div class="image-item">
                <div class="image-container">
                    <img src="assets/img/Gaceta/raiceslogo.webp" class="image" alt="Raices Logo">
                </div>
                <div class="text-container">
                    <div class="text">
                        <h4><strong>Mensaje del director: <br> ING. SANTIAGO MEDA CANCINO <br> DIRECTOR GENERAL</strong></h4>
                    </div>
                    <div class="text">
                        Este espacio pretende motivar a nuestra comunidad expresar sus ideas e inquietudes y despertar el interés por plasmar sus reflexiones en forma escrita. Además, esta gaceta pretende servir como una plataforma de inicio para lo que se pretende consolidar a corto plazo de contar con una revista institucional con todas las normativas que implica la misma.
                        <br> Invito a toda la comunidad de esta universidad para que a partir de hoy adopten este espacio como un medio de interacción al interior de la institución, por medio del cual se consolide la vinculación de las diversas áreas del conocimiento y que además abone a la proyección al exterior del trabajo constante del alumnado y el personal docente del Centro Universitario Hidalguense.
                    </div>
                </div>
            </div>
            <br>
            <!-- Apartado de Lente CUH -->
            <div class="image-item">
                <div class="image-container">
                    <img src="assets/img/Gaceta/Tarjeta1.webp" class="image" alt="Lente CUH">
                </div>
                <div class="text-container">
                    <div class="text">
                        <h4><strong>Lente CUH:</strong></h4>
                    </div>
                    <div class="text">
                        El Lente CUH es una iniciativa dentro del Centro Universitario Hidalguense que representa una forma dinámica y visual de interacción entre la comunidad universitaria y el mundo exterior.
                        <br> A través de esta herramienta, nuestros fotógrafos capturan momentos significativos de diversos aspectos de la vida universitaria, abarcando desde eventos deportivos y culturales hasta actividades sociales e institucionales.
                        <br> Estas imágenes no solo documentan la riqueza y diversidad de experiencias dentro del plantel, sino que también sirven como un puente que conecta a estudiantes, profesores y personal, fomentando un sentido de pertenencia y orgullo institucional.
                    </div>
                </div>
            </div>
            <!-- Sabías que CUH -->
            <div class="image-item">
                <div class="image-container">
                    <img src="assets/img/Gaceta/Tarjeta2.webp" class="image" alt="Imagen 1">
                </div>
                <div class="text-container">
                    <div class="text">
                        <h4><strong>Rincón Cultural CUH</strong></h4>
                    </div>
                    <div class="text">
                        Es una sección dinámica y educativa dentro del Centro Universitario Hidalguense que tiene como objetivo compartir datos curiosos, hechos interesantes y conocimientos relevantes con la comunidad estudiantil.
                        En esta sección los alumnos pueden descubrir información fascinante sobre una amplia variedad de temas, desde avances científicos y tecnológicos hasta anécdotas históricas y culturales. Además, no solo enriquece el aprendizaje de los estudiantes, sino que también fomenta la curiosidad y el interés por el conocimiento más allá de las aulas.
                        Se promueve un ambiente de aprendizaje continuo y se fortalece el espíritu investigador dentro de la institución.
                    </div>
                </div>
            </div>
            <!-- Talento CUH -->
            <div class="image-item">
                <div class="image-container">
                    <img src="assets/img/Gaceta/Tarjeta3.webp" class="image" alt="Imagen 1">
                </div>
                <div class="text-container">
                    <div class="text">
                        <h4><strong>Talento CUH:</strong></h4>
                    </div>
                    <div class="text">
                        "Talento CUH" es una ventana fascinante que nos permite conocer más a fondo la vida y las aspiraciones de los estudiantes del Centro Universitario Hidalguense.
                        A través de esta iniciativa, descubrimos las historias personales que motivaron a cada alumno a elegir su carrera de licenciatura, así como los desafíos y logros que han enfrentado en su camino académico.
                        En esta sección nos muestra no solo lo que estudian, sino también cómo aplican sus conocimientos en proyectos, investigaciones y actividades dentro y fuera del plantel.
                        Además, conoces la diversidad y el potencial de cada miembro de la institución, destacando cómo cada uno contribuye de manera única al enriquecimiento del entorno universitario.
                    </div>
                </div>
            </div>
            <!-- Recomendación de libro -->
            <div class="image-item">
                <div class="image-container">
                    <img src="assets/img/Gaceta/Tarjeta4.webp" class="image" alt="Imagen 1">
                </div>
                <div class="text-container">
                    <div class="text">
                        <h4><strong>Recomendación Literaria:</strong></h4>
                    </div>
                    <div class="text">
                        Es una iniciativa innovadora dentro del Centro Universitario Hidalguense que fomenta el intercambio de conocimientos y la pasión por la lectura entre los estudiantes.
                        <br> Al compartir sus lecturas favoritas, los estudiantes no solo enriquecen su propio aprendizaje, sino que también contribuyen al crecimiento intelectual de toda la comunidad universitaria.
                        <br> La "Recomendación del Libro CUH" se convierte así en un espacio de descubrimiento y discusión, donde las ideas fluyen y se fortalecen los lazos entre los miembros de la institución.
                    </div>
                </div>
            </div>
            <!-- Cine CUH -->
            <div class="image-item">
                <div class="image-container">
                    <img src="assets/img/Gaceta/Tarjeta5.webp" class="image" alt="Imagen 1">
                </div>
                <div class="text-container">
                    <div class="text">
                        <h4><strong>Cine CUH</strong></h4>
                    </div>
                    <div class="text">
                        "Cine CUH" es una iniciativa cultural y educativa dentro del Centro Universitario Hidalguense que celebra la magia del cine y su impacto en la sociedad. En esta sección se ofrece a los estudiantes la oportunidad de disfrutar y analizar una variedad de películas, desde clásicos atemporales hasta producciones contemporáneas, abarcando diversos géneros y temáticas.
                        A través de proyecciones, debates y talleres, "Cine CUH" fomenta el pensamiento crítico y la apreciación artística, permitiendo a los estudiantes explorar diferentes perspectivas y culturas.
                        "Cine CUH" no solo enriquece la experiencia académica, sino que también fortalece el sentido de comunidad y el amor por el séptimo arte dentro de la institución.
                    </div>
                </div>
            </div>
            <br><br><br>
            <!-- Inicio de Carruseles -->
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <!-- Carrusel 1 -->
                <div class="col-md-4 col-lg-4 portfolio-item d-flex align-items-center justify-content-center">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" data-interval="3500">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/Gaceta/Logo.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/Carrucel1.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/Carrucel2.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/Carrucel3.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/Carrucel4.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/Carrucel5.webp" width="375" height="500" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carrusel 2 -->
                <div class="col-md-4 col-lg-4 portfolio-item d-flex align-items-center justify-content-center">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCUH.oficial%2F&tabs=timeline&width=350&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                <!-- Carrusel 3 -->
                <div class="col-md-4 col-lg-4 portfolio-item d-flex align-items-center justify-content-center">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="3500">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/Gaceta/CarrucelGaceta10.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/CarrucelGaceta11.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/CarrucelGaceta12.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/CarrucelGaceta13.webp" width="375" height="500" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/Gaceta/CarrucelGaceta14.webp" width="375" height="500" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin de los Carruseles -->
            <br><br><br>
            <div class="col-lg-34 col-md-12">
                <div class="info-box mb-4 text-center">
                    <h3 class="invitation-title">¿Quieres ser parte de Raíces?</h3>
                    <p class="invitation-text">
                        Escríbenos a <strong><a href="mailto:gaceta@posgradocuh.edu.mx" class="email-link">gaceta@posgradocuh.edu.mx</a></strong>
                    </p>
                    <div class="card-deck">
                        <div class="card bg-transparent border-0 d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="assets\img\Gaceta\raices.webp" width="200" height="200" alt="Raices Logo">
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin de Template de imágenes -->
            <div class="col-lg-12">
                <br>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        aumentarVistas();
    });

    function aumentarVistas(){
        $token = '{{ csrf_token() }}';
        fetch('http://www.cuh.edu.mx/pagina/contadorVistas', {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': $token
            },
            body: JSON.stringify({ numVista: '1' })
        })
        .then(res => res.json())
        .then(res => {
            console.log(res);
            document.getElementById("contador").innerHTML = '<h2>'+res['NumVistas']+'</h2>';
        });
    }

    function actualizarDiv(val) {
        console.log('Botón clickeado con valor:', val);

        let iframeUrl = '';
        switch(val) {
            case 15:
                iframeUrl = 'https://publuu.com/flip-book/1027406/2271305';
                break;
            case 14:
                iframeUrl = 'https://publuu.com/flip-book/1027406/2271304';
                break;
            case 13:
                iframeUrl = 'https://publuu.com/flip-book/1027406/2271303';
                break;
            case 12:
                iframeUrl = 'https://publuu.com/flip-book/1027406/2271302';
                break;
            case 11:
                iframeUrl = 'https://publuu.com/flip-book/1027406/2271298';
                break;
            case 10:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271286';
                break;
            case 9:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271288';
                break;
            case 8:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271285';
                break;
            case 7:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271287';
                break;
            case 6:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271284';
                break;
            case 5:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271283';
                break;
            case 4:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271282';
                break;
            case 3:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271281';
                break;
            case 2:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271280';
                break;
            case 1:
                iframeUrl = 'https://publuu.com/flip-book/1027400/2271274';
                break;
            default:
                console.error('Invalid year or edition.');
                return;
        }

        console.log('URL del iframe:', iframeUrl);

        document.getElementById("contenidoGaceta").innerHTML = `<iframe style="width:100%;height:600px" src="${iframeUrl}" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>`;
        document.getElementById("contenidoGaceta").scrollIntoView();
    }
</script>

<script>
    // JavaScript para el carrusel automático
    const imageSlider = document.querySelector('#imageSlider');
    let currentIndex = 0;

    const moveSlider = () => {
        const images = imageSlider.querySelectorAll('.carousel-item');
        const totalImages = images.length;

        images.forEach((item) => item.classList.remove('active'));

        currentIndex = (currentIndex + 1) % totalImages;

        images[currentIndex].classList.add('active');
    };

    setInterval(moveSlider, 3500);
</script>

<!-- cdn iconos -->
<script src="https://kit.fontawesome.com/b7ab4c1bf2.js" crossorigin="anonymous"></script>
@endsection
@yield('script')