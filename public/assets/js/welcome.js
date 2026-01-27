// Archivo: assets/js/welcome.js

// ===== CONFIGURACIÓN GLOBAL =====
let swiperInstance = null;
const carouselIntervals = new Map();

// ===== FUNCIONES PRINCIPALES =====

// Función para manejar la visibilidad de elementos según la configuración de becas
function handleBecaVisibility() {
    const getequ = "<?php echo $dato; ?>";
    const docc = document.getElementById("Fech");

    if (docc) {
        docc.style.display = getequ === 'SI' ? "none" : "block";
    }
}

// Función para filtrar tarjetas de oferta educativa
function filterCards(category) {
    const cards = document.querySelectorAll('.card');
    const buttons = document.querySelectorAll('.filters button');
    
    cards.forEach(card => {
        card.style.display = (category === 'todo' || card.classList.contains(category)) ? 'flex' : 'none';
    });

    buttons.forEach(button => button.classList.remove('active'));
    const activeButton = document.querySelector(`.filters button[onclick*="${category}"]`);
    if (activeButton) activeButton.classList.add('active');
}

// Función de prueba
function respond() {
    alert("Botón clickeado");
}

// ===== SISTEMA DE PESTAÑAS =====
function switchTab(button) {
    const tabId = button.getAttribute('data-tab');
    const tabsContainer = button.closest('.card-tabs');
    
    if (!tabsContainer || !tabId) return;
    
    const buttons = tabsContainer.querySelectorAll('.tab-btn');
    const contents = tabsContainer.querySelectorAll('.tab-content');
    
    buttons.forEach(btn => btn.classList.remove('active'));
    contents.forEach(content => content.classList.remove('active'));
    
    button.classList.add('active');
    const targetContent = document.getElementById(tabId);
    if (targetContent) targetContent.classList.add('active');
}

function initializeTabs() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            switchTab(this);
        });
        
        button.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                switchTab(this);
            }
        });
    });
    
    const tabsContainers = document.querySelectorAll('.card-tabs');
    tabsContainers.forEach(container => {
        if (!container.querySelector('.tab-btn.active')) {
            const firstTab = container.querySelector('.tab-btn');
            if (firstTab) switchTab(firstTab);
        }
    });
}

// ===== CARRUSEL DE IMÁGENES =====
function initializeImageCarousel() {
    const carouselContainers = document.querySelectorAll('.carousel-container');
    
    carouselContainers.forEach((container, index) => {
        const slides = container.querySelectorAll('.carousel-slide');
        const prevBtn = container.querySelector('.prev');
        const nextBtn = container.querySelector('.next');
        const dots = container.querySelectorAll('.dot');
        
        if (!slides.length) return;
        
        let currentSlide = 0;
        const totalSlides = slides.length;
        
        function showSlide(slideIndex) {
            // Validar y ajustar índice
            if (slideIndex >= totalSlides) {
                currentSlide = 0;
            } else if (slideIndex < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = slideIndex;
            }
            
            // Ocultar todas las diapositivas
            slides.forEach(slide => slide.classList.remove('active'));
            
            // Mostrar diapositiva actual
            slides[currentSlide].classList.add('active');
            
            // Actualizar indicadores
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentSlide);
            });
        }
        
        function startAutoPlay() {
            // Limpiar intervalo existente
            const existingInterval = carouselIntervals.get(container);
            if (existingInterval) clearInterval(existingInterval);
            
            // Crear nuevo intervalo
            const intervalId = setInterval(() => {
                showSlide(currentSlide + 1);
            }, 4000);
            
            carouselIntervals.set(container, intervalId);
        }
        
        function resetAutoPlay() {
            startAutoPlay();
        }
        
        // Event listeners para navegación
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                resetAutoPlay();
                showSlide(currentSlide - 1);
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                resetAutoPlay();
                showSlide(currentSlide + 1);
            });
        }
        
        // Event listeners para indicadores
        dots.forEach((dot, dotIndex) => {
            dot.addEventListener('click', () => {
                resetAutoPlay();
                showSlide(dotIndex);
            });
        });
        
        // Control de pausa al hacer hover
        container.addEventListener('mouseenter', () => {
            const intervalId = carouselIntervals.get(container);
            if (intervalId) clearInterval(intervalId);
        });
        
        container.addEventListener('mouseleave', startAutoPlay);
        
        // Inicializar
        showSlide(0);
        startAutoPlay();
    });
}

