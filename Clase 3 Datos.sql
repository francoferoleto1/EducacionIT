create database merca;
use merca;

create table mercaderia(
	id int unsigned not null auto_increment primary key,
    nombre varchar (25) not null,
    precio int not null,
    marca varchar (15),
    categoria varchar(30),
    presentacion varchar(30),stock int not null,
    disponible varchar(2)
    
); 

insert into mercaderia (nombre, precio, marca, categoria, presentacion, stock, disponible) value ('Juice Maker', 500, 'Phillips', 'Licuadora','En Caja',100,'NO'); 

delete from mercaderia where precio>2000 and precio<3000;

select marca, (precio*1.15) as precionuevo from mercaderia having precionuevo>1000;

select count(*) as conteo from mercaderia;

select max(precio) as maximo_preciovich from mercaderia;

select max(stock) as maxi_stock from mercaderia;

select min(precio) as precio_minimo from mercaderia;

select sum(stock) as toda_la_guita from mercaderia;

select sum(stock*precio) as inversion_total from mercaderia;

select avg(precio) as promedio from mercaderia;

select marca, count(marca) as cantidad from mercaderia group by marca; 