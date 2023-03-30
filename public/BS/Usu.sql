create database login ;

create table Persona (
id_Persona int auto_increment primary key,
Nombre varchar (50) not null,
Numero varchar (11) not null,
Email varchar (50) not null,
contraseña varchar (40) not null,
metodo varchar(4)
);

