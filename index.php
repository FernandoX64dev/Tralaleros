<?php
session_start();
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Sitio de los Tralaleros</title>
</head>

<body aria-label="Página de inicio del equipo Tralaleros">
<main role="main" aria-label="Contenido principal">
    <section class="hero pagina-activa" aria-label="Sección de bienvenida">
        <div class="contenedor">
            <h1 class="titulo-hero animacion-entrada" aria-label="Bienvenido al sitio del equipo Tralaleros">Bienvenido al sitio del equipo Tralaleros</h1>
            <p class="subtitulo-hero animacion-entrada animacion-retraso-1" aria-label="Descripción: Gestiona tus usuarios">
                Gestiona tus usuarios. <i class="fas fa-fish" aria-hidden="true"></i>
            </p>
        </div>
    </section>

    <!-- Características -->
    <section class="caracteristicas" aria-labelledby="caracteristicas-titulo">
        <div class="contenedor">
            <h2 id="caracteristicas-titulo" class="texto-centro animacion-entrada animacion-retraso-2">Los Tralaleros</h2>
            <div class="grid-caracteristicas">
                <div class="tarjeta-caracteristica animacion-entrada animacion-retraso-3" aria-label="Característica: Seguro">
                    <div class="icono-caracteristica">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Seguro</h3>
                    <p class="texto-caracteristica">
                        Tus datos están protegidos con seguridad y encriptación.
                    </p>
                </div>
                <div class="tarjeta-caracteristica animacion-entrada animacion-retraso-4" aria-label="Característica: Rápido">
                    <div class="icono-caracteristica">
                        <i class="fas fa-bolt" aria-hidden="true"></i>
                    </div>
                    <h3 class="titulo-caracteristica">Rápido</h3>
                    <p class="texto-caracteristica">
                        Procesamiento ágil y respuestas para una mejor experiencia de usuario.
                    </p>
                </div>
                <div class="tarjeta-caracteristica animacion-entrada animacion-retraso-5" aria-label="Característica: Fácil de usar">
                    <div class="icono-caracteristica">
                        <i class="fas fa-mouse-pointer" aria-hidden="true"></i>
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
