<?php
session_start();
require_once __DIR__ . '/../config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Database();
    $db = $database->getConnection();
    
    $email = trim($_POST['email']);
    $contrasena = $_POST['contrasena'];
    
    if (empty($email) || empty($contrasena)) {
        $_SESSION['error'] = "Email y contraseña son obligatorios";
        header('Location: ../iniciar_sesion.php');
        exit;
    }
    
    try {
        $query = "SELECT id, nombre_completo, email, contrasena FROM usuarios WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        
        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($contrasena, $usuario['contrasena'])) {
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_name'] = $usuario['nombre_completo'];
                $_SESSION['user_email'] = $usuario['email'];
                
                header('Location: ../usuario.php');
            } else {
                $_SESSION['error'] = "Contraseña incorrecta";
                header('Location: ../iniciar_sesion.php');
            }
        } else {
            $_SESSION['error'] = "No existe una cuenta con este email";
            header('Location: ../iniciar_sesion.php');
        }
        
    } catch(PDOException $exception) {
        $_SESSION['error'] = "Error del sistema: " . $exception->getMessage();
        header('Location: ../iniciar_sesion.php');
    }
    
    exit;
}
?>