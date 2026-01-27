@extends('layouts.pagina')

@section('content')
    <link href="assets/css/welcom.css" rel="stylesheet">
    <link href="assets/css/videos.css" rel="stylesheet">

    <!-- ======= Contenido Combinado ======= -->
    <div>
        <!-- Carruseles -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Primer item del carrusel: imagen de CUH -->
                <div class="carousel-item active" data-interval="3000">
                    <div class="d-none d-lg-block">
                        <div class="button-container1Chic">
                            <img class="img-fluid" alt="Responsive image" src="assets/img/portada-inicial-2.jpg" id="imgCarousel1">
                            <center>
                                <a href="https://www.youtube.com/watch?v=f822bxAFhEc" target="_blank" class="btn-watch-video">
                                    Ver Video <i class="icofont-play-alt-2"></i>
                                </a>
                            </center>
                        </div>
                    </div>
                    <div class="d-lg-none">
                        <br /><br /><br />
                        <div class="button-container2Chic">
                            <img class="img-fluid" alt="Responsive image" src="assets/img/celular-portada.jpg" id="imgCarousel2">
                            <center>
                                <a href="https://www.youtube.com/watch?v=f822bxAFhEc" target="_blank" class="btn-watch-video">
                                    Ver Video <i class="icofont-play-alt-2"></i>
                                </a>
                            </center>
                        </div>
                        <br />
                    </div>
                </div>

                <!-- Segundo item del carrusel: Doctorado -->
                <div class="carousel-item" data-interval="3000">
                    <div class="d-none d-lg-block">
                        <img class="img-fluid" alt="Responsive image" src="assets/img/Doctorado/BannerDoctorado1.webp">
                    </div>
                    <div class="d-lg-none">
                        <br /><br /><br />
                        <img class="img-fluid" alt="Responsive image" src="assets/img/Doctorado/BannerDoctorado2.webp">
                        <br /><br /><br />
                    </div>
                </div>

                <!-- Tercer item del carrusel: Banner Egel -->
                <div class="carousel-item" data-interval="3000">
                    <div class="d-none d-lg-block">
                        <img class="img-fluid" alt="Responsive image" style="width: 100%; height: 60%;" src="assets/img/BannerEG-artguru.png">
                    </div>
                    <div class="d-lg-none">
                        <br /><br /><br />
                        <img class="img-fluid" alt="Responsive image" src="assets/img/BannerEP1.jpg">
                    </div>
                </div>

                <!-- Cuarto item del carrusel: Banner Revista Codex -->
                <div class="carousel-item" data-interval="3000">
                    <div class="d-none d-lg-block">
                        <img class="img-fluid" alt="Responsive image" src="assets/img/banercodex.png">
                    </div>
                    <div class="d-lg-none">
                        <br /><br /><br />
                        <img class="img-fluid" alt="Responsive image" src="assets/img/bannermoviles.png">
                        <br /><br /><br />
                    </div>
                </div>

                <!-- Quinto item del carrusel: imagen tigrillos -->
                <div class="carousel-item" data-interval="3000">
                    <div class="d-none d-lg-block">
                        <img class="img-fluid" alt="Responsive image" src="assets/img/tigrillos.jpg">
                    </div>
                    <div class="d-lg-none">
                        <br /><br /><br />
                        <img class="img-fluid" alt="Responsive image" src="assets/img/tigrillos-fondo.jpg">
                        <br /><br /><br />
                    </div>
                </div>

                <!-- Sexto item del carrusel: Test Vocacional -->
                <div class="carousel-item" data-interval="3000">
                    <div class="d-none d-lg-block">
                        <img class="img-fluid" alt="Responsive image" style="width: 100%; height: 60%;" src="assets/img/Banner/Test VOCACIONAL -02.jpg">
                    </div>
                    <div class="d-lg-none">
                        <br /><br /><br />
                        <img class="img-fluid" alt="Responsive image" src="assets/img/Banner/Test VOCACIONAL -03.jpg">
                    </div>
                </div>

                <!-- Séptimo item del carrusel: Financiamiento -->
                <div class="carousel-item" data-interval="3000">
                    <div class="d-none d-lg-block">
                        <div class="button-container1Grand">
                            <img class="img-fluid" alt="Responsive image" src="assets/img/carousel1.jpg" id="imgCarousel3">
                            <center>
                                <a href="{{ asset('assets/pdf/InformacionIHFES2023.pdf') }}" target="_blank">Ver PDF</a>
                            </center>
                        </div>
                    </div>
                    <div class="d-lg-none">
                        <br /><br /><br />
                        <div class="button-container2Grand">
                            <img class="img-fluid" alt="Responsive image" src="assets/img/webPortal.jpg" id="imgCarousel4">
                            <center>
                                <a href="{{ asset('assets/pdf/InformacionIHFES2023.pdf') }}" target="_blank">Ver PDF</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controles de Carrusel -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- ======= Sección para iconos ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
                        <img src="assets/img/logos/escudo_de_hidalgo.png" width="60" height="60" class="img-fluid" alt="Escudo de Hidalgo">
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
                        <img src="assets/img/logos/centro_universitario_hidalguense.png" width="130" height="130" class="img-fluid" alt="Centro Universitario Hidalguense" data-toggle="modal" data-target="#cuh">
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
                        <img src="assets/img/logos/gobierno_del_estado_de_hidalgo.png" width="150" height="150" class="img-fluid" alt="Gobierno del Estado de Hidalgo">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/logos/directorio.png" width="150" height="150" class="img-fluid" alt="Directorio" data-toggle="modal" data-target="#directorio">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/logos/graduacion.png" width="200" height="200" class="img-fluid" alt="Graduación" data-toggle="modal" data-target="#graduacion">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/logos/mensaje_director.png" width="230" height="230" class="img-fluid" alt="Mensaje del Director" data-toggle="modal" data-target="#mensajedir">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/logos/modelo.png" width="90" height="90" class="img-fluid" alt="Modelo" data-toggle="modal" data-target="#modelo">
                    </div>
                    <div class="col-lg-6 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="assets/img/licenciatura/rvoe_lic.pdf" target="_blank">
                            <img src="assets/img/logos/rvoe_licenciaturas.png" width="170" height="170" class="img-fluid" alt="RVOE Licenciaturas">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="assets/img/posgrado/rvoe_pos.pdf" target="_blank">
                            <img src="assets/img/logos/rvoe_posgrados.png" width="170" height="170" class="img-fluid" alt="RVOE Posgrados">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal historia CUH -->
        <div class="modal fade" id="cuh" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">RESEÑA HISTÓRICA DE NUESTRA INSTITUCIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p align="justify">
                            El surgimiento del Centro Universitario Hidalguense se deriva de la creación de la preparatoria 20 de noviembre, la cual inició actividades en 1996, hoy llamada Preparatoria del Centro Universitario Hidalguense. Dicha institución comenzó con una incorporación al Instituto Politécnico Nacional (IPN), y posteriormente con la Dirección General de Educación Tecnológica Industrial (DGTI). La preparatoria sigue en funcionamiento y a la fecha se alcanzan más de 4100 egresados.
                        </p>
                        <p align="justify">
                            Durante varios años se trabajó en el proyecto del Centro Universitario Hidalguense para obtener los registros de validez oficial y abrir sus puertas a estudiantes egresados de bachillerato con deseos de continuar sus estudios superiores en una institución que pudiera ofrecer la facilidad de trabajar y estudiar al mismo tiempo, con la calidad necesaria para responder a las necesidades de la sociedad contemporánea.
                        </p>
                        <p align="justify">
                            El 19 de agosto de 2002, el Centro Universitario Hidalguense comenzó sus actividades académicas con las licenciaturas en Administración y Sistemas Computacionales, Contaduría y Sistemas Fiscales, Derecho y Psicología, iniciando con 144 alumnos.
                        </p>
                        <p align="justify">
                            En 2014 se constituye Posgrado Centro Universitario Hidalguense como institución de Nivel Superior, bajo el acuerdo 279 emitido por la Secretaría de Educación Pública y regulada por el entonces Instituto de Educación Media Superior y Superior (IHEMSyS).
                        </p>
                        <p align="justify">
                            Con una población estudiantil de 99 alumnos como grupo 1, los cuales se asignan a las Maestrías de: Finanzas, Administración de Negocios, Derecho Civil, Derecho Penal, Formación Docente y Estrategias de Intervención en Problemas de Aprendizaje. Lo anterior bajo la Dirección General del Ing. Santiago Meda Cancino y la Mtra. Norma Sofía Beltrán Rodríguez como Directora de Posgrado, en la sede ubicada en Boulevard del Minero #305, Col Rojo Gómez, la cual contaba únicamente con 9 aulas, biblioteca, laboratorio de cómputo y sala de usos múltiples, en horario sabatino de 7:00 a.m. a 16:00 hrs.
                        </p>
                        <p align="justify">
                            Actualmente el nivel de posgrado cuenta con una matrícula estudiantil de 588 alumnos de los cuales 321 son egresados, contando ya con 14 alumnos titulados.
                        </p>
                        <p align="justify">
                            Una plantilla docente altamente calificada, con formación de Maestría, Doctorado y Pos-Doctorado en las áreas acorde a las Maestrías que ofrece Posgrado Centro Universitario Hidalguense.
                        </p>
                        <p align="justify">
                            En 2016 estuvo pletórico de buenas noticias, se integra a la oferta educativa la Maestría en Derecho Procesal Penal Acusatorio para estar a la vanguardia ante la demanda que la sociedad exige. Además, se incluyó la Licenciatura en Ciencias de la Educación, así como la Ingeniería en Sistemas Computacionales, ampliando las opciones en el Centro Universitario Hidalguense para la juventud hidalguense que desee continuar sus estudios de nivel superior y posgrado. En este mismo año, se estrena la Sala Magna de Juicios Orales y la Cámara de Gesell, así como nuevas aulas totalmente equipadas para el desarrollo del aprendizaje.
                        </p>
                        <p align="justify">
                            A finales de 2017 se integra a la Dirección de Posgrado Centro Universitario Hidalguense la Mtra. Luz María Rosales Vázquez quién junto con su equipo de trabajo y el Ing. Santiago Meda Cancino como timonel, todos comprometidos con la institución, brindan servicio de calidad y calidez.
                        </p>
                        <p align="justify">
                            En 2018 el Centro Universitario Hidalguense está por cumplir su XVI aniversario y continúa con el compromiso de formar Profesionales integrales, proyectados al futuro, en la búsqueda del desarrollo del Estado de Hidalgo a través de lo establecido en la Misión y en su Visión. A la fecha nuestra institución ha cumplido entregando a la sociedad 1,958 nuevos profesionistas, de los cuales 924 han recibido su Título y Cedula Profesional Federal, lo que representa un 47 % de alumnos titulados.
                        </p>
                        <p align="justify">
                            Hoy día sin duda una de las mejores opciones en el ámbito educativo en el Estado de Hidalgo.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal modelo CUH -->
        <div class="modal fade" id="modelo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">MODELO EDUCATIVO</h5>
                    </div>
                    <div class="modal-body">
                        <p>
                            Nuestro modelo de educación se orienta a trabajadores y estudiantes como una alternativa de formación integral y de estudios profesionales de manera intensiva, dinámica y flexible.
                        </p>
                        <p>
                            Este modelo educativo establece un sistema sinérgico de enseñanza-aprendizaje de forma presencial, impartido en un plan bimestral que permite al trabajador estudiar y al estudiante trabajar.
                        </p>
                        <p>
                            Se promueven y desarrollan diversos programas académicos en vinculación con diversos métodos pedagógicos y tecnológicos, lo que permite una óptima formación profesional en el estudiante.
                        </p>
                        <p>
                            Dicho modelo impulsa la utilidad de variadas técnicas de estudio, procesos de investigación, así como la casuística propia de cada disciplina o área de conocimiento, generando aprendizajes significativos en nuestros estudiantes.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Mensaje Director -->
        <div class="modal fade" id="mensajedir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">MENSAJE DEL DIRECTOR GENERAL</h5>
                    </div>
                    <div class="modal-body">
                        <p align="justify">
                            Bienvenidos al nuevo portal de internet de nuestra Institución. Es un espacio que hemos adecuado para satisfacer las necesidades de comunicación de nuestra comunidad universitaria. De esta forma alumnos, catedráticos y personal administrativo tendremos el canal adecuado para interactuar y tener conocimiento actual del acontecer de nuestra institución.
                        </p>
                        <p align="justify">
                            A nuestros visitantes este será un canal para que conozcan la oferta educativa de nuestra Institución y de esta forma puedan tomar una mejor decisión en un paso tan importante en sus vidas como lo son sus estudios. Contamos con un interesante programa de apoyo financiero para alumnos de nuevo ingreso, por lo que los invito a conocer físicamente nuestras instalaciones y preguntar por los convenios que tenemos con diferentes instituciones.
                        </p>
                        <p align="justify">
                            De igual forma estamos comprometidos en ofrecer infraestructura de calidad para facilitar el proceso de enseñanza-aprendizaje. En el recorrido por el portal podrán ver dentro de la liga de "Servicios", las áreas que han sido acopladas para fines específicos como lo son la biblioteca, los centros de cómputo y el aula "Cámara Gessell", entre otros.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Directorio -->
        <div class="modal fade" id="directorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">DIRECTORIO</h5>
                    </div>
                    <div class="modal-body">
                        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
                            <li>
                                <a data-toggle="collapse" class="collapsed" href="#faq1">PREPARATORIA <i class="icofont-simple-up"></i></a>
                                <div id="faq1" class="collapse" data-parent=".faq-list">
                                    <br>
                                    <p align="justify"><strong>Coordinadora General:</strong> Lic. Erica Islas Cortés</p>
                                    <p align="justify"><strong>Coordinadora turno vespertino y sabatino:</strong> Lic. Delia Lizeth Bautista Hernandez</p>
                                    <p align="justify"><strong>Departamento de finanzas:</strong> Tec. Alejandra Ortega Larios</p>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#faq2" class="collapsed">LICENCIATURA <i class="icofont-simple-up"></i></a>
                                <div id="faq2" class="collapse" data-parent=".faq-list">
                                    <br>
                                    <p align="justify"><strong>Dirección General:</strong> Mtro. Ing. Santiago Meda Cancino</p>
                                    <p align="justify"><strong>Dirección Académica:</strong> Lic. Fredy Iván Licona Cruz</p>
                                    <p align="justify"><strong>Asistente de coordinación General:</strong> Psic. Moises Miguel Monroy Areu</p>
                                    <p align="justify"><strong>Coordinación de Derecho:</strong> Lic. Daniela Mota Simón</p>
                                    <p align="justify"><strong>Coordinación de Administración:</strong> Mtro. Joel Alberto Acosta Delgadillo</p>
                                    <p align="justify"><strong>Coordinación de Contaduría en Sistemas Fiscales:</strong> Mtro. Joel Alberto Acosta Delgadillo</p>
                                    <p align="justify"><strong>Coordinación de Ciencias de la Educación:</strong> Lic. Abigali Villagomez Mendoza</p>
                                    <p align="justify"><strong>Coordinación de Psicología:</strong> Psic. Daniela Oliver Sánchez</p>
                                    <p align="justify"><strong>Coordinación de Sistemas Computacionales:</strong> Ing. Alejandro Acosta Losada</p>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#faq3" class="collapsed">POSGRADO <i class="icofont-simple-up"></i></a>
                                <div id="faq3" class="collapse" data-parent=".faq-list">
                                    <br>
                                    <p align="justify"><strong>Directora de Maestrías:</strong> Psic. Rosa Angélica Estrada Novales</p>
                                    <p align="justify"><strong>Asistente de Dirección de Maestrías:</strong> Mtra. Rebeca Hernández Cruz</p>
                                    <p align="justify"><strong>Coordinación Maestrías en Educación:</strong> Mtra. Maria Isabel Rodriguez Jarillo</p>
                                    <p align="justify"><strong>Coordinación Maestrías Jurídicas:</strong> Lic. Nancy González Valencia</p>
                                    <p align="justify"><strong>Coordinación Maestrías Financieras-Administrativas:</strong> Mtra. Elizabeth Domínguez González</p>
                                    <p align="justify"><strong>Coordinación de titulación:</strong> Mtra. Jazmín Pérez Castillo</p>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" class="collapsed" href="#faq4">DOCTORADO <i class="icofont-simple-up"></i></a>
                                <div id="faq4" class="collapse" data-parent=".faq-list">
                                    <br>
                                    <p align="justify"><strong>Dirección de doctorados:</strong> Mtro. José de Jesús Landa López</p>
                                    <p align="justify"><strong>Coordinación académica de doctorados:</strong> Lic. Yessenia Ramírez Gómez</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal graduación -->
        <div class="modal fade" id="graduacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">CEREMONIA DE GRADUACIÓN</h5>
                    </div>
                    <div class="modal-body">
                        <p align="justify">
                            Después de aprobar el total de las asignaturas de licenciatura, así como el Servicio Social, entre otros requerimientos, el alumno es protagonista de la ceremonia de graduación, al igual que sus demás compañeros de generación.
                        </p>
                        <p align="justify">
                            Cada evento de este tipo, de gran significado para egresados y sus familiares, es presidido por directivos, personal administrativo y docentes del plantel educativo. Asimismo, resalta la intervención de los Padrinos de Generación y otras personalidades invitadas.
                        </p>
                        <p align="justify">
                            Al hacer uso de la palabra, el ingeniero Santiago Meda Cancino, director general del Centro Universitario Hidalguense, enfatiza la labor social dentro y fuera de la institución, correspondiendo a las políticas públicas del Plan Estatal de Desarrollo propuesto por el gobernador Omar Fayad Meneses.
                        </p>
                        <p align="justify">
                            En su discurso pondera la oportunidad que tiene cada uno de los nuevos profesionistas al integrarse al ambiente laboral, comprometiéndose a poner en alto su Alma Mater, actuando así con ética y responsabilidad.
                        </p>
                        <p align="justify">
                            En la misma ceremonia se hace entrega de títulos y cédulas estatal y federal a aquellos que han totalizado el proceso establecido desde las distintas instancias de la Secretaría de Educación Pública de Hidalgo.
                        </p>
                        <p align="justify">
                            A la fecha, del Centro Universitario Hidalguense han egresado más de 2,550 alumnos: Psicología (608), Derecho (861), Contaduría y Sistemas Fiscales (391), Ciencias de la Educación (31), Administración y Sistemas Computacionales (647) e Ingeniería en Sistemas Computacionales (16).
                        </p>
                        <p align="justify">
                            Asimismo, 1,184 alumnos titulados con cédula estatal y federal: Psicología (315), Derecho (434), Contaduría y Sistemas Fiscales (170) y Administración y Sistemas Computacionales (265).
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg btn-block" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Pestañas con Imágenes Destacadas -->
        <div class="tabs-design-container">
            <div class="tabs-design-title">
                <h2>Descubre el Centro Universitario Hidalguense</h2>
                <p>Conoce más sobre nuestra institución, programas académicos y beneficios para estudiantes</p>
            </div>

            <div class="tabs-design-section">
                <div class="card-tabs">
                    <div class="tabs-header">
                        <button class="tab-btn active" data-tab="tab1">Nuestra Institución</button>
                        <button class="tab-btn" data-tab="tab2">Programas Académicos</button>
                        <button class="tab-btn" data-tab="tab3">Beneficios Estudiantiles</button>
                        <button class="tab-btn" data-tab="tab4">Ofertas y Más</button>
                    </div>

                    <!-- PESTAÑA 1: NUESTRA INSTITUCIÓN CON CARRUSEL -->
                    <div class="tab-content active" id="tab1">
                        <div class="tab-content-grid">
                            <div class="tab-image-large carousel-container">
                                <div class="carousel-track">
                                    <div class="carousel-slide active">
                                        <img src="assets/img/Promocion/Curso.webp" alt="Promoción CUH">
                                    </div>
                                    <div class="carousel-slide active">
                                        <img src="assets/img/Principal/Preparatoria.webp" alt="Promoción CUH">
                                    </div>
                                    <div class="carousel-slide active">
                                        <img src="assets/img/Principal/Licenciatura.webp" alt="Promoción CUH">
                                    </div>
                                    <div class="carousel-slide active">
                                        <img src="assets/img/Principal/Maestria.webp" alt="Promoción CUH">
                                    </div>
                                    <div class="carousel-slide">
                                        <img src="assets/img/Promocion/Excel.webp" alt="Promoción CUH">
                                    </div>
                                    <div class="carousel-slide">
                                        <img src="assets/img/Promocion/Emprendimiento.webp" alt="Promoción CUH">
                                    </div>
                                    <div class="carousel-slide">
                                        <img src="assets/img/Promocion/Doctorado.webp" alt="Promoción CUH">
                                    </div>
                                </div>
                                <!-- Flechas -->
                                <button class="carousel-btn prev">❮</button>
                                <button class="carousel-btn next">❯</button>
                                <!-- Puntos -->
                                <div class="carousel-dots">
                                    <span class="dot active" data-slide="0"></span>
                                    <span class="dot" data-slide="1"></span>
                                    <span class="dot" data-slide="2"></span>
                                    <span class="dot" data-slide="3"></span>
                                </div>
                            </div>
                            <div class="tab-content-text">
                                <h3>Centro Universitario Hidalguense</h3>
                                <p>Una institución comprometida con la formación de profesionales integrales, proyectados al futuro, en la búsqueda del desarrollo del Estado de Hidalgo.</p>
                                <div class="highlight-text">
                                    <strong>Fundación:</strong> 2002 | <strong>Estudiantes Egresados:</strong> 2,550+
                                </div>
                                <ul class="feature-list">
                                    <li>Más de 20 años de experiencia educativa</li>
                                    <li>Programas con Reconocimiento de Validez Oficial (RVOE)</li>
                                    <li>Instalaciones modernas y equipadas</li>
                                    <li>Plantilla docente altamente calificada</li>
                                    <li>Vinculación con el sector empresarial</li>
                                    <li>Programas de becas y financiamiento</li>
                                </ul>
                                
                                <!-- Botón de Contacto -->
                                <a href="https://wa.me/5217711392240?text=Hola%20me%20gustaría%20recibir%20información%20sobre%20el%20Centro%20Universitario%20Hidalguense,%20su%20oferta%20educativa%20y%20proceso%20de%20inscripción."
                                target="_blank"
                                class="tabs-btn-primary">
                                📩 Solicita información
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- PESTAÑA 2: PROGRAMAS ACADÉMICOS -->
                    <div class="tab-content" id="tab2">
                        <div class="tab-content-grid">
                            <div>
                                <img src="assets/img/Promocion/Doctorado_11zon.webp" alt="Programas Académicos CUH" class="tab-image-large">
                            </div>
                            <div class="tab-content-text">
                                <h3>Oferta Educativa Completa</h3>
                                <p>Contamos con una amplia gama de programas educativos desde preparatoria hasta posgrado, diseñados para formar profesionales competitivos.</p>

                                <div class="progress-container">
                                    <div class="progress-ring">
                                        <span class="progress-text">95%</span>
                                    </div>
                                    <div class="progress-info">
                                        <p><strong>Tasa de Egresados:</strong> 95% de nuestros estudiantes completan sus estudios</p>
                                        <p><strong>Empleabilidad:</strong> 89% de egresados consiguen empleo en su área</p>
                                    </div>
                                </div>

                                <ul class="feature-list">
                                    <li>Preparatoria con diferentes turnos</li>
                                    <li>6 licenciaturas con RVOE</li>
                                    <li>6 maestrías especializadas</li>
                                    <li>Modelo educativo flexible para trabajadores</li>
                                    <li>Programas actualizados según demandas del mercado</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- PESTAÑA 3: BENEFICIOS ESTUDIANTILES -->
                    <div class="tab-content" id="tab3">
                        <div class="tab-content-grid">
                            <div>
                                <img src="assets/img/Promocion/AcrediBach_11zon.webp" alt="Beneficios Estudiantiles CUH" class="tab-image-large">
                            </div>
                            <div class="tab-content-text">
                                <h3>Ventajas de Estudiar en CUH</h3>
                                <p>Ofrecemos múltiples beneficios para asegurar una experiencia educativa completa y el éxito profesional de nuestros estudiantes.</p>

                                <ul class="feature-list">
                                    <li>Programa de becas y apoyos económicos</li>
                                    <li>Bolsa de trabajo exclusiva para estudiantes y egresados</li>
                                    <li>Servicio social vinculado con empresas e instituciones</li>
                                    <li>Preparación para examen CENEVAL EGEL</li>
                                    <li>Test vocacional para orientación profesional</li>
                                    <li>Ceremonias de graduación y titulación</li>
                                    <li>Acceso a biblioteca y recursos digitales</li>
                                    <li>Actividades extracurriculares y culturales</li>
                                </ul>
                                <!-- Botón de Contacto -->
                                <a href="https://wa.me/5217711392240?text=Hola%20me%20gustaría%20recibir%20información%20sobre%20el%20Centro%20Universitario%20Hidalguense,%20su%20oferta%20educativa%20y%20proceso%20de%20inscripción."
                                target="_blank"
                                class="tabs-btn-primary">
                                📩 Solicita información
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- PESTAÑA 4: CURSOS -->
                    <div class="tab-content" id="tab4">
                        <div class="tab-content-grid">
                            
                            <!-- Imagen del Curso -->
                            <div class="tab-image-large carousel-container">
                                <img src="assets/img/Promocion/595170947.jpg" alt="Curso Excel Inicial CUH" class="tab-image-large">
                            </div>

                            <!-- Información del Curso -->
                            <div class="tab-content-text">
                                <h3>Curso Excel Inicial</h3>

                                <p>Aprende las bases de Excel de manera práctica, ideal para estudiantes y profesionistas que desean mejorar sus habilidades digitales.</p>

                                <ul class="feature-list">
                                    <li><strong>Inicio:</strong> 17 de enero</li>
                                    <li><strong>Finaliza:</strong> 28 de febrero</li>
                                    <li><strong>Días del curso:</strong> 17, 24 y 31 de enero; 7, 14, 21 y 28 de febrero</li>
                                    <li><strong>Total de horas:</strong> 20 horas</li>
                                    <li><strong>Instructor:</strong> Mtro. Juan José Vázquez Retta</li>
                                </ul>

                                <!-- Botón de Contacto -->
                                <a href="https://wa.me/5217712368557?text=Hola%20quiero%20información%20del%20Curso%20de%20Excel%20Inicial"
                                target="_blank" class="tabs-btn-primary">
                                📩 Solicita información
                                </a>

                                <!-- Datos adicionales -->
                                <div class="contact-info">
                                    <p><strong>Educación Continua</strong></p>
                                    <p>📞 7712368557</p>
                                    <p>🌐 www.cuh.edu.mx</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Carrusel de video CON VIDEOS PROPIOS -->
        <div id="carrusel-cuh-container">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
            <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
            <section>
                <div class="swiper video-swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1: Licenciatura -->
                        <div class="swiper-slide">
                            <div class="tarjeta-moderna" data-aos="fade-up">
                                <div class="contenido">
                                    <h1><span class="categoria"><strong>Licenciatura CUH</strong></span></h1>
                                    <h4>Formación Profesional de Excelencia</h4>
                                    <p>Descubre nuestros programas académicos diseñados para formar profesionales competitivos con visión global. <br><br> Contamos con planes de estudio actualizados, profesores con amplia experiencia profesional y vinculación con el sector empresarial.</p>
                                    <div class="meta-info">
                                        <span class="fecha">¡Inscripciones abiertas!</span>
                                        <a href="licenciatura" class="enlace">Conoce nuestras licenciaturas</a>
                                    </div>
                                </div>
                                <div class="video-container">
                                    <video class="cuh-video" controls preload="metadata"
                                        poster="{{ asset('assets/videos/img/Tarjeta4.webp') }}">
                                        <source src="{{ asset('assets/videos/licenciatura-presentacion.mp4') }}" type="video/mp4">
                                        Tu navegador no soporta la reproducción de videos.
                                    </video>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Preparatoria -->
                        <div class="swiper-slide">
                            <div class="tarjeta-moderna" data-aos="fade-up">
                                <div class="contenido">
                                    <h1><span class="categoria"><strong>Preparatoria CUH</strong></span></h1>
                                    <h4>Visita nuestras Instalaciones</h4>
                                    <p>Nuestro modelo educativo está diseñado para ofrecer una formación integral y flexible tanto a trabajadores como a estudiantes. <br><br> Contamos con instalaciones modernas, profesores altamente capacitados y un ambiente que fomenta el desarrollo académico y personal.</p>
                                    <div class="meta-info">
                                        <span class="fecha">¡Agenda tu visita!</span>
                                        <a href="preparatoria" class="enlace">Consulta nuestra Oferta Educativa</a>
                                    </div>
                                </div>
                                <div class="video-container">
                                    <!-- Video propio para preparatoria -->
                                    <video class="cuh-video" controls preload="metadata"
                                        poster="{{ asset('assets/videos/img/imagen1.webp') }}">
                                        
                                        <source src="{{ asset('assets/videos/preparatoria-presentacion.mp4') }}" type="video/mp4">
                                        Tu navegador no soporta la reproducción de videos.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navegación del carrusel -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>

        <!-- Oferta Educativa -->
        <div class="oferta-educativa-container">
            <h2>Oferta Educativa CUH</h2>
            <div class="filters">
                <button class="active" onclick="filterCards('todo')">Todo</button>
                <button onclick="filterCards('preparatoria')">Preparatoria</button>
                <button onclick="filterCards('licenciatura')">Licenciatura</button>
                <button onclick="filterCards('posgrado')">Posgrado</button>
            </div>
            <div class="grid" id="card-grid">
                <div class="card todo preparatoria">
                    <img src="assets/img/prepa/logo.jpg" alt="Preparatoria">
                    <div class="card-content">
                        <h4>Preparatoria</h4>
                        <p>Prepa <strong>CUH</strong></p>
                        <h4><a href="preparatoria" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo licenciatura">
                    <img src="assets/img/licenciatura/logo1.jpg" alt="Licenciatura en Administración y Sistemas Computacionales">
                    <div class="card-content">
                        <h4>Licenciatura en Administración y Sistemas Computacionales</h4>
                        <p><strong>R.V.O.E. SEMSYS 0213102</strong><br>CLAVE: 1314201</p>
                        <h4><a href="licadminysiscom" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo licenciatura">
                    <img src="assets/img/licenciatura/logo2.jpg" alt="Licenciatura en Contaduría y Sistemas Fiscales">
                    <div class="card-content">
                        <h4>Licenciatura en Contaduría y Sistemas Fiscales</h4>
                        <p><strong>R.V.O.E. SEMSYS 0213101</strong><br>CLAVE: 1314101</p>
                        <h4><a href="liccontaysisfis" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo licenciatura">
                    <img src="assets/img/licenciatura/logo3.jpg" alt="Licenciatura en Derecho">
                    <div class="card-content">
                        <h4>Licenciatura en Derecho</h4>
                        <p><strong>R.V.O.E. IHEMSYS 0211103</strong><br>CLAVE: 13140301</p>
                        <h4><a href="licderecho" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo licenciatura">
                    <img src="assets/img/licenciatura/logo6.jpg" alt="Licenciatura en Psicología">
                    <div class="card-content">
                        <h4>Licenciatura en Psicología</h4>
                        <p><strong>R.V.O.E. SEMSYS 0218104</strong><br>CLAVE: 13140401</p>
                        <h4><a href="licpsicologia" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo licenciatura">
                    <img src="assets/img/licenciatura/logo4.jpg" alt="Licenciatura en Ciencias de la Educación">
                    <div class="card-content">
                        <h4>Licenciatura en Ciencias de la Educación</h4>
                        <p><strong>R.V.O.E. SSEMSyS 1513111</strong><br>CLAVE: 13151101</p>
                        <h4><a href="liceducacion" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo licenciatura">
                    <img src="assets/img/licenciatura/logo5.jpg" alt="Ingeniería en Sistemas Computacionales">
                    <div class="card-content">
                        <h4>Ingeniería en Sistemas Computacionales</h4>
                        <p><strong>R.V.O.E. SSEMSyS 1513112</strong><br>CLAVE: 13161201</p>
                        <h4><a href="licsiscom" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo posgrado">
                    <img src="assets/img/posgrado/logo2.jpg" alt="Maestría en Administración de Negocios">
                    <div class="card-content">
                        <h4>Maestría en Administración de Negocios</h4>
                        <p><strong>R.V.O.E. SEMSyS: 1413310</strong><br>CLAVE: 13341001</p>
                        <h4><a href="posadminnegocios" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo posgrado">
                    <img src="assets/img/posgrado/logo3.jpg" alt="Maestría en Derecho Civil">
                    <div class="card-content">
                        <h4>Maestría en Derecho Civil</h4>
                        <p><strong>R.V.O.E. SEMSyS: 1413305</strong><br>CLAVE: 13340501</p>
                        <h4><a href="posderechocivil" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo posgrado">
                    <img src="assets/img/posgrado/logo6.jpg" alt="Maestría en Derecho Procesal Penal Acusatorio">
                    <div class="card-content">
                        <h4>Maestría en Derecho Procesal Penal Acusatorio</h4>
                        <p><strong>R.V.O.E. SEMSyS: 1613313</strong><br>CLAVE: 13341301</p>
                        <h4><a href="posdppa" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo posgrado">
                    <img src="assets/img/posgrado/logo5.jpg" alt="Maestría en Estrategias de Intervención en Problemas de Aprendizaje">
                    <div class="card-content">
                        <h4>Maestría en Estrategias de Intervención en Problemas de Aprendizaje</h4>
                        <p><strong>R.V.O.E. SEMSyS: 1413307</strong><br>CLAVE: 13350701</p>
                        <h4><a href="poseipa" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo posgrado">
                    <img src="assets/img/posgrado/logo1.jpg" alt="Maestría en Finanzas">
                    <div class="card-content">
                        <h4>Maestría en Finanzas</h4>
                        <p><strong>R.V.O.E. SEMSyS: 1413309</strong><br>CLAVE: 13340901</p>
                        <h4><a href="posfinanzas" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>

                <div class="card todo posgrado">
                    <img src="assets/img/posgrado/logo4.jpg" alt="Maestría en Formación Docente">
                    <div class="card-content">
                        <h4>Maestría en Formación Docente</h4>
                        <p><strong>R.V.O.E. SEMSYS: 1413306</strong><br>CLAVE: 13350601</p>
                        <h4><a href="posformaciondocente" style="text-decoration: none; color: white;">Solicita más información</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Inicializar Swiper para el carrusel de videos
            const videoSwiper = new Swiper('.video-swiper', {
            direction: 'horizontal',
            loop: true,
            speed: 800,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true, // si el usuario interactúa, se detiene el autoplay
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                slidesPerView: 1,
                spaceBetween: 20
                },
                768: {
                slidesPerView: 1,
                spaceBetween: 30
                }
            }
            });

            // Pausar todos los videos cuando cambia de slide
            videoSwiper.on('slideChange', function () {
            document.querySelectorAll('.cuh-video').forEach(video => {
                // por si algún elemento con esa clase no es <video>
                if (video && typeof video.pause === 'function') video.pause();
            });
            });

            // Detener autoplay mientras se reproduce un video; reanudar al pausar/terminar
            document.querySelectorAll('.cuh-video').forEach(video => {
            // Asegurar que sea un elemento <video>
            if (!video || typeof video.addEventListener !== 'function') return;

            video.addEventListener('play', () => {
                if (videoSwiper.autoplay) videoSwiper.autoplay.stop();
            });

            video.addEventListener('pause', () => {
                // Solo reanuda si NO hay ningún video reproduciéndose
                const algunoReproduciendo = Array.from(document.querySelectorAll('.cuh-video'))
                .some(v => v && !v.paused && !v.ended);
                if (!algunoReproduciendo && videoSwiper.autoplay) videoSwiper.autoplay.start();
            });

            video.addEventListener('ended', () => {
                if (videoSwiper.autoplay) videoSwiper.autoplay.start();
            });
            });

            // Inicializar AOS
            if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
            }
        });
        </script>
    <script src="{{ asset('assets/js/welcome.js') }}"></script>
    
@endsection