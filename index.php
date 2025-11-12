<?php
session_start();
include 'includes/header.php';
?>

<main>
    <!-- Sección Hero -->
    <section class="hero">
        <div class="contenedor">
            <h1 class="titulo-hero">Bienvenido al sitio del equipo Tralaleros</h1>
            <p class="subtitulo-hero">
                Gestiona tus usuarios. <i class="fas fa-fish"></i>
            </p>
        </div>
    </section>

    <!-- Sección Características -->
    <section class="caracteristicas">
        <div class="contenedor">
            <h2 class="texto-centro">Los Tralaleros</h2>
            <div class="grid-caracteristicas">
                <div class="tarjeta-caracteristica">
                    <div class="icono-caracteristica">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Seguro</h3>
                    <p class="texto-caracteristica">
                        Tus datos están protegidos con seguridad y encriptación.
                    </p>
                </div>
                <div class="tarjeta-caracteristica">
                    <div class="icono-caracteristica">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Rápido</h3>
                    <p class="texto-caracteristica">
                        Procesamiento ágil y respuestas para una mejor experiencia de usuario.
                    </p>
                </div>
                <div class="tarjeta-caracteristica">
                    <div class="icono-caracteristica">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Fácil de usar</h3>
                    <p class="texto-caracteristica">
                        Interfaz diseñada para que cualquier persona pueda utilizarla sin complicaciones.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>