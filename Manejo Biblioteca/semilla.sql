create database semilla;
use semilla;

create table materiales(
ISBN_ISSN  int not null primary key,
titulo varchar (100) not null,
autor varchar (100) not null,
nombre_institucion varchar (100),
nombre_conferencia varchar (100),
edicion varchar (100),
ciudad text (200),
editorial varchar (100),
año_publicacion varchar (100),
numero_pagina varchar (10) not null,
serie varchar (50),
nota_general varchar (300),
materia text (100),
coautores varchar (100),
vol varchar (100) not null,
biblioteca text (200) not null,
coleccion text (200) not null,
tipo_material varchar (200) not null, 
verficar varchar (30),
ubicacion varchar (100),
rotulo varchar (50),
unidades int not null);