@extends('layouts.pagina')

@section('content')
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="container text-center">
                <h1 class="display-3 font-weight-bolder" style="color: black; margin-bottom: 40px;">Sala de Juicios Orales</h1>
            </div>
        </div>

        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3500">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/servicios/juicio_oral1.jpg" class="d-block w-100" alt="Sala de Juicio Oral 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/servicios/juicio_oral2.jpg" class="d-block w-100" alt="Sala de Juicio Oral 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/servicios/juicio_oral3.jpg" class="d-block w-100" alt="Sala de Juicio Oral 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/servicios/juicio_oral4.jpg" class="d-block w-100" alt="Sala de Juicio Oral 4">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/servicios/juicio_oral5.jpg" class="d-block w-100" alt="Sala de Juicio Oral 5">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/servicios/juicio_oral6.jpg" class="d-block w-100" alt="Sala de Juicio Oral 6">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Cuerpo de la página -->
        <div class="row mt-4">
            <div style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;">
                <div class="text">
                    <h1><strong>Nuestra Sala de Juicio Oral</strong></h1>
                </div>
                <p style="text-align: justify; color: #333; font-size: 20px;">
                    La Sala de Juicio Oral es un espacio constituido para fomentar la participación de los alumnos en prácticas y ejercicios, que les ayuden a desarrollar representaciones de audiencias judiciales, lo cual fomentará sus habilidades como abogado.
                    <br> Tiene la finalidad de brindar un mejor servicio a los alumnos y docentes de nuestra institución, ya que está debidamente equipada con el mobiliario y el equipo tecnológico en audio y video, cumpliendo con los estándares requeridos por el Sistema Penal Adversarial, permitiendo reforzar los conocimientos y competencias de nuestros alumnos, para que al egresar estén preparados de acuerdo a los requerimientos y necesidades que exige la sociedad.
                    <br> La sala de audiencias contiene los elementos necesarios que asegurarán su funcionalidad, respetando los conceptos de equidad, transparencia, solemnidad y simetría, esta última es esencial para generar un balance simbólico entre las partes.
                    <br> El Centro Universitario Hidalguense pretende que sus instalaciones estén siempre a la vanguardia para lograr la formación profesional de su alumnado y así se integren con éxito al ámbito laboral.
                </p>
            </div>
            <div class="col-lg-12">
                <div class="text" style="text-align: center;">
                    <h1><strong>Aprendamos un poco más ...</strong></h1> <br><br>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow">
                            <img class="card-img-top" src="assets/img/servicios/juicio21.jpg" alt="Equidad y Justicia">
                            <div class="card-body text-center">
                                <h5 class="card-title"><i class="fas fa-balance-scale fa-2x text-primary"></i></h5>
                                <p class="card-text">Equidad y Justicia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow">
                            <img class="card-img-top" src="assets/img/servicios/juicio22.jpg" alt="Transparencia">
                            <div class="card-body text-center">
                                <h5 class="card-title"><i class="fas fa-gavel fa-2x text-primary"></i></h5>
                                <p class="card-text">Transparencia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow">
                            <img class="card-img-top" src="assets/img/servicios/juicio23.jpg" alt="Solemnidad">
                            <div class="card-body text-center">
                                <h5 class="card-title"><i class="fas fa-university fa-2x text-primary"></i></h5>
                                <p class="card-text">Solemnidad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow">
                            <img class="card-img-top" src="assets/img/servicios/juicio23.jpg" alt="Solemnidad">
                            <div class="card-body text-center">
                                <h5 class="card-title"><i class="fas fa-university fa-2x text-primary"></i></h5>
                                <p class="card-text">Solemnidad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow">
                            <img class="card-img-top" src="assets/img/servicios/juicio23.jpg" alt="Solemnidad">
                            <div class="card-body text-center">
                                <h5 class="card-title"><i class="fas fa-university fa-2x text-primary"></i></h5>
                                <p class="card-text">Solemnidad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow">
                            <img class="card-img-top" src="assets/img/servicios/juicio23.jpg" alt="Solemnidad">
                            <div class="card-body text-center">
                                <h5 class="card-title"><i class="fas fa-university fa-2x text-primary"></i></h5>
                                <p class="card-text">Solemnidad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
