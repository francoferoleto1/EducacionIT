create database nueva;
use nueva;

create table Autos(
	marca varchar(40),
    precio int not null,
    año int not null,
    modelo varchar(20) primary key,
    tipo varchar(20)
);

insert into Autos (marca, precio, año, modelo, tipo) value ('Audi', 2120000, 2014, 'A1', 'Deportivo');

select marca, modelo, (precio*1.15) as Precio_Nuevo from Autos;
