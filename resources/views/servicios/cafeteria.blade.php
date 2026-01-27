@extends('layouts.pagina')

@section('content')
<section id="pricing" class="pricing fade-in-up">
    <section id="hero" class="d-flex align-items-center fade-in-up" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Nuestra Cafetería</h1>
            <h2 class="text-white">CUH</h2>
        </div>
    </section>
</section>
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/servicios/cafeteria.jpg" class="d-block w-100" alt="Cafetería">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/servicios/estacionamiento.jpg" class="d-block w-100" alt="Estacionamiento">
                </div>
            </div>
        </div>

        <!-- Sección de información -->
        <div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;">
            <div class="container text-center">
                <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestra Cafeteria</h2>
            </div>
            <p style="text-align: justify; color: #333; font-size: 20px;">
                La Cafetería del Centro Universitario Hidalguense es un espacio cómodo y acogedor para estudiantes, profesores y personal administrativo, donde pueden disfrutar de alimentos y bebidas durante su jornada académica. Ofrece una variedad de opciones gastronómicas. Además, el ambiente es ideal para descansar, socializar o trabajar entre clases. Con un compromiso con la calidad y precios accesibles, la cafetería proporciona un espacio esencial para recargar energías y fomentar la interacción social dentro de la comunidad universitaria.
            </p>
        </div>

        <!-- Tarjetas Interactivas -->
        <div class="row mt-4">
            <!-- Tarjeta 1: Variedad y Comodidad -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/servicios/cafeteria.jpg" class="card-img-top" alt="Variedad y Comodidad" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Variedad y Comodidad</h5>
                        <p class="card-text">
                            La Cafetería del Centro Universitario Hidalguense ofrece una amplia gama de productos, desde desayunos hasta opciones para el almuerzo y la merienda. Se busca satisfacer las preferencias alimenticias de todos los miembros de la universidad.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Ambiente Social y de Relax -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/servicios/cafeteria.jpg" class="card-img-top" alt="Ambiente Social y de Relax" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Ambiente Social y de Relax</h5>
                        <p class="card-text">
                            La cafetería no solo es un lugar para comer, sino también un punto de encuentro donde la comunidad universitaria puede relajarse, compartir ideas y fomentar la interacción social. Es un espacio ideal para hacer pausas entre clases, organizar reuniones informales o simplemente disfrutar de un ambiente tranquilo antes de retomar las actividades académicas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Compromiso con la Calidad -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/servicios/cafeteria.jpg" class="card-img-top" alt="Compromiso con la Calidad" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Compromiso con la Calidad</h5>
                        <p class="card-text">
                            El Centro Universitario Hidalgo se compromete a ofrecer un servicio de calidad en su cafetería, garantizando la frescura de los ingredientes y la higiene en cada proceso. Además, se busca ofrecer precios accesibles que se adapten al presupuesto de los estudiantes, contribuyendo a su bienestar integral durante su formación académica.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Servicios Institucionales -->
            <div class="row mt-5">
                <div class="col-lg-12 mt-4">
                    <h2 class="text-center" style="color: #000080;">Servicios Institucionales</h2>
                    <h3 class="text-center" style="color: #000080;">Centro Universitario Hidalguense</h3>
                    <br><br>
                    <div class="row">

                        <!-- Bebidas -->
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-coffee-togo display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Variedad de Bebidas</h6>
                                        <p class="card-text">Ofrecemos una amplia variedad de bebidas calientes y frías para satisfacer todos los gustos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Servicios Rapidos -->
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-stopwatch display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Servicio Rápido</h6>
                                        <p class="card-text">Garantizamos un servicio rápido para que puedas disfrutar de tu comida sin demoras.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aula 4: Organización -->
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                            <div class="card h-100 shadow-lg border-light">
                                <div class="card-body d-flex align-items-center">
                                    <i class="bx bx-user-voice display-4 text-primary me-3"></i>
                                    <div>
                                        <h6 class="card-title card-title-blue">Atención al Cliente</h6>
                                        <p class="card-text">Nuestro personal está siempre dispuesto a ayudarte y hacer tu experiencia más agradable.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Contacto WhatsApp icono Flotante -->
<a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=7711392240">
    <i class="bx bxl-whatsapp"></i>
</a>
@endsection
