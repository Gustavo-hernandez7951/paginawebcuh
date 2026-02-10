@extends('layouts.pagina')
@section('content')
<link href="assets/css/cursos.css" rel="stylesheet">

<section id="hero" class="d-flex align-items-center fade-in-up" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3 font-weight-bolder text-white">Cursos de Educación Continua</h1>
        <h2 class="text-white">CUH</h2>
    </div>
</section>
<div class="container" data-aos="fade-up">
    <div class="info-section">
        <div class="container text-center">
            <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">¡Nuevos Cursos en el Centro Universitario Hidalguense!</h2>
        </div>
        <p style="text-align: justify; color: #333; font-size: 18px;">
            El Centro Universitario Hidalguense (CUH) está comprometido con la mejora continua de la educación y la preparación de sus estudiantes, docentes y personas ajenas a la comunidad universitaria.
            <br>Para lograr este objetivo, estamos implementando cambios significativos en nuestra oferta de cursos, diseñados para proporcionar una mejor preparación y habilidades relevantes en diversas áreas académicas y profesionales.
            <br>Nuestras aulas multimedia, equipadas con tecnología de vanguardia, ofrecen un entorno ideal para presentaciones interactivas, conferencias virtuales y sesiones de aprendizaje colaborativo.
            <br>Únete a nosotros y aprovecha esta oportunidad para desarrollar tus competencias y enfrentar los desafíos del mundo moderno con confianza y habilidades tecnológicas avanzadas.
        </p>
        <br>
        <p style="text-align: center; font-size: 16px; color: #000080;">
            <strong>¡Inscríbete hoy y da el primer paso hacia tu desarrollo profesional!</strong>
        </p>
    </div>
    <div class="container-fluid">
        <h2 class="text-center" style="color: #000080;">Cursos de educación continua registrate para mayor información</h2>
        <div class="row justify-content-center">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive row">
                <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="text-center">CURSO</th>
                            <th scope="col" class="text-center">ÁREA</th>
                            <th scope="col" class="text-center">NIVEL</th>
                            <th scope="col" class="text-center">MODALIDAD</th>
                            <th scope="col" class="text-center">DIRIGIDO A</th>
                            <th scope="col" class="text-center">COSTO</th>
                            <th scope="col" class="text-center">ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $c)
                            <tr>
                                <th scope="row" class="text-center">{{ $c->nombre_curso }}</th>
                                <td class="text-center">{{ $c->area_curso }}</td>
                                <td class="text-center">{{ $c->nivel_curso }}</td>
                                <td class="text-center">{{ $c->modalidad_curso }}</td>
                                <td class="text-center">{{ $c->dirigido_a }}</td>
                                <td class="text-center"></td>
                                <td class="text-center">
                                    <div class="form-row">
                                        <div class="col-md-12 col-lg-12 form-group">
                                            <button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#grupos{{ $c->idcurso }}">
                                                <i class="fas fa-user-check"></i> INFORMACIÓN
                                            </button>
                                        </div>
                                        <div class="col-md-12 col-lg-12 form-group">
                                            <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#registro{{ $c->idcurso }}">
                                                <i class="fas fa-user-check"></i> REGISTRARSE
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Sección de imágenes con texto: Cursos Vigentes -->
    <div class="row mt-5">
        <div class="col-lg-12 mt-4">
            <h2 class="text-center" style="color: #000080;"><strong>¡Inscríbete! Cursos Vigentes CUH 2026</strong></h2>
            <br><br>

            <div class="cards-container">

                <!-- Curso 1: Emprendimiento Formal en México -->
                <div class="card course-image-card">
                    <!-- Cambia el nombre del archivo si es distinto -->
                    <img src="assets/img/Cursos/EmprendimientoFormal.webp" class="card-img-top" alt="Curso Emprendimiento Formal en México">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Emprendimiento Formal en México</strong></h4>
                        <p class="card-text">
                            🚀 Emprende de manera formal y haz crecer tu negocio en México 🇲🇽<br>
                            ¿Tienes una idea de negocio o ya emprendiste y quieres hacerlo legal, rentable y sostenible?
                            <br><br>

                            Te guiamos paso a paso para:<br>
                            ✅ Constituir tu empresa conforme a la ley<br>
                            ✅ Aprender sobre el régimen fiscal SAS<br>
                            ✅ Conocer obligaciones fiscales y laborales<br>
                            ✅ Desarrollar un modelo de negocio sólido<br><br>

                            🙌🏻 Uno de nuestros objetivos es que al finalizar el curso tu proyecto esté listo para darse de alta ante el SAT (sujeto a términos y condiciones).<br>
                            🎯 Dirigido a emprendedores, profesionistas y pequeños empresarios.<br><br>

                            🧑🏻‍🎓 Entrega de constancias DC-3 avalada por la STPS y constancia académica.<br>
                            📲 Más información por WhatsApp:
                            <a href="https://wa.me/5217712368557" target="_blank" rel="noopener">771 236 8557</a><br>
                            ✨ Formaliza hoy tu emprendimiento y construye el futuro de tu negocio.
                        </p>
                    </div>
                </div>

                <!-- Curso 2: Preparación Examen de Admisión Educación Básica -->
                <div class="card course-image-card">
                    <!-- Cambia el nombre del archivo si es distinto -->
                    <img src="assets/img/Cursos/ExamenAdmisionEducacionBasica.webp" class="card-img-top" alt="Curso Preparación Examen de Admisión a Educación Básica 2026-2027">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Preparación para el Examen de Admisión a la Educación Básica 2026–2027</strong></h4>
                        <p class="card-text">
                            Curso diseñado conforme a los lineamientos oficiales de <strong>USICAMM</strong>, dirigido a aspirantes que buscan
                            mejorar su desempeño y aumentar sus posibilidades de obtener un nombramiento docente.
                            <br><br>

                            📘 El curso incluye:<br>
                            ✔️ Contenidos alineados a la estructura oficial del examen<br>
                            ✔️ <strong>Simulador de examen</strong> (diagnóstico y práctica real)<br>
                            ✔️ Estrategias de resolución y manejo del tiempo<br>
                            ✔️ Acompañamiento académico especializado<br>
                            ✔️ Modalidad presencial<br><br>

                            🗓️ <strong>Fecha de inicio:</strong> 28 de febrero<br>
                            🕗 <strong>Horario:</strong> Sábados de 8:00 a 12:00 hrs<br>
                            📍 <strong>Sede:</strong> Centro Universitario Hidalguense<br>
                            ⚠️ Inscripciones limitadas<br><br>

                            📲 Informes por WhatsApp:
                            <a href="https://wa.me/5217711392240" target="_blank" rel="noopener">771 139 2240</a><br>
                            Prepárate con base en criterios oficiales, evalúate con un simulador real y fortalece tu oportunidad de ingreso.
                        </p>
                    </div>
                </div>

                <!-- Curso 3: Excel Inicial con IA -->
                <div class="card course-image-card">
                    <!-- Cambia el nombre del archivo si es distinto -->
                    <img src="assets/img/Cursos/ExcelInicialIA.webp" class="card-img-top" alt="Curso Excel Inicial con IA">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Excel Inicial con IA</strong></h4>
                        <p class="card-text">
                            🙌🏻 ¡Inicia el 2026 cumpliendo tus metas profesionales! 🚀<br>
                            Este 17 de enero arranca nuestro curso diseñado para quienes desean dominar Excel desde cero
                            y potenciarlo con inteligencia artificial.
                            <br><br>

                            📅 <strong>Modalidad:</strong> Presencial (todos los sábados)<br>
                            ⏰ <strong>Horario:</strong> 11:00 a.m. – 2:00 p.m.<br>
                            📍 <strong>Ubicación:</strong> Instalaciones del Centro Universitario Hidalguense<br><br>

                            Al finalizar recibirás:<br>
                            ✅ Constancia STPS DC-3 de habilidades laborales<br>
                            ✅ Constancia académica<br><br>

                            Aprenderás de forma práctica, clara y dinámica, con habilidades aplicables desde la primera clase.
                            Ideal para principiantes, actualización o integración de IA al trabajo diario.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Cursos Terminados -->
    <div class="row mt-5">
        <div class="col-lg-12 mt-4">
            <h2 class="text-center" style="color: #000080;">Nuestros Ultimos Cursos</h2>
            <h3 class="text-center" style="color: #000080;">¡Prepara tu futuro profesional con confianza y aumenta tus oportunidades de éxito!</h3>
            <br><br>

            <div class="cards-container">

                <!-- Curso Terminado 1 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/imagen123.webp" class="card-img-top" alt="ACREDI BACH">
                    <div class="card-body">
                        <h4 class="card-title"><strong>ACREDI BACH</strong></h4>
                        <p class="card-text">
                            ¡Acredita tu preparatoria en un solo Examen! 🎉
                            <br>
                            ¿Sabías que puedes obtener tu certificado de bachillerato en solo unos meses? 📚💪 ¡Es cierto! La preparatoria del Centro Universitario Hidalguense lanza el curso de Acredi-bach para que puedas prepararte y aprobar tu examen Ceneval.
                            <br>
                            ¿Quiénes pueden participar? 🤔
                        </p>
                        <ul>
                            <li>Mayores de 15 años</li>
                            <li>Personas que desean obtener su certificado de bachillerato</li>
                            <li>Quienes buscan una oportunidad para mejorar su educación y futuro laboral</li>
                        </ul>
                    </div>
                </div>

                <!-- Curso Terminado 2 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Excel.webp" class="card-img-top" alt="Curso Intermedio en Excel">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso Intermedio en Excel</strong></h4>
                        <p class="card-text">
                            El próximo 9 de julio a las 19:00 Hrs., tendrá lugar nuestra Masterclass de Excel Intermedio donde podrás aprender técnicas avanzadas, trucos y herramientas que te ayudarán a optimizar tu trabajo y a destacar en el manejo de datos.
                            <br>
                            ¡No dejes pasar esta oportunidad! Regístrate ahora y asegura tu lugar en esta sesión que sin duda marcará la diferencia en tu manejo de Excel.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 3 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso1.webp" class="card-img-top" alt="Introduccion a la IA">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Introduccion a la IA</strong></h4>
                        <p class="card-text">
                            Este curso está diseñado para brindarte una comprensión básica y práctica de la Inteligencia Artificial. A lo largo del curso, explorarás los principios fundamentales de la IA, incluyendo el aprendizaje automático, la automatización, la visión por computadora y el procesamiento del lenguaje natural. A través de ejemplos y ejercicios interactivos, aprenderás cómo se aplican estas tecnologías en el mundo real, desde asistentes virtuales hasta sistemas de recomendación.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 4 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso2.webp" class="card-img-top" alt="Primeros Auxilios Psicológicos">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Primeros Auxilios Psicológicos</strong></h4>
                        <p class="card-text">
                            Este curso está diseñado para proporcionarte las herramientas necesarias para ofrecer apoyo emocional en situaciones de crisis. Aprenderás a identificar y manejar reacciones psicológicas frente a eventos traumáticos, como accidentes, duelos, desastres naturales o situaciones de violencia. A través de enfoques prácticos y empatía, te capacitaremos en técnicas de intervención para brindar calma, escuchar activamente y facilitar el acceso a recursos profesionales.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 5 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso3.webp" class="card-img-top" alt="Amor y Relaciones Codependientes">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Amor y Relaciones Codependientes</strong></h4>
                        <p class="card-text">
                            Este curso está diseñado para ayudarte a comprender y superar las dinámicas de las relaciones codependientes. A lo largo del curso, explorarás qué es la codependencia, cómo se manifiesta en las relaciones amorosas y cómo identificar patrones dañinos que afectan el bienestar emocional. Aprenderás herramientas para establecer límites saludables, mejorar la autoestima y fomentar relaciones más equilibradas y conscientes.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 6 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso4.webp" class="card-img-top" alt="Aprendizaje basado en problemas y/o proyectos">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso - Taller Aprendizaje basado en problemas y/o proyectos</strong></h4>
                        <p class="card-text">
                            Este curso te enseñará a abordar problemas reales y trabajar en proyectos prácticos, desarrollando habilidades como el pensamiento crítico, la creatividad y la gestión de proyectos. A través de una metodología interactiva y colaborativa, estarás preparado para enfrentar desafíos del mundo profesional.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 7 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso5.webp" class="card-img-top" alt="Taller Inteligencia Artificial para docente">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Taller Inteligencia Artificial para docente</strong></h4>
                        <p class="card-text">
                            Este taller está especialmente diseñado para introducir a los docentes en el fascinante mundo de la Inteligencia Artificial (IA) y cómo puede transformarse en una herramienta poderosa en el aula. A lo largo de las sesiones, aprenderás los principios básicos de la IA, incluyendo el aprendizaje automático, la automatización y la inteligencia adaptativa, y cómo aplicar estas tecnologías en la enseñanza y el aprendizaje. Además, exploraremos herramientas prácticas que pueden mejorar la gestión del aula, personalizar la experiencia educativa y optimizar el rendimiento de los estudiantes.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 8 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso7.webp" class="card-img-top" alt="Curso - Taller Nueva Escuela Mexicana">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso - Taller Nueva Escuela Mexicana</strong></h4>
                        <p class="card-text">
                            Este curso-taller está orientado a la implementación y adaptación de los principios y enfoques de la Nueva Escuela Mexicana en el ámbito educativo. Los participantes explorarán estrategias pedagógicas innovadoras, centradas en el desarrollo integral de los estudiantes, la inclusión, la equidad y el respeto a la diversidad cultural.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 9 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso8.webp" class="card-img-top" alt="Curso Inteligencia Emocional">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso Inteligencia Emocional</strong></h4>
                        <p class="card-text">
                            A lo largo de las sesiones, aprenderás a identificar tus emociones, entender su impacto en tu comportamiento y cómo regularlas para mejorar tu bienestar y relaciones interpersonales. Con un enfoque práctico, descubrirás cómo aplicar la empatía, la autorregulación y la toma de decisiones conscientes en tu vida diaria, tanto en el ámbito personal como profesional.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 10 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso9.webp" class="card-img-top" alt="Curso Intermedio en Excel">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso Intermedio en Excel Para el uso de funciones</strong></h4>
                        <p class="card-text">
                            Este curso está diseñado para llevar tus habilidades en Excel al siguiente nivel. A través de lecciones prácticas, aprenderás a manejar funciones avanzadas, como fórmulas complejas, tablas dinámicas, gráficos interactivos y análisis de datos. Al finalizar el curso, estarás capacitado para gestionar grandes volúmenes de datos y tomar decisiones basadas en análisis detallados.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 11 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curso10.webp" class="card-img-top" alt="Curso Formacion en Educacion Sexual Integral">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso Formacion en Educacion Sexual Integral</strong></h4>
                        <p class="card-text">
                            Este curso está diseñado para proporcionar a los participantes los conocimientos y herramientas necesarias para abordar la educación sexual de manera integral, respetuosa e inclusiva. A lo largo de las sesiones, se explorarán temas clave como la identidad de género, la salud sexual y reproductiva, las relaciones afectivas, el consentimiento y la prevención de riesgos.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 12 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curs11.webp" class="card-img-top" alt="Curso Primeros Auxilios Psicológicos">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso Primeros Auxilios Psicológicos</strong></h4>
                        <p class="card-text">
                            Este curso está diseñado para brindarte los conocimientos esenciales para actuar de manera rápida y efectiva en situaciones de emergencia. Aprenderás a identificar y manejar condiciones de salud críticas, como accidentes, desmayos, hemorragias, heridas, fracturas y más. A través de prácticas y simulaciones, te entrenaremos en técnicas básicas de primeros auxilios, reanimación cardiopulmonar (RCP) y el uso correcto de desfibriladores automáticos (DEA).
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 13 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Curs12.webp" class="card-img-top" alt="Curso Preparacion para Examen de Oposición SEP-H">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso Preparacion para Examen de Oposición SEP-H</strong></h4>
                        <p class="card-text">
                            Este curso está diseñado para ayudarte a prepararte de manera integral para el Examen de Oposición SEP-H. A través de un enfoque estructurado y materiales actualizados, te proporcionaremos los conocimientos y habilidades necesarios para afrontar con éxito cada sección del examen. Además, tendrás acceso a simulaciones y prácticas que te permitirán evaluar tu progreso y mejorar tus estrategias de examen.
                        </p>
                    </div>
                </div>

                <!-- ===================== -->
                <!-- NUEVAS INTEGRACIONES -->
                <!-- ===================== -->

                <!-- Curso Terminado 14 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Cursos14.webp" class="card-img-top" alt="Psicologia Forense CUH">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Psicologia Forense</strong></h4>
                        <p class="card-text">
                            Este curso abordó la aplicación de la psicología en contextos judiciales, incluyendo fundamentos del peritaje,
                            análisis de conductas y comprensión de procesos legales para la intervención profesional.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 15 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/Cursos13.webp" class="card-img-top" alt="Curso Trauma y Apego">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Curso Trauma y Apego</strong></h4>
                        <p class="card-text">
                            En este curso se exploró cómo el trauma influye en la vida y las relaciones, así como los tipos de apego y su impacto.
                            Se trabajaron estrategias prácticas para promover la sanación emocional y el bienestar.
                        </p>
                    </div>
                </div>

                <!-- Curso Terminado 16 -->
                <div class="card course-image-card">
                    <span class="badge-curso-terminado">Curso Terminado</span>
                    <img src="assets/img/Cursos/cursoPython.webp" class="card-img-top" alt="Introducción a Visión Artificial con Python">
                    <div class="card-body">
                        <h4 class="card-title"><strong>Introducción a Visión Artificial con Python</strong></h4>
                        <p class="card-text">
                            Este curso introdujo los fundamentos de la visión artificial con Python, utilizando herramientas como OpenCV y TensorFlow.
                            Los participantes realizaron ejercicios prácticos, incluyendo detección de objetos en imágenes y conceptos base de IA.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Nuestros Servicios -->
    <div class="row mt-5">
        <div class="col-lg-12 mt-4">
            <h2 class="text-center" style="color: #000080;">Nuestros Servicios</h2>
            <br><br>
            <div class="row">
                <!-- Servicio 1 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-book-open display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Desarrollo Profesional</h6>
                                <p class="card-text">Cursos para mejorar habilidades y competencias laborales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Servicio 2 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-wifi display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Tecnología Educativa</h6>
                                <p class="card-text">Uso de herramientas digitales para la enseñanza</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Servicio 3 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-printer display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Innovación Pedagógica</h6>
                                <p class="card-text">Estrategias innovadoras para la educación</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Servicio 4 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-support display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Liderazgo Educativo</h6>
                                <p class="card-text">Formación de líderes en el ámbito educativo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Servicio 5 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-server display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Educación Inclusiva</h6>
                                <p class="card-text">Estrategias para una educación accesible para todos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Servicio 6 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-video display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Recursos Multimedia</h6>
                                <p class="card-text">Uso de videos y audiolibros en la educación</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Servicio 7 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-pie-chart-alt display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Evaluación Educativa</h6>
                                <p class="card-text">Métodos y técnicas para evaluar el aprendizaje</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Servicio 8 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="card h-100 shadow-lg border-light">
                        <div class="card-body d-flex align-items-center flex-row-reverse">
                            <i class="bx bx-lock-alt display-4 text-primary me-3"></i>
                            <div class="ms-3">
                                <h6 class="card-title card-title-blue">Seguridad Informática</h6>
                                <p class="card-text">Protección de datos y privacidad en la educación</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection

