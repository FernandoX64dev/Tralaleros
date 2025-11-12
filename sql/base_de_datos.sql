-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS tralaleros;
USE tralaleros;

-- Tabla de usuarios
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_completo VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);

-- Usuario para prueba
-- correo: pineda@gmail.com
-- contraseña: pineda
INSERT INTO usuarios (nombre_completo, email, contrasena) 
VALUES ('Pinedilo', 'pineda@gmail.com', '$2y$10$OpDNBEAkBVoeKefBYRgzXeBi8NnDBYFad8iRGErC3c9BkfW8xZ4aS');

SELECT * FROM usuarios;
