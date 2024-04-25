create database bdprosegur;
use bdprosegur;
create table panel_tbl(
id_panel int not null auto_increment,
nombrePanel varchar(45),
primary key(id_panel),
unique (id_panel,nombrePanel))auto_increment=1;

insert into panel_tbl values(null,"Neo");
insert into panel_tbl values(null,"Dsc");
insert into panel_tbl values(null,"Proview V3");
insert into panel_tbl values(null,"Camara Manager");
insert into panel_tbl values(null,"Climax");

create table ingreso (
id_ingreso int not null auto_increment primary key,
Contrato varchar(50) not null,
Usuario varchar (50) not null,
id_panel int,
fecha datetime,
Comentarios varchar (500),
FOREIGN KEY (id_panel) REFERENCES panel_tbl(id_panel));

create table Login(usuario varchar(45) not null,contrasena varchar(20) not null);
insert into Login(usuario,contrasena) values("Administrador","Prosegur123");

