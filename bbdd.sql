CREATE DATABASE servicios;

Use servicios;

CREATE TABLE clientes (
	id INT auto_increment primary key,
    nombrecliente varchar (50) NOT NULL,
    telefono varchar (100) NOT NULL,
    identificacion int NOT NULL,
    servicio varchar (50) NOT NULL,
    observaciones varchar (500),
    total int NOT NULL
);