drop  DATABASE motivado;
create database motivado;

use motivado;
show tables;
  


show tables;
create table noticias(
    cod int primary key auto_increment not null,
    foto varchar(30),
    Titulo varchar(30),
    comentario text,
    tipo_noticias int(3)
    );
    delete from centro where id_centro = 2;
create table tipo_noticia(
cod_noticias int primary key auto_increment not null,
tipo varchar(30)
);
create table profesor(
    id_prof int primary key auto_increment not null,
    foto varchar(30),
    nombre varchar(30),
    apellido varchar(30),
    edad int(30),
    contacto varchar(30),
    email varchar(30),
    ubicacion varchar(30)
);


alter table profesor add nivel_academico varchar(45);
create table estudiante(
    id_estudiantes int primary key auto_increment not null,
    foto varchar(30),
    nombre varchar(30),
    apellido varchar(30),
    edad int(30),
    tutor varchar(30),
    telf_tutor varchar(30),
    Ubicacion VARCHAR(30)
);

alter table estudiante add correo varchar(45);

create table curso(
    id_curso int primary key auto_increment not null,
    nombre varchar(30),
    duracion int(30),
    profesor int(30),
    foreign key (profesor) references profesor(id_prof),
    estudiante int (11) not null,
    Foreign Key (estudiante) REFERENCES estudiante (id_estudiantes),
    tarifa int(11) not null,
    Foreign Key (tarifa) REFERENCES Precio(idtarifa),
    asignatura int(11) not null,
    Foreign Key (asignatura) REFERENCES asignaturas (idasignatura)
);


CREATE TABLE asignaturas(
    idasignatura int primary key AUTO_INCREMENT,
    nombre_asignatura varchar(45)
);
alter table asignaturas add estudianteId int;
ALTER table asignaturas ADD FOREIGN KEY(id_profesor) REFERENCES profesor(id_prof);
ALTER table asignaturas ADD FOREIGN KEY(estudianteId) REFERENCES estudiante(id_estudiantes);
create table Precio(
    idtarifa int primary key auto_increment not null,
    cantidad float
);
describe profesor;
create table usuario(
    id_usuario int primary key auto_increment not null,
    nombre varchar(30),
    apellido varchar(30),
    email varchar(30),
    pass varchar(30),
    tipo varchar(30)
);



create table centro(
    id_centro int primary key auto_increment not null,
    foto VARCHAR(30),
    nombre varchar(30),
    direccion varchar(30),
    telefono varchar(30),
    email varchar(30),
    informacion varchar(30)
);

ALTER table centro add representante varchar(45);
create table Interesados (
    id_interesado int primary key AUTO_INCREMENT NOT NULL,
    foto VARCHAR(30),
    nombre varchar(45),
    apellidos varchar(45),
    direccion varchar(45),
    telefono varchar(30),
    email varchar(30),
    adjuntar varchar(30)
);
CREATE TABLE Salario (
    id_salario INT PRIMARY KEY AUTO_INCREMENT not null,
    monto DECIMAL(10, 2),
    fecha DATE,
    profesor INT,
    FOREIGN KEY (profesor) REFERENCES profesor(id_prof)
);
