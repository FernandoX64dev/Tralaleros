<?php
session_start();
require_once __DIR__ . '/../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Database();
    $db = $database->getConnection();
    
    $nombre = trim($_POST['nombre_completo']);
    $email = trim($_POST['email']);
    $contrasena = $_POST['contrasena'];
    
    // Validaciones
    if (empty($nombre) || empty($email) || empty($contrasena)) {
        $_SESSION['error'] = "Todos los campos son obligatorios";
        header('Location: ../crear_cuenta.php');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "El formato del email no es válido";
        header('Location: ../crear_cuenta.php');
        exit;
    }
    
    try {
        // Verificar si email ya existe
        $query = "SELECT id FROM usuarios WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $_SESSION['error'] = "Este email ya está registrado";
            header('Location: ../crear_cuenta.php');
            exit;
        }
        
        // Hash de contraseña
        $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);
        
        // Insertar usuario
        $query = "INSERT INTO usuarios (nombre_completo, email, contrasena) VALUES (:nombre, :email, :contrasena)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":contrasena", $contrasena_hash);
        
        if ($stmt->execute()) {
            $_SESSION['exito'] = "¡Cuenta creada exitosamente! Ahora puedes iniciar sesión";
            header('Location: ../iniciar_sesion.php');
        } else {
            $_SESSION['error'] = "Error al crear la cuenta";
            header('Location: ../crear_cuenta.php');
        }
        
    } catch(PDOException $exception) {
        $_SESSION['error'] = "Error del sistema: " . $exception->getMessage();
        header('Location: ../crear_cuenta.php');
    }
    
    exit;
}
?>