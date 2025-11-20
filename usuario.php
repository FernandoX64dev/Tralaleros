<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: iniciar_sesion.php');
    exit;
}

include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario | Sitio de los Tralaleros</title>
</head>

<body aria-label="Panel de usuario">
<div class="contenedor pagina-activa" style="display: flex; justify-content: center; align-items: center; min-height: 80vh; padding: 2rem 0;" role="main" aria-label="Contenido principal del panel de usuario">
    <div class="tarjeta-formulario animacion-entrada" style="margin: 0 auto;" aria-labelledby="titulo-bienvenida">
        <h2 id="titulo-bienvenida" class="titulo-formulario" aria-label="Mensaje de bienvenida al usuario">
            ¡Bienvenido, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!
        </h2>
        <p style="text-align: center; color: var(--texto-secundario); margin-bottom: 1.5rem;" aria-label="Confirmación de inicio de sesión exitoso">
            Has iniciado sesión correctamente.
        </p>
        
        <div style="background-color: var(--fondo); padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem;" 
             class="animacion-retraso-1" 
             aria-labelledby="info-usuario-titulo"
             role="region">
            <h3 id="info-usuario-titulo" style="color: var(--morado-principal); margin-bottom: 0.5rem; text-align: center;" aria-label="Título de la sección de información del usuario">
                Tu información:
            </h3>
            <div role="list" aria-label="Detalles de la información del usuario">
                <p style="text-align: center;" role="listitem" aria-label="Nombre del usuario">
                    <strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                </p>
                <p style="text-align: center;" role="listitem" aria-label="Correo electrónico del usuario">
                    <strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?>
                </p>
                <p style="text-align: center;" role="listitem" aria-label="Identificador único del usuario">
                    <strong>ID de usuario:</strong> <?php echo $_SESSION['user_id']; ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
