@extends('layouts.pagina')

@section('content')
<!-- ======= Seccion Becas ======= -->
<section id="skills" class="skills">
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Preparatoria CUH </h1>
            <h2 class="text-white">Becas</h2>
        </div>
    </section>
    <div class="container" data-aos="fade-up">
        <div class="row skills-content">
            <!-- Beca Conafe -->
            <div class="col-lg-4 col-md-6 d-flex align-items-center">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/prepa/conafe.webp" class="img-fluid" alt="Beca Conafe">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">Conafe <i class="val">22%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca Conalep -->
            <div class="col-lg-4 col-md-6 d-flex align-items-center">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/prepa/prepacuh.webp" class="img-fluid" alt="Beca Conalep">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">Prepa CUH <i class="val">20%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection