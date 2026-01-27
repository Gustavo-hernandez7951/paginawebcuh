@extends('layouts.pagina')

@section('content')
<!-- ======= Seccion Becas ======= -->
<section id="skills" class="skills">
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">Licenciatura CUH </h1>
            <h2 class="text-white"> Becas </h2>
        </div>
    </section>
    <div class="container" data-aos="fade-up">
        <div class="row skills-content">
            <!-- Beca Conafe -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/conafe.webp" class="img-fluid" alt="Beca Conafe">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">Conafe <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca CECyTE -->
            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/cecyte.webp" class="img-fluid" alt="Beca CECyTE">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">CECyTE <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div> --}}
            <!-- Beca   Conalep -->
            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/conalep.webp" class="img-fluid" alt="Beca Conalep">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">Conalep <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div> --}}
            <!-- Beca COBAEH -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/cobaeh.webp" class="img-fluid" alt="Beca COBAEH">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">COBAEH <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca   CETis -->
            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/cetis.webp" class="img-fluid" alt="Beca CETis">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                        <span class="skill">CETis <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca   CBTis -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/cbtis.webp" class="img-fluid" alt="Beca CBTis">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">CBTis <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div> --}}
            <!-- Beca   Prepa CUH -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/prepacuh.webp" class="img-fluid" alt="Beca Prepa CUH">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">Prepa CUH <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca   Canacope -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/canacope.webp" class="img-fluid" alt="Beca Canacope">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">Canacope <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca   Institucionales -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/institucionales.webp" class="img-fluid" alt="Beca Institucionales">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">Becas Institucionales <i class="val">20%, 30% , 40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca   CBT -->
            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/cbt.webp" class="img-fluid" alt="Beca CBT">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">CBT <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div> --}}
            <!-- Beca   CEB -->
            {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/ceb.webp" class="img-fluid" alt="Beca CEB">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">CEB <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Beca   TC -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/becas/lic/tc.webp" class="img-fluid" alt="Beca TC">
                    </div>
                    <div class="member-info">
                        <div class="progress">
                            <span class="skill">TELEBACHILLERATO COMUNITARIO <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div> 
                    <br>
                    <br>
                </div>
            </div> --}}
        </div>
    </div>
</section><!-- End Skills Section -->
@endsection