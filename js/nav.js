document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menuMovilBtn');
    const navegacion = document.getElementById('navegacionPrincipal');
    
    if (menuBtn && navegacion) {
        menuBtn.addEventListener('click', function() {
            navegacion.classList.toggle('menu-abierto');
            // Cambiar ícono
            const icono = this.querySelector('i');
            if (navegacion.classList.contains('menu-abierto')) {
                icono.classList.remove('fa-bars');
                icono.classList.add('fa-times');
            } else {
                icono.classList.remove('fa-times');
                icono.classList.add('fa-bars');
            }
        });
        
        // Cerrar menú al hacer clic en un enlace (móvil)
        const enlaces = navegacion.querySelectorAll('a');
        enlaces.forEach(enlace => {
            enlace.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    navegacion.classList.remove('menu-abierto');
                    menuBtn.querySelector('i').classList.remove('fa-times');
                    menuBtn.querySelector('i').classList.add('fa-bars');
                }
            });
        });
    }
});