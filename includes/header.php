<?php
require_once 'config/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro | Tralaleros</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/formularios.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="cabecera-principal">
        <div class="contenedor">
            <div class="contenido-cabecera">
                <a href="index.php" class="logo">Los Tralaleros</a>

                <nav class="navegacion-principal">
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>

                        <?php if(isset($_SESSION['user_id'])): ?>
                            
                            <li style="color: var(--verde-exito); font-weight: 500; display: flex; align-items: center;">
                            <i class="fas fa-user" style="margin-right: 0.5rem;"></i>
                            <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                            </li>

                            <li><a href="usuario.php"><i class="fas fa-tachometer-alt"></i> Panel</a></li>
                            <li><a href="cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
                        <?php else: ?>

                        <li><a href="iniciar_sesion.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></li>
                        <li><a href="crear_cuenta.php"><i class="fas fa-edit"></i> Registrarse</a></li>

                        <?php endif; ?>
                    </ul>
                </nav>
                
            </div>
        </div>
    </header>
    <main>