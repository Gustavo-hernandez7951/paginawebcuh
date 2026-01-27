@extends('layouts.pagina')

@section('content')
<section id="pricing" class="pricing fade-in-up">
    <section id="hero" class="d-flex align-items-center fade-in-up" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Procedimiento Servicio Social</h1>
            <h2 class="text-white">SERVICIO SOCIAL CUH</h2>
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
                    <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestro Estacionamiento</h2>
                </div>
            <p style="text-align: justify; color: #333; font-size: 20px;">
                El Centro Universitario Hidalguense pone a disposición de sus estudiantes y personal administrativo un área de estacionamiento que ofrece el cupo necesario para acomodar vehículos de manera segura y ordenada. Este espacio está diseñado para brindar comodidad y facilidad de acceso a todos aquellos que confían en nuestra institución para continuar con su formación académica.
                Además, para garantizar la seguridad de tu automóvil mientras realizas tus actividades universitarias, el estacionamiento cuenta con un servicio de vigilancia constante. Nuestro equipo de seguridad se encarga de velar por la integridad de los vehículos, brindando tranquilidad a los usuarios para que puedan centrarse en su experiencia educativa sin preocupaciones.
                Confía en nosotros, tu vehículo estará seguro mientras te enfocas en tu desarrollo académico en el Centro Universitario Hidalguense.
            </p>
        </div>

        <!-- Tarjetas Interactivas -->
        <div class="row mt-4">
            <!-- Tarjeta 1: Espacio de Estacionamiento -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/servicios/estacionamiento.jpg" class="card-img-top" alt="Espacio de Estacionamiento" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Espacio de Estacionamiento</h5>
                        <p class="card-text">
                            El Centro Universitario Hidalguense pone a disposición de sus estudiantes y personal un área de estacionamiento que ofrece el cupo necesario para acomodar vehículos de manera segura y ordenada. Este espacio está diseñado para brindar comodidad y facilidad de acceso a todos aquellos que confían en nuestra institución para continuar con su formación académica.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Seguridad y Vigilancia -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/servicios/estacionamiento.jpg" class="card-img-top" alt="Seguridad y Vigilancia" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Seguridad y Vigilancia</h5>
                        <p class="card-text">
                            Para garantizar la seguridad de tu automóvil mientras realizas tus actividades universitarias, el estacionamiento cuenta con un servicio de vigilancia constante. Nuestro equipo de seguridad se encarga de velar por la integridad de los vehículos, brindando tranquilidad a los usuarios para que puedan centrarse en su experiencia educativa sin preocupaciones.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Confianza y Tranquilidad -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-lg border-light">
                    <img src="assets/img/servicios/estacionamiento.jpg" class="card-img-top" alt="Confianza y Tranquilidad" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #000080;">Confianza y Tranquilidad</h5>
                        <p class="card-text">
                            Confía en nosotros, tu vehículo estará seguro mientras te enfocas en tu desarrollo académico en el Centro Universitario Hidalguense.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
        <!-- Servicios de Estacionamiento -->
        <div class="row mt-5">
            <div class="col-lg-12 mt-4">
                <h2 class="text-center" style="color: #000080;">Servicios de Estacionamiento</h2>
                <h3 class="text-center" style="color: #000080;">Centro Universitario Hidalguense</h3>
                <br><br>
                <div class="row">

                    <!-- Espacio Adecuado -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-car display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Espacio Adecuado</h6>
                                    <p class="card-text">Ofrecemos un área de estacionamiento amplia y bien organizada para acomodar todos los vehículos de manera segura.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seguridad -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-shield-alt display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Seguridad</h6>
                                    <p class="card-text">Contamos con vigilancia constante para garantizar la seguridad de tu vehículo mientras estás en el campus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Atención al Cliente -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bx-user-voice display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Atención al Cliente</h6>
                                    <p class="card-text">Nuestro personal está siempre disponible para ayudarte con cualquier necesidad relacionada con el estacionamiento.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accesibilidad -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="card h-100 shadow-lg border-light">
                            <div class="card-body d-flex align-items-center">
                                <i class="bx bxs-car-garage display-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="card-title card-title-blue">Accesibilidad</h6>
                                    <p class="card-text">Espacios reservados y accesos adaptados para personas con discapacidad.</p>
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
