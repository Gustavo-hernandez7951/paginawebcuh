@extends('layouts.pagina')

@section('content')
<link href="assets/css/reglamento.css" rel="stylesheet">

<!-- Incluir Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-3 font-weight-bolder text-white">Reglamentos Institucionales</h1>
        <h2 class="text-white">CUH</h2>
    </div>
</section>

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="row">
        <!-- Sección de información -->
        <div class="box featured shadow-lg border-light rounded" data-aos="fade-up" style="max-width: 1200px; margin: 20px auto; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; line-height: 1.6;">
            <div class="container text-center">
                <h2 class="font-weight-bold" style="margin-bottom: 40px; font-size: 40px;">Nuestro Reglamento</h2>
            </div>
            <p style="text-align: justify; color: #333; font-size: 20px;" data-aos="fade-up">
                El Reglamento Institucional del Centro Universitario Hidalguense (CUH) establece normas para fomentar el orden, la convivencia respetuosa y el aprovechamiento adecuado de los recursos en la institución. Está dirigido tanto a estudiantes de licenciatura como de maestría, buscando crear un ambiente propicio para su desarrollo académico, personal y profesional. Este reglamento promueve la responsabilidad individual y colectiva, el respeto mutuo y la disciplina, asegurando que todos los miembros de la comunidad universitaria contribuyan al buen funcionamiento de la institución y a la excelencia educativa.
                <br>A través de este reglamento, el Centro Universitario Hidalguense busca fortalecer los valores de disciplina, respeto y compromiso, elementos esenciales para una formación profesional de alta calidad, que prepare a los estudiantes de licenciatura y maestría para enfrentar los desafíos del futuro con ética, responsabilidad y un fuerte sentido de comunidad.
            </p>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
                <div class="box featured shadow-lg border-light rounded" style="height: 570px;">
                    <h3 class="text-white p-2 mb-3 rounded" style="background-color: #000080;">Reglamento de Licenciatura</h3>
                    <div class="embed-responsive" style="height: 500px;">
                        <iframe src="https://drive.google.com/file/d/1UMDFQ2kCszy3k57osDSDSdxjis_19-ch/preview" style="width: 100%; height: 100%;" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
                <div class="box featured shadow-lg border-light rounded" style="height: 570px;">
                    <h3 class="text-white p-2 mb-3 rounded" style="background-color: #000080;">Reglamento de Posgrado</h3>
                    <div class="embed-responsive" style="height: 500px;">
                        <iframe src="https://drive.google.com/file/d/1TXeZjsFheFUVCp9BV3uQVN_jhzwY41_G/preview" style="width: 100%; height: 100%;" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto WhatsApp icono Flotante 
<a id="app-whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=7711392240">
    <i class="bx bxl-whatsapp"></i>
</a>
-->
<!-- Incluir AOS CSS y JS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
