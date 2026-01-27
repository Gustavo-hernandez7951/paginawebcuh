@extends('layouts.pagina')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/ofertaacademica.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendario.css') }}">
    
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">OFERTA EDUCATIVA</h1>
            <h2 class="text-white">Licenciatura en Contaduría y Sistemas Fiscales </h2>
        </div>
    </section>

    <!-- ======= Seccion Lic en Contaduría y Sistemas Fiscales ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <!-- imagenes portada -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets\img\Licu\LicuContaduria.webp" class="d-block w-100" alt="Licenciatura en Contaduria y Sistemas">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Licu\LicuContaduria.webp" class="d-block w-100" alt="Licenciatura en Contaduria y Sistemas">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\Licu\LicuContaduria.webp" class="d-block w-100" alt="Licenciatura en Contaduria y Sistemas">
                    </div>
                </div>
            </div>
            <br>
            <!-- cards carrera -->
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Objetivos Generales</h3>
                        <p class="text-left">
                            La Licenciatura en Contaduría y Sistemas Fiscales forma profesionistas con los conocimientos,
                            las habilidades y las actitudes que les permiten asesorar y tomar decisiones en materia
                            financiero-administrativa y resolver problemáticas referentes a las operaciones mercantiles y
                            financieras en diferentes sectores productivos.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Perfil del Aspirante</h3>
                        <p class="text-left">
                            ✔ Sentido de orden, exactitud y sistematización.<br>
                            ✔ Capacidad de expresión verbal y escrita.<br>
                            ✔ Actitud emprendedora, espíritu de superación y hábitos de estudio.<br>
                            ✔ Habilidades de cálculo, razonamiento verbal y matemático.<br>
                            ✔ Valores como: Honestidad, honradez, ética y responsabilidad.<br>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Perfil de Egresado</h3>
                        <p class="text-left">
                            <strong>Al término de la licenciatura, el egresado será capaz de:</strong><br>
                            ✔ Diagnosticar necesidades y problemas relacionados con la información de negocios, utilizando los métodos y técnicas que lleven a optimizar los recursos de las entidades, procurando su eficiencia, eficacia y exitosa competitividad.<br>
                            ✔ Analizar e interpretar la información económica, financiera y fiscal de cualquier entidad de negocios para la asesoría y participación en la toma de decisiones en todo tipo de organizaciones económicas.<br>
                            ✔ Auditar y dictaminar estados financieros de entidades a fin de determinar su razonabilidad para distintos usuarios.<br>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Campo de Trabajo</h3>
                        <p class="text-left">
                            <strong>Por su capacidad profesional podrá:</strong><br>
                            ✔ Desarrollarse tanto en el sector público como en el privado, así como también en el ejercicio independiente de su profesión, como consultor externo desarrollando funciones de asesoría, auditoría y consultoría, tendrá la capacidad para adentrarse en el ámbito empresarial, comercial, industrial o de servicios.<br>
                            ✔ La docencia es otra área de trabajo, donde inculcará los valores éticos y conocimientos que rigen su labor profesional.<br>
                        </p>
                    </div>
                </div>
            </div>
            <br>

            <!-- Requisitos y Modalidad -->
            <div class="row">
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Requisitos</h3>
                        <p class="card-text text-left">
                            📝 Certificado de Bachillerato o Equivalente LEGALIZADO <strong>(Original y 3 Copias)</strong>.<br>
                            📝 Certificado de Secundaria <strong>(Original y 1 copia)</strong>.<br>
                            📝 Carta de buena conducta del Bachillerato o Recomendación : Personal o Laboral <strong>(Original y 1 copia)</strong>.<br>
                            📝 Acta de Nacimiento <strong>(Original y 1 copia)</strong>.<br>
                            📝 CURP <strong>(Original a color y 1 copia)</strong>.<br>
                            📝 Credencial de Elector <strong>(1 copia)</strong>.<br>
                            📝 Comprobante de Domicilio: Luz, agua, teléfono, predial <strong>(1 copia)</strong>.<br>
                            📝 Certificado Médico (Público o Privado). Debe contener: Tipo de Sangre y Alergias <strong>(Original y 1 copia)</strong>.<br>
                            📝 6 Fotografías tamaño INFANTIL.<br>
                            <br>
                            <strong>CARACTERISTICAS DE FOTOS:</strong><br>
                            ✔ Blanco y Negro; papel mate, de frente.<br>
                            ✔ Hombres: camisa blanca y corbata.<br>
                            ✔ Mujeres: blusa blanca, cuello sport (Saco corte sastre "opcional").<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3 class="text-left">Modalidad</h3>
                        <h5 class="card-title text-left">Matutino</h5>
                        <p class="card-text text-left">
                            📅 Lunes a Viernes<br>
                            🕗 07:00 a 11:00 Hrs.
                        </p>
                        <h5 class="card-title text-left">Vespertino</h5>
                        <p class="card-text text-left">
                            📅 Lunes a Viernes<br>
                            🕗 17:00 a 21:00 Hrs.
                        </p>
                        <h5 class="card-title text-left">Mixto</h5>
                        <p class="card-text text-left">
                            📅 Viernes y Sábado<br>
                            🕗 <strong>Viernes:</strong> 16:00 a 21:00 Hrs.<br>
                            🕗 <strong>Sábado:</strong> 07:00 a 16:00 Hrs.
                        </p>
                        <p class="card-text text-left">
                            <strong>Tipo de Ciclo:</strong> Bimestral<br>
                            <strong>Mat - Vesp / Duración:</strong> 3 Años 6 Meses<br>
                            <strong>Mixto / Duración:</strong> 3 Años 9 Meses
                        </p>
                        <h5 class="card-title text-left">INFORMES</h5>
                        <p class="card-text text-left">
                            📞 771 719 5300 / 771 719 5301<br>
                            <img width="20" height="20" src="https://img.icons8.com/water-color/50/whatsapp.png" alt="whatsapp"/> (771)-139-22-40 <br>
                            📩 promocion@cuh.mx
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <!-- Documentos Desplegables -->
            <div class="row">
                <div class="col-12">
                    <div class="box featured">
                        <h3 class="text-left mb-4">Documentos Oficiales</h3>
                        
                        <!-- Acordeón Bootstrap -->
                        <div class="accordion" id="accordionDocumentos">
                            
                            <!-- Calendario Escolar -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h2 class="accordion-header" id="headingCalendario">
                                    <button class="accordion-button collapsed w-100 text-start" type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapseCalendario" 
                                            aria-expanded="false" 
                                            aria-controls="collapseCalendario">
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <strong class="d-block"> Calendario Escolar</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseCalendario" class="accordion-collapse collapse" 
                                    aria-labelledby="headingCalendario" 
                                    data-bs-parent="#accordionDocumentos">
                                    <div class="accordion-body p-0">
                                        <div class="documento-iframe-container">
                                            <iframe src="https://drive.google.com/file/d/1j3LoS8bE7UIEthlXQnGvthE0hTnCyuN7/preview?usp=sharing" 
                                                    width="100%" 
                                                    height="500" 
                                                    loading="lazy"
                                                    title="Calendario Escolar">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Plan de Estudio 2002-2023 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
                                <h2 class="accordion-header" id="headingPlan2002">
                                    <button class="accordion-button collapsed w-100 text-start" type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapsePlan2002" 
                                            aria-expanded="false" 
                                            aria-controls="collapsePlan2002">
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <strong class="d-block"> Ver Plan de Estudio 2002-2023</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapsePlan2002" class="accordion-collapse collapse" 
                                    aria-labelledby="headingPlan2002" 
                                    data-bs-parent="#accordionDocumentos">
                                    <div class="accordion-body p-0">
                                        <div class="documento-iframe-container">
                                            <iframe src="https://drive.google.com/file/d/1_k7k1D2D3xA4u2CHkgfKwsYr6_9NSn1n/preview" 
                                                    width="100%" 
                                                    height="500" 
                                                    loading="lazy"
                                                    title="Plan de Estudio 2002-2023">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Plan de Estudio 2023 -->
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="accordion-header" id="headingPlan2023">
                                    <button class="accordion-button collapsed w-100 text-start" type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapsePlan2023" 
                                            aria-expanded="false" 
                                            aria-controls="collapsePlan2023">
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <strong class="d-block"> Ver Plan de Estudio 2023</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapsePlan2023" class="accordion-collapse collapse" 
                                    aria-labelledby="headingPlan2023" 
                                    data-bs-parent="#accordionDocumentos">
                                    <div class="accordion-body p-0">
                                        <div class="documento-iframe-container">
                                            <iframe src="https://drive.google.com/file/d/1yLBd18kcr7uMjE4xfkvUsyK6C7S7cuV2/preview" 
                                                    width="100%" 
                                                    height="500" 
                                                    loading="lazy"
                                                    title="Plan de Estudio 2023">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap 5 JS Bundle (necesario para el acordeón) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/calendario.js') }}"></script>
@endsection