// ===== CARRUSEL SWIPER (VIDEOS) =====
function initializeSwiperCarousel() {
    const swiperElement = document.querySelector('#carrusel-cuh-container .swiper');
    
    if (!swiperElement) {
        console.log('Elemento Swiper no encontrado');
        return;
    }
    
    if (typeof Swiper === 'undefined') {
        console.warn('Swiper no está cargado. Verifica que el script esté incluido.');
        return;
    }
    
    try {
        swiperInstance = new Swiper(swiperElement, {
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

            navigation: {
                nextEl: '#carrusel-cuh-container .swiper-button-next',
                prevEl: '#carrusel-cuh-container .swiper-button-prev',
            },

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

        console.log('Swiper inicializado correctamente');

        // Control de pausa para videos
        document.querySelectorAll('#carrusel-cuh-container .video-container').forEach(container => {
            container.addEventListener('mouseenter', () => {
                if (swiperInstance?.autoplay?.running) {
                    swiperInstance.autoplay.stop();
                }
            });
            
            container.addEventListener('mouseleave', () => {
                if (swiperInstance?.autoplay?.paused) {
                    swiperInstance.autoplay.start();
                }
            });
        });
        
    } catch (error) {
        console.error('Error al inicializar Swiper:', error);
    }
}

// ===== INICIALIZACIÓN DE AOS =====
function initializeAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
        console.log('AOS inicializado correctamente');
    } else {
        console.warn('AOS no está cargado');
    }
}

// ===== FUNCIÓN PARA CARGAR OFERTA EDUCATIVA =====
function loadOfertaEducativa() {
    const container = document.getElementById('oferta-educativa-container');
    if (!container) {
        console.warn('Contenedor de oferta educativa no encontrado');
        return;
    }
    
    container.innerHTML = `
        <div class="oferta-educativa-container">
            <h2>Oferta Educativa CUH</h2>

            <div class="filters">
                <button class="active" onclick="filterCards('todo')">Todo</button>
                <button onclick="filterCards('preparatoria')">Preparatoria</button>
                <button onclick="filterCards('licenciatura')">Licenciatura</button>
                <button onclick="filterCards('posgrado')">Posgrado</button>
            </div>

            <div class="grid" id="card-grid">
                <div class="card todo preparatoria">
                    <img src="assets/img/prepa/logo.jpg" alt="Preparatoria">
                    <div class="card-content">
                        <h4>Preparatoria</h4>
                        <p>Prepa <strong>CUH</strong></p>
                    </div>
                </div>
                <!-- Más tarjetas aquí -->
            </div>
        </div>
    `;

    // Re-inicializar event listeners
    setTimeout(() => {
        document.querySelectorAll('.filters button').forEach(button => {
            button.addEventListener('click', function() {
                const category = this.textContent.toLowerCase();
                filterCards(category);
            });
        });
    }, 100);
}

// ===== INICIALIZACIÓN DE FILTROS =====
function initializeFilters() {
    const filterButtons = document.querySelectorAll('.filters button');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            let category;
            
            // Intentar obtener la categoría del atributo onclick
            const onclickAttr = this.getAttribute('onclick');
            if (onclickAttr) {
                const match = onclickAttr.match(/filterCards\('([^']+)'\)/);
                if (match) {
                    category = match[1];
                }
            }
            
            // Si no se encuentra en onclick, usar el texto del botón
            if (!category) {
                category = this.textContent.toLowerCase();
            }
            
            filterCards(category);
        });
    });
}

// ===== LIMPIEZA DE RECURSOS =====
function cleanup() {
    // Limpiar todos los intervals de carruseles
    carouselIntervals.forEach((intervalId, container) => {
        clearInterval(intervalId);
    });
    carouselIntervals.clear();
    
    // Detener Swiper si existe
    if (swiperInstance) {
        swiperInstance.destroy(true, true);
        swiperInstance = null;
    }
}

// ===== INICIALIZACIÓN GENERAL =====
function initializeAll() {
    console.log('Inicializando componentes...');
    
    try {
        handleBecaVisibility();
        initializeTabs();
        initializeImageCarousel();
        initializeSwiperCarousel();
        initializeAOS();
        initializeFilters();
        
        console.log('✅ Todos los componentes inicializados correctamente');
        
    } catch (error) {
        console.error('❌ Error durante la inicialización:', error);
    }
}

// ===== EVENT LISTENERS =====
document.addEventListener('DOMContentLoaded', initializeAll);

// Limpiar recursos cuando la página se descargue
window.addEventListener('beforeunload', cleanup);

// Manejo de errores globales
window.addEventListener('error', function(e) {
    console.error('Error global:', e.error);
});

// ===== FUNCIONES GLOBALES =====
window.handleBecaVisibility = handleBecaVisibility;
window.filterCards = filterCards;
window.switchTab = switchTab;
window.respond = respond;
window.loadOfertaEducativa = loadOfertaEducativa;
window.cleanup = cleanup;

// Exportar para módulos (si es necesario)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        handleBecaVisibility,
        filterCards,
        switchTab,
        respond,
        loadOfertaEducativa,
        cleanup
    };
}