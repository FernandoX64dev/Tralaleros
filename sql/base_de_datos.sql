-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS tralaleros;
USE tralaleros;

-- Tabla de usuarios
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_completo VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultimo_login TIMESTAMP NULL,
    activo TINYINT(1) DEFAULT 1
);

-- Usuario para prueba
INSERT INTO usuarios (nombre_completo, email, contrasena) 
VALUES ('Usuario Demo', 'demo@tralaleros.com', '$2y$10$TuHashDeContraseñaAquí');