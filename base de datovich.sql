create database empresita;
use empresita;

create table Clientes(
	nombre varchar(40),
    apellido varchar(40) not null,
    clienteID int not null primary key,
    cuit int not null,
    direccion varchar(20),
    comentarios varchar(50)
);

create table Facturas(
	letra enum('A','B','C') not null,
    numero int not null,
    clienteID int not null primary key,
    articuloID int not null,
    monto int unsigned not null,
    fecha date
);


insert into Clientes ( ClienteID, Nombre, Apellido, Cuit, Direccion, Comentarios) values (6, 'Agustin' , 'Diaz'  , '20-35987452-0', 'Lima 458'    , NULL);
insert into Clientes ( ClienteID, Nombre, Apellido, Cuit, Direccion, Comentarios) values (7, 'Angela'  , 'Lopez' , '20-37987854-0', 'Peru 32'     , NULL);
insert into Clientes ( ClienteID, Nombre, Apellido, Cuit, Direccion, Comentarios) values (8, 'Cristian', 'Fraga' , '20-36887498-0', 'Chile 6985'  , NULL);
insert into Clientes ( ClienteID, Nombre, Apellido, Cuit, Direccion, Comentarios) values (9, 'Sol'     , 'Cabral', '20-25982495-0', 'Lavalle 1201', NULL);
insert into Clientes ( ClienteID, Nombre, Apellido, Cuit, Direccion, Comentarios) values (10, 'Ezequiel', 'Perez' , '20-21987111-0', 'Uruguay 25'  , NULL);

insert into facturas(Letra, Numero, ClienteID, ArticuloID, Fecha, Monto) values ('A', 1, 6, 6, '2011/10/18', 500);
insert into facturas(Letra, Numero, ClienteID, ArticuloID, Fecha, Monto) values ('A', 2, 7, 7, '2011/10/18', 2500);
insert into facturas(Letra, Numero, ClienteID, ArticuloID, Fecha, Monto) values ('A', 3, 8, 8, '2011/10/18', 320);
insert into facturas(Letra, Numero, ClienteID, ArticuloID, Fecha, Monto) values ('A', 4, 9, 9, '2011/10/18', 120);
insert into facturas(Letra, Numero, ClienteID, ArticuloID, Fecha, Monto) values ('A', 5, 10, 10, curdate()   , 300);

select * from clientes, facturas;

select * from clientes where nombre='Ezequiel';

select * from facturas;

select marca, modelo, (precio*1.15) as Precio_Nuevo from Autos;


