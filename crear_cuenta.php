<?php
session_start();
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta | Sitio de los Tralaleros</title>
</head>

<body aria-label="Página de creación de cuenta">
<div class="contenedor-formulario pagina-activa" role="main" aria-label="Formulario de registro">
    <div class="tarjeta-formulario animacion-entrada">
        <h1 class="titulo-formulario" aria-label="Título del formulario: Crear Cuenta">Crear Cuenta</h1>
        
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alerta alerta-error animacion-alerta" role="alert" aria-live="polite" aria-atomic="true">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        
        <form action="php/crear.php" method="POST" class="animacion-formulario" aria-label="Formulario de registro de nueva cuenta">
            <div class="grupo-formulario">
                <label for="nombre_completo" class="etiqueta-formulario">Nombre Completo</label>
                <input type="text" class="entrada-formulario" id="nombre_completo" name="nombre_completo" required 
                       aria-required="true" aria-label="Ingrese su nombre completo">
            </div>
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
            <button type="submit" class="boton-formulario" aria-label="Enviar formulario de registro">Registrarse</button>
        </form>
        
        <div class="pie-formulario animacion-retraso-2" aria-label="Enlace para usuarios existentes">
            ¿Ya tienes cuenta? <a href="iniciar_sesion.php" class="enlace-formulario" aria-label="Ir a página de inicio de sesión">Inicia Sesión</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
