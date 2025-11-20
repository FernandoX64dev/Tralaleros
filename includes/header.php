<?php
require_once 'config/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/formularios.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="body-load" aria-label="Sitio web oficial de Los Tralaleros">
    <header class="cabecera-principal" role="banner" aria-label="Cabecera principal del sitio">
        <div class="contenedor">
            <div class="contenido-cabecera">
                <a href="index.php" class="logo" aria-label="Los Tralaleros - Ir a página de inicio">Los Tralaleros</a>
                
                <button class="menu-movil-btn" id="menuMovilBtn" 
                        aria-label="Abrir o cerrar menú de navegación" 
                        aria-expanded="false" 
                        aria-controls="navegacionPrincipal"
                        aria-haspopup="true">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>

                <?php include 'nav.php'; ?>
            </div>
        </div>
    </header>
    <main class="contenido-principal" role="main" aria-label="Contenido principal de la página">
