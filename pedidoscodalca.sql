create database pedidoscodalca;
show databases;
use pedidoscodalca;
create table pedidos(
cedula bigint,
nombre varchar(40),
direccion varchar(50),
telefono int,
pedido varchar(500),
correo varchar (30));
drop table pedidos;
show tables;