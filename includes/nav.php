<nav class="navegacion-principal" id="navegacionPrincipal" aria-label="Navegación principal">
    <ul class="menu-lista">

    <?php if(isset($_SESSION['user_id'])): ?>

        <li class="usuario-info">
            <span class="nombre-usuario">
            <i class="fas fa-user"></i>
            <?php echo htmlspecialchars($_SESSION['user_name']); ?>
            </span>
        </li>
    
    <?php endif; ?>

        <li><a href="index.php" aria-label="Ir a página de inicio"><i class="fas fa-home"></i> <span>Inicio</span></a></li>

        <?php if(isset($_SESSION['user_id'])): ?>

            <li><a href="usuario.php" aria-label="Acceder al panel de usuario"><i class="fas fa-tachometer-alt"></i> <span>Panel</span></a></li>
            <li><a href="cerrar_sesion.php" aria-label="Cerrar sesión de usuario"><i class="fas fa-sign-out-alt"></i> <span>Cerrar Sesión</span></a></li>
        <?php else: ?>

        
            <li><a href="iniciar_sesion.php" aria-label="Iniciar sesión en la cuenta"><i class="fas fa-sign-in-alt"></i> <span>Iniciar Sesión</span></a></li>
            <li><a href="crear_cuenta.php" aria-label="Crear una nueva cuenta"><i class="fas fa-edit"></i> <span>Registrarse</span></a></li>
        <?php endif; ?>
    </ul>
</nav>

<script src="js/nav.js"></script>