@foreach($cursos as $curso)
<!-- Modal botón de grupos -->
<div class="modal fade" id="grupos{{ $curso->idcurso }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Encabezado -->
            <div class="modal-header">
                <h5 class="modal-title" style="color: #000080;">{{ $curso->nombre_curso }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Cuerpo -->
            <div class="modal-body">
                <!-- Términos y condiciones -->
                <div class="col form-group">
                    <div class="table-responsive row">
                        <table class="table table-sm table-hover table-bordered">
                            <label for="info"><strong>Objetivo general</strong></label>
                            <style> textarea { text-align: justify; } </style>
                            <textarea class="form-control" readonly="readonly" id="exampleFormControlTextarea1" rows="4" disabled>{{ $curso->objetivo_general }}</textarea>
                        </table>
                    </div>
                </div>
                <div class="col form-group">
                    <div class="table-responsive row">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="text-center">GRUPO</th>
                                    <th scope="col" class="text-center">LUNES</th>
                                    <th scope="col" class="text-center">MARTES</th>
                                    <th scope="col" class="text-center">MIÉRCOLES</th>
                                    <th scope="col" class="text-center">JUEVES</th>
                                    <th scope="col" class="text-center">VIERNES</th>
                                    <th scope="col" class="text-center">SÁBADO</th>
                                    <th scope="col" class="text-center">FECHA INICIO</th>
                                    <th scope="col" class="text-center">FECHA TÉRMINO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($curso->grupos()->where('idcurso', $curso->idcurso)->where('status_grupo', 'VI')->orderBy('idgrupo', 'asc')->get() as $g)
                                    <tr>
                                        <th scope="row" class="text-center">{{ $g->idgrupo }}</th>
                                        <td class="text-center">{{ $g->horario_lunes }}</td>
                                        <td class="text-center">{{ $g->horario_martes }}</td>
                                        <td class="text-center">{{ $g->horario_miercoles }}</td>
                                        <td class="text-center">{{ $g->horario_jueves }}</td>
                                        <td class="text-center">{{ $g->horario_viernes }}</td>
                                        <td class="text-center">{{ $g->horario_sabado }}</td>
                                        <td class="text-center">{{ $g->fecha_inicio }}</td>
                                        <td class="text-center">{{ $g->fecha_termino }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Pie de página -->
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- Modal botón de registrarse -->
<div class="modal fade" id="registro{{ $curso->idcurso }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('cursosdeeducacioncontinua-registrar') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- Encabezado -->
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #000080;">Registro para cursos de Educación Continua</h5>
                    <span style="margin-left: auto;">obligatorio *</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Cuerpo -->
                <div class="modal-body">
                    <input id="curso" type="hidden" class="form-control" name="curso" value="{{ $curso->idcurso }}" onkeyup="mayusculas(this);" required autocomplete="curso" autofocus>
                    <!-- Nombre(s) -->
                    <div class="col form-group">
                        <input id="nombre" type="text" placeholder="Nombre(s) *" class="form-control" name="nombre" value="" onkeyup="mayusculas(this);" required autocomplete="name" autofocus>
                    </div>
                    <!-- Apellido paterno -->
                    <div class="col form-group">
                        <input id="paterno" type="text" placeholder="Apellido paterno *" class="form-control" name="paterno" value="" onkeyup="mayusculas(this);" required autocomplete="paterno" autofocus>
                    </div>
                    <!-- Apellido materno -->
                    <div class="col form-group">
                        <input id="materno" type="text" placeholder="Apellido materno *" class="form-control" name="materno" value="" onkeyup="mayusculas(this);" required autocomplete="materno" autofocus>
                    </div>
                    <!-- Email -->
                    <div class="col form-group">
                        <input id="email" type="email" class="form-control" placeholder="Correo Electrónico *" name="email" value="" onkeyup="minusculas(this);" required>
                    </div>
                    <!-- Teléfono -->
                    <div class="col form-group">
                        <input id="telefono" type="tel" class="form-control" placeholder="Número de Teléfono (10 dígitos) *" name="telefono" value="" pattern="[0-9]{10}" required>
                    </div>
                    <!-- Edad -->
                    <div class="col form-group">
                        <input id="edad" type="number" class="form-control" placeholder="Edad *" name="edad" value="" min="18" max="100" required>
                    </div>
                    <!-- Temática -->
                    <div class="col form-group">
                        <input id="tematica" type="text" placeholder="Propuesta para el siguiente curso *" class="form-control" name="tematica" value="" onkeyup="mayusculas(this);" required autocomplete="tematica" autofocus>
                    </div>
                    <!-- Grupo -->
                    <div class="col form-group">
                        <select id="grupo" class="form-control" name="grupo" required>
                            <option value="" disabled selected hidden>Selecciona tu Grupo *</option>
                            @foreach($curso->grupos()->where('idcurso', $curso->idcurso)->where('status_grupo', 'VI')->orderBy('idgrupo', 'asc')->get() as $g)
                                <option value="{{ $g->idgrupo }}">{{ $g->idgrupo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Términos y condiciones -->
                    <div class="col form-group">
                        <label><strong>Términos y condiciones</strong></label>

                        <style>
                            textarea {
                                white-space: pre-line;
                                text-align: justify;
                                line-height: 1.4;
                            }
                        </style>


                            <textarea class="form-control" readonly rows="6">
                        El Centro Universitario Hidalguense, también denominado CUH, se compromete a impartir programas de capacitación y formación continua de calidad.

                        Es compromiso del usuario conducirse con respeto.

                        No hay devoluciones ni cancelaciones.

                        El CUH se reserva el derecho de baja cuando:
                        1. Exista comportamiento inapropiado.
                        2. Se incumpla el pago.

                        El usuario deberá cumplir los criterios de evaluación.

                        Contacto: cursos@cuh.mx

                        Manifiesto mi conformidad con las políticas.
                            </textarea>
                    </div>

                    <!-- Checkboxes -->
                    <div class="col form-group">
                        <input id="info" type="checkbox" class="form-control-check-input" name="info" value="1">
                        <label for="info"> Recibir información de cursos </label>
                        <br>
                        <input id="acepto" type="checkbox" class="form-control-check-input" name="acepto" value="1" onclick="btnRegistrar.disabled = !this.checked">
                        <label for="acepto"> He leído y acepto los términos y condiciones </label>
                    </div>
                </div>
                <!-- Pie de página -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnRegistrar" disabled>
                        <i class="fas fa-user-check"></i> Registrarte
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script>
    // Convertir a mayúsculas
    function mayusculas(e) {
        e.value = e.value.toUpperCase();
    }
    // Convertir a minúsculas
    function minusculas(e) {
        e.value = e.value.toLowerCase();
    }
</script>
