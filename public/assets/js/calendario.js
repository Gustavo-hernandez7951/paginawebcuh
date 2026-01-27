document.addEventListener('DOMContentLoaded', function() {
    // Lazy load para iframes (solo cargar cuando se abra el acordeón)
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    accordionItems.forEach(item => {
        const button = item.querySelector('.accordion-button');
        const iframe = item.querySelector('iframe');
        
        if (button && iframe) {
            button.addEventListener('click', function() {
                if (!iframe.getAttribute('data-loaded')) {
                    iframe.setAttribute('data-loaded', 'true');
                    console.log('Iframe cargado:', iframe.title);
                }
            });
        }
    });
});