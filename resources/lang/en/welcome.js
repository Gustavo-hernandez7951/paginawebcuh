// Obtiene el valor de PHP y lo asigna a una variable JS
let getequ = "<?php echo $dato; ?>";

// Referencia al elemento con id="Fech"
let docc = document.getElementById("Fech");

/**
 * Función de pruebas.
 * Si la variable `getequ` es 'SI', oculta el elemento con id="Fech",
 * de lo contrario lo muestra.
 */
function yey() {
    if (getequ === 'SI') {
        docc.style.display = "none";
    } else {
        docc.style.display = "block";
    }
}
// Ejecuta yey() cuando cargue la ventana
window.onload = yey;


/**
 * Función para renderizar la sección "Oferta Educativa".
 * Inserta dinámicamente el HTML dentro del contenedor con id="oferta-educativa-container".
 */
function respond() {
    const container = document.getElementById('oferta-educativa-container');
    container.innerHTML = `
        <div class="oferta-educativa-container">
            <h2>Oferta Educativa CUH</h2>

            <!-- Botones de filtrado -->
            <div class="filters">
                <button class="active" onclick="filterCards('todo')">Todo</button>
                <button onclick="filterCards('preparatoria')">Preparatoria</button>
                <button onclick="filterCards('licenciatura')">Licenciatura</button>
                <button onclick="filterCards('posgrado')">Posgrado</button>
            </div>

            <!-- Contenedor de tarjetas -->
            <div class="grid" id="card-grid">
                <!-- Ejemplo de tarjeta -->
                <div class="card todo preparatoria">
                    <img src="assets/img/prepa/logo.jpg" alt="Preparatoria">
                    <div class="card-content">
                        <h4>Preparatoria</h4>
                        <p>Prepa <strong>CUH</strong></p>
                    </div>
                </div>
                <!-- Aquí siguen todas las demás tarjetas que agregaste -->
            </div>
        </div>
    `;

    // Agregar listeners a los botones de filtro
    document.querySelectorAll('.filters button').forEach(button => {
        button.addEventListener('click', function () {
            filterCards(this.innerText.toLowerCase());
        });
    });
}

/**
 * Función para filtrar tarjetas según la categoría seleccionada.
 * Muestra solo las tarjetas que tengan la clase correspondiente.
 * @param {string} category - Categoría seleccionada (ej. 'todo', 'licenciatura').
 */
function filterCards(category) {
    const cards = document.querySelectorAll('.card');

    // Mostrar/ocultar tarjetas
    cards.forEach(card => {
        if (category === 'todo' || card.classList.contains(category)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });

    // Cambiar el estado del botón activo
    const buttons = document.querySelectorAll('.filters button');
    buttons.forEach(button => button.classList.remove('active'));
    document.querySelector(`.filters button[onclick="filterCards('${category}')"]`)
        .classList.add('active');
}

// Llama a respond() para renderizar contenido al inicio
respond();


/**
 * Inicialización de AOS (animaciones al hacer scroll) y Swiper (carrusel).
 */
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar AOS
    AOS.init({
        duration: 800,
        once: true
    });

    // Inicializar Swiper para carrusel
    const swiper = new Swiper('#carrusel-cuh-container .swiper', {
        loop: true,
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        effect: 'slide',
        speed: 600,
        grabCursor: true,
        centeredSlides: true,

        // Flechas de navegación
        navigation: {
            nextEl: '#carrusel-cuh-container .swiper-button-next',
            prevEl: '#carrusel-cuh-container .swiper-button-prev',
        },

        // Configuración responsiva
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            1200: {
                slidesPerView: 1,
                spaceBetween: 40
            }
        }
    });

    // Pausar autoplay al pasar el mouse sobre un video
    document.querySelectorAll('#carrusel-cuh-container .video-container')
        .forEach(container => {
            container.addEventListener('mouseenter', () => {
                swiper.autoplay.stop();
            });
            container.addEventListener('mouseleave', () => {
                swiper.autoplay.start();
            });
        });
});

