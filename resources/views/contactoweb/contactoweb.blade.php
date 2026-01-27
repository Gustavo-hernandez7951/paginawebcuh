@extends('layouts.pagina')

@section('content')
    <link href="assets/css/contactoweb.css" rel="stylesheet">
    <section id="hero" class="d-flex align-items-center" style="background: linear-gradient(rgba(0, 0, 128, 0.8), rgba(0, 0, 128, 0.8)), url('assets/img/1.jpg') center center; background-size: cover; height: 300px;">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="display-3 font-weight-bolder text-white">¡Hablamos!</h1>
            <h2 class="text-white">¿Necesitas ayuda? ¿Tienes preguntas? Estamos aquí para ti.</h2>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-lg border-light text-center">
                        <div class="card-body">
                            <a href="https://maps.app.goo.gl/6LaehQf3onUPyuNM6" target="_blank" rel="noopener noreferrer">
                                <i class="bx bx-map display-4 text-primary mb-3"></i>
                            </a>
                            <h3 class="card-title" style="color: #000080;">
                                <a href="https://maps.app.goo.gl/6LaehQf3onUPyuNM6" target="_blank" rel="noopener noreferrer" style="color: #000080;">Nuestra Dirección</a>
                            </h3>
                            <p class="card-text">Boulevard del Minero #305 Colonia Rojo Gómez Pachuca, Hgo. C.P. 42030</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-lg border-light text-center">
                        <div class="card-body">
                            <a href="mailto:promocion@cuh.mx" target="_blank" rel="noopener noreferrer">
                                <i class="bx bx-envelope display-4 text-primary mb-3"></i>
                            </a>
                            <h3 class="card-title" style="color: #000080;">
                                <a href="mailto:promocion@cuh.mx" target="_blank" rel="noopener noreferrer" style="color: #000080;">Envíanos un Correo</a>
                            </h3>
                            <p class="card-text">
                                <a href="mailto:promocion@cuh.mx" class="text-dark" target="_blank" rel="noopener noreferrer">promocion@cuh.mx</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-lg border-light text-center">
                        <div class="card-body">
                            <a href="tel:+527717195300" target="_blank" rel="noopener noreferrer">
                                <i class="bx bx-phone-call display-4 text-primary mb-3"></i>
                            </a>
                            <h3 class="card-title" style="color: #000080;">
                                <a href="tel:+527717195300" target="_blank" rel="noopener noreferrer" style="color: #000080;">Llámanos</a>
                            </h3>
                            <p class="card-text">
                                <a href="tel:+527717195300" class="text-dark" target="_blank" rel="noopener noreferrer">771 719 5300</a> / 771 719 5301
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======= SECCIÓN MAPA + FORMULARIO LADO A LADO ======= -->
            <div class="row mt-4">
                <!-- Mapa - Ocupa 6 columnas -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow-lg border-light h-100">
                        <div class="card-body">
                            <!-- Texto de la dirección arriba del mapa -->
                            <div class="text-center mb-3">
                                <h4 class="card-title" style="color: #000080; font-weight: bold;">
                                    Centro Universitario Hidalguense A.C
                                </h4>
                                <p class="card-text mb-3" style="font-size: 1.1rem; color: #333;">
                                    <i class="bx bx-map align-middle"></i> 
                                    Dirección: Guanajuato, Blvd. del Minero 305, Javier Rojo Gómez, 42030 Pachuca de Soto, Hgo.
                                </p>
                                <a href="https://maps.app.goo.gl/6LaehQf3onUPyuNM6" 
                                    target="_blank" 
                                    rel="noopener noreferrer" 
                                    class="btn btn-outline-primary btn-sm">
                                    <i class="bx bx-navigation"></i> Abrir en Google Maps
                                </a>
                            </div>
                            
                            <!-- Mapa -->
                            <iframe class="google-map" 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746.2196426495498!2d-98.7537491846272!3d20.124882286494927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d10a032d4ddb1b%3A0xf397144c38bcb070!2sCentro%20Universitario%20Hidalguense!5e0!3m2!1ses-419!2smx!4v1596922044542!5m2!1ses-419!2smx" 
                                    frameborder="0" 
                                    style="border:0; width: 100%; height: 400px;" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Contenido al lado del mapa - Ocupa 6 columnas -->
                <div class="col-lg-6 mb-4">
                    <div class="row h-100">
                        <!-- Tarjeta de WhatsApp -->
                        <div class="col-12 mb-4">
                            <div class="card shadow-lg border-light h-100">
                                <div class="card-body text-center">
                                    <a href="https://wa.me/527711392240" target="_blank" rel="noopener noreferrer">
                                        <i class="bx bx-message-square-dots display-4 text-primary mb-3"></i>
                                    </a>
                                    <h3 class="card-title" style="color: #000080;">
                                        <a href="https://wa.me/527711392240" target="_blank" rel="noopener noreferrer" style="color: #000080;">Contáctanos por WhatsApp</a>
                                    </h3>
                                    <p class="card-text">
                                        Cualquier detalle ponte en contacto con nosotros por WhatsApp al siguiente número: 
                                        <a href="https://wa.me/527711392240" class="text-dark" target="_blank" rel="noopener noreferrer">771 139 2240</a>
                                    </p>
                                    <a href="https://wa.me/527711392240" target="_blank" rel="noopener noreferrer" class="btn btn-success mt-2">
                                        <i class="bx bxl-whatsapp"></i> Escribir por WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Formulario de correo -->
                        <div class="col-12">
                            <div class="card shadow-lg border-light h-100">
                                <div class="card-body text-center">
                                    <h3 class="card-title" style="color: #000080;">Escribe y envía un correo directamente</h3>
                                    <p class="card-text">Redacta un mensaje personalizado y envíalo directamente desde tu cliente de correo:</p>
                                    <textarea id="correoMensaje" class="form-control mb-3" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
                                    <button onclick="enviarCorreo()" class="btn btn-primary btn-lg w-100">
                                        <i class="bx bx-envelope"></i> Enviar por correo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script para armar y lanzar el enlace mailto -->
    <script>
        function enviarCorreo() {
            const mensaje = document.getElementById("correoMensaje").value.trim();
            const correoDestino = "promocion@cuh.mx";
            const asunto = "Consulta desde el sitio web";
            
            if (mensaje === "") {
                alert("Por favor escribe un mensaje antes de enviarlo.");
                return;
            }
            
            const mailtoLink = `mailto:${correoDestino}?subject=${encodeURIComponent(asunto)}&body=${encodeURIComponent(mensaje)}`;
            window.location.href = mailtoLink;
        }

        // Mejora: Guardar mensaje en localStorage por si se recarga la página
        document.addEventListener('DOMContentLoaded', function() {
            const mensajeGuardado = localStorage.getItem('correoMensaje');
            if (mensajeGuardado) {
                document.getElementById('correoMensaje').value = mensajeGuardado;
            }
            
            // Guardar mensaje mientras se escribe
            document.getElementById('correoMensaje').addEventListener('input', function() {
                localStorage.setItem('correoMensaje', this.value);
            });
        });
    </script>

    <!-- Estilos CSS adicionales para mejorar la presentación -->
@endsection