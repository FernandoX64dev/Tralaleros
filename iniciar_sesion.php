<?php
session_start();
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | Sitio de los Tralaleros</title>
</head>

<body aria-label="Página de inicio de sesión">
<div class="contenedor-formulario pagina-activa" role="main" aria-label="Formulario de inicio de sesión">
    <div class="tarjeta-formulario animacion-entrada">
        <h1 class="titulo-formulario" aria-label="Título del formulario: Iniciar Sesión">Iniciar Sesión</h1>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alerta alerta-error animacion-alerta" role="alert" aria-live="polite" aria-atomic="true">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        
        <form action="php/iniciar.php" method="POST" class="animacion-formulario" aria-label="Formulario de inicio de sesión">
            <div class="grupo-formulario">
                <label for="email" class="etiqueta-formulario">Email</label>
                <input type="email" class="entrada-formulario" id="email" name="email" required 
                       aria-required="true" aria-label="Ingrese su dirección de correo electrónico">
            </div>
            <div class="grupo-formulario">
                <label for="contrasena" class="etiqueta-formulario">Contraseña</label>
                <input type="password" class="entrada-formulario" id="contrasena" name="contrasena" required 
                       aria-required="true" aria-label="Ingrese su contraseña">
            </div>
            <button type="submit" class="boton-formulario" aria-label="Enviar formulario de inicio de sesión">Iniciar Sesión</button>
        </form>
        
        <div class="pie-formulario animacion-retraso-2" aria-label="Enlace para nuevos usuarios">
            ¿No tienes cuenta? <a href="crear_cuenta.php" class="enlace-formulario" aria-label="Ir a página de registro de cuenta">Registrate</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
