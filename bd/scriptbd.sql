
CREATE TABLE roles (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(50) NOT NULL
);

CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
	usuario VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	rol_id INT NOT NULL,
	FOREIGN KEY (rol_id) REFERENCES roles(id)
);

CREATE TABLE productos (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(100) NOT NULL,
	descripcion TEXT,
	precio DECIMAL(10,2) NOT NULL,
	stock INT NOT NULL DEFAULT 0
);

CREATE TABLE ventas (
	id INT AUTO_INCREMENT PRIMARY KEY,
	usuario_id INT NOT NULL,
	fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
	total DECIMAL(10,2) NOT NULL,
	FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

CREATE TABLE detalle_venta (
	id INT AUTO_INCREMENT PRIMARY KEY,
	venta_id INT NOT NULL,
	producto_id INT NOT NULL,
	cantidad INT NOT NULL,
	precio_unitario DECIMAL(10,2) NOT NULL,
	FOREIGN KEY (venta_id) REFERENCES ventas(id),
	FOREIGN KEY (producto_id) REFERENCES productos(id)
);


INSERT INTO roles (nombre) VALUES ('admin'), ('cliente');
INSERT INTO usuarios (usuario, password, nombre, rol_id) VALUES ('admin@correo.com', 'admin123', 'Administrador', 1);
