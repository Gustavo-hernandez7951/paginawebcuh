<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuracion Basica -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Universitario Hidalguense | CUH Oficial</title>

    <!-- SEO -->
    <meta name="description" content="Centro Universitario Hidalguense: educación de calidad en Preparatoria, Licenciatura, Maestría y Doctorado. La sabiduría es nuestra fuerza.">
    <meta name="keywords" content="CUH, universidad en Pachuca, educación superior, licenciaturas, posgrados, becas, maestrías, doctorados, Centro Universitario Hidalguense">
    <meta name="author" content="Centro Universitario Hidalguense">

    <!-- Open Graph -->
    <meta property="og:title" content="Centro Universitario Hidalguense - CUH Oficial">
    <meta property="og:description" content="Educación de calidad en Preparatoria, Licenciatura, Maestría y Doctorado.">
    <meta property="og:image" content="{{ asset('assets/img/favicon.png') }}">
    <meta property="og:url" content="https://www.cuh.mx/">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Precarga de fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Estilos principales -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/layouts.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- jQuery desde CDN con fallback local -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset("assets/vendor/jquery/jquery.min.js") }}"><\/script>');
    </script>
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:promocion@cuh.mx">promocion@cuh.mx</a>
                <i class="icofont-phone"></i> 771 719 5300 / 771 719 5301
                <i class="icofont-live-support"></i> Lunes-viernes: 7:00 a 22:00 Hrs. y Sábados: 7:00 a 16:00 Hrs.
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto">
                <a href="/">Bienvenido a <span>CUH</span></a>
            </h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <!-- Oferta Educativa -->
                    <li class="drop-down">
                        <a href="#">Becas y <br>Oferta Educativa</a>
                        <ul>
                            <li><a href="becaspreparatoria">Becas en Preparatoria</a></li>
                            <li><a href="becaslicenciatura">Becas en Licenciatura</a></li>
                            <li><a href="becasposgrado">Becas en Maestría</a></li>
                            <li><a href="preparatoria">Preparatoria</a></li>
                            <li class="drop-down">
                                <a href="licenciatura">Licenciaturas</a>
                                <ul>
                                    <li><a href="licadminysiscom">Licenciatura en Administración <br>y Sistemas Computacionales</a></li>
                                    <li><a href="liccontaysisfis">Licenciatura en Contaduría <br>y Sistemas Fiscales</a></li>
                                    <li><a href="licderecho">Licenciatura en Derecho</a></li>
                                    <li><a href="liceducacion">Licenciatura en <br>Ciencias de la Educación</a></li>
                                    <li><a href="licpsicologia">Licenciatura en Psicología</a></li>
                                    <li><a href="licsiscom">Ingeniería en Sistemas <br>Computacionales</a></li>
                                </ul>
                            </li>
                            <li class="drop-down">
                                <a href="posgrado">Maestrías</a>
                                <ul>
                                    <li><a href="posadminnegocios">Maestría en Administración de Negocios</a></li>
                                    <li><a href="posderechocivil">Maestría en Derecho Civil</a></li>
                                    <li><a href="posdppa">Maestría en Derecho Procesal Penal Acusatorio</a></li>
                                    <li><a href="poseipa">Maestría en Estrategias de Intervención</a></li>
                                    <li><a href="posfinanzas">Maestría en Finanzas</a></li>
                                    <li><a href="posformaciondocente">Maestría en Formación Docente</a></li>
                                </ul>
                            </li>
                            <li class="drop-down">
                                <a href="doctorado">Doctorados</a>
                                <ul>
                                    <li><a href="doctoradodcd">Doctorado en Ciencias <br>del Derecho</a></li>
                                    <li><a href="doctoradodaiit">Doctorado en Administración Integral <br>e Innovación Tecnológica</a></li>
                                    <li><a href="doctoradoditaae">Doctorado en Innovación y Tecnología <br>Aplicadas en Ambientes Educativos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Comunidad y Servicios CUH -->
                    <li class="drop-down">
                        <a href="#">Plataformas <br>CUH</a>
                        <ul>
                            <li><a href="https://www.digitaliapublishing.com/novedades">Biblioteca Digitalia</a></li>
                            <li><a href="/portal/">Portal Escolar</a></li>
                            <li><a href="/portaldocente/">Portal Docente</a></li>
                            <!-- <li><a href="raicescuh">Raíces CUH</a></li> -->
                        </ul>
                    </li>

                    <!-- Test Vocacional -->
                    <li><a href="vocacion-cuh">Test <br>Vocacional</a></li>

                    <!-- Cursos -->
                    <li class="drop-down">
                        <a href="#">Cursos <br> CUH</a>
                        <ul>
                            <li><a href="cursosdeeducacioncontinua">Cursos de Educación Continua</a></li>
                        </ul>
                    </li>

                    <!-- Ceneval / Servicio -->
                    <li class="drop-down">
                        <a href="#">Ceneval / Egel y <br>Servicio</a>
                        <ul>
                            <li><a href="assets/pdf/InscripcionEgel2026.pdf">Bases</a></li>
                            <li><a href="sedeegel">Sede EGEL</a></li>
                            <li><a href="serviciosocial">Servicio Social</a></li>
                        </ul>
                    </li>

                    <!-- Sobre CUH -->
                    <li class="drop-down">
                        <a href="#">Sobre <br> CUH</a>
                        <ul>
                            <li><a href="avisoprivacidad">Aviso de Privacidad</a></li>
                            <li><a href="biblioteca">Biblioteca</a></li>
                            <li><a href="camaragesell">Cámara Gesell</a></li>
                            <li><a href="contacto">Contacto</a></li>
                            <li><a href="labscomputo">Laboratorios de Computo</a></li>
                            <li><a href="manualSeguridad">Manual de Seguridad</a></li>
                            <li><a href="quienessomos">Quiénes Somos</a></li>
                            <li><a href="reglamentos">Reglamentos</a></li>
                            <li><a href="salasjuiciooral">Salas de Juicios Orales</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- ======= End Header ======= -->

    <!-- Espacio para compensar encabezado fijo -->
    <div class="d-none d-lg-block">
        <br><br><br><br><br><br>
    </div>

    <!-- ======= Main ======= -->
    <main id="main">
        @yield('content')
    </main>

    <!-- ======= Hero ======= -->
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0,0,128,0.8), rgba(0,0,128,0.8)), url('assets/img/1.jpg') center center / cover no-repeat; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Centro Universitario Hidalguense</h1>
            <h2 class="text-white">"La Sabiduría es Nuestra Fuerza"</h2>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3><span>C</span>entro<br><span>U</span>niversitario<br><span>H</span>idalguense</h3>
                        <p>
                            Boulevard del Minero #305 <br>
                            Colonia Rojo Gómez<br>
                            Pachuca, Hgo.<br>
                            C.P. 42030<br>
                            <strong><i class="icofont-phone"></i></strong> 771 719 5300<br>
                            <strong><i class="icofont-phone"></i></strong> 771 719 5301<br>
                            <strong><i class="icofont-envelope"></i></strong> promocion@cuh.mx<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces útiles</h4>
                        <ul>
                            <li><i class="bx bx-home"></i> <a href="/">Inicio</a></li>
                            <li><i class="bx bx-award"></i> <a href="becaspreparatoria">Becas Preparatoria</a></li>
                            <li><i class="bx bx-award"></i> <a href="becaslicenciatura">Becas Licenciatura</a></li>
                            <li><i class="bx bx-award"></i> <a href="becasposgrado">Becas Posgrado</a></li>
                            <li><i class="bx bx-book-open"></i> <a href="preparatoria">Oferta Educativa Preparatoria</a></li>
                            <li><i class="bx bx-book"></i> <a href="licenciatura">Oferta Educativa Licenciatura</a></li>
                            <li><i class="bx bx-briefcase"></i> <a href="posgrado">Oferta Educativa Posgrado</a></li>
                            <li><i class="bx bx-user-voice"></i> <a href="doctorado">Oferta Educativa Doctorado</a></li>
                            <li><i class="bx bx-desktop"></i> <a href="/portal/">Portal Escolar</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestros <br> servicios</h4>
                        <ul>
                            <li><i class="bx bx-chalkboard"></i> <a href="aulasmultimedia">Aulas Multimedia</a></li>
                            <li><i class="bx bx-book"></i> <a href="biblioteca">Biblioteca</a></li>
                            <li><i class="bx bx-food-menu"></i> <a href="cafeteria">Cafeteria</a></li>
                            <li><i class="bx bx-video-recording"></i> <a href="camaragesell">Cámara Gesell</a></li>
                            <li><i class="bx bx-book-reader"></i> <a href="cursosdeeducacioncontinua">Cursos de Educación Continua</a></li>
                            <li><i class="bx bx-car"></i> <a href="estacionamiento">Estacionamiento</a></li>
                            <li><i class="bx bx-building-house"></i> <a href="instalacionescomodas">Instalaciones Cómodas</a></li>
                            <li><i class="bx bx-laptop"></i> <a href="labscomputo">Laboratorios de Computo</a></li>
                            <li><i class="bx bx-microphone"></i> <a href="salasjuiciooral">Salas de Juicios Orales</a></li>
                            <li><i class="bx bx-building"></i> <a href="sedeegel">Sede Egel</a></li>
                            <li><i class="bx bx-task"></i> <a href="vocacion-cuh">Test Vocacional</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestras Redes Sociales</h4>
                        <p>Síguenos en:</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/CUH.oficial/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/cuh_oficial/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCvwP7Kkw4XtimtUlXC3jVjQ/featured" class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                        <br />
                        <div class="containerMap">
                            <iframe class="responsive-iframeMap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14984.87856930391!2d-98.7515605!3d20.1248823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d10a032d4ddb1b%3A0xf397144c38bcb070!2sCentro%20Universitario%20Hidalguense!5e0!3m2!1ses-419!2smx!4v1687368298938!5m2!1ses-419!2smx" width="450" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                Copyright &copy; <strong><span>Centro Universitario Hidalguense</span></strong>. Derechos reservados.
            </div>
        </div>

        <!-- ===== MENÚ FLOTANTE OPCIÓN 1 ===== -->
        <div class="floating-menu">
            <button class="menu-toggle">
                <i class="fas fa-comments"></i>
                <span class="tooltip-text">¿Necesitas ayuda? Contáctanos</span>
            </button>
            <div class="menu-items" id="menuItems">
                <a href="https://api.whatsapp.com/send?phone=7711392240" class="menu-item" target="_blank">
                    <i class="fab fa-whatsapp whatsapp"></i>
                    <span>WhatsApp General</span>
                </a>
                <a href="https://api.whatsapp.com/send?phone=7712368557" class="menu-item" target="_blank">
                    <i class="fas fa-graduation-cap educacion"></i>
                    <span>Educación Continua</span>
                </a>
                <a href="https://www.facebook.com/CUH.oficial" class="menu-item" target="_blank">
                    <i class="fab fa-facebook-f facebook"></i>
                    <span>Facebook</span>
                </a>
                <a href="https://www.instagram.com/cuh_oficial/" class="menu-item" target="_blank">
                    <i class="fab fa-instagram instagram"></i>
                    <span>Instagram</span>
                </a>
                <a href="https://www.tiktok.com/@cuhoficial" class="menu-item" target="_blank">
                    <i class="fab fa-tiktok tiktok"></i>
                    <span>TikTok</span>
                </a>
            </div>
        </div>
    </footer>

    <!-- Botón volver arriba -->
    <a href="#" class="back-to-top"><i class='bx bx-up-arrow-circle'></i></a>

    <!-- SCRIPTS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- SCRIPT DEL MENÚ FLOTANTE OPCIÓN 1 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.querySelector('.menu-toggle');
            const menuItems = document.getElementById('menuItems');

            if (toggleBtn && menuItems) {
                toggleBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    menuItems.classList.toggle('show');
                });

                // Cerrar menú al hacer click fuera
                document.addEventListener('click', function() {
                    menuItems.classList.remove('show');
                });

                // Prevenir que el click en el menú lo cierre
                menuItems.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        });
    </script>
</body>

</html>