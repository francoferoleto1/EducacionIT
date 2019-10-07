create database empresita;
use empresita;

create table Clientes(
	nombre varchar(40),
    apellido int not null,
    clienteID int not null primary key,
    cuit int not null,
    direccion varchar(20),
    comentarios varchar(50)
);

create table Facturas(
	tipo enum('A','B','C'),
    numero int not null,
    clienteID int not null primary key,
    articuloID int not null,
    monto int unsigned not null,
    fecha date
);


insert into Clientes (nombre, apellido, clienteID, cuit, direccion) value ('Jorge', 'Garcia', 1, 23408798796, 'Lavalle 643');

select marca, modelo, (precio*1.15) as Precio_Nuevo from Autos;


