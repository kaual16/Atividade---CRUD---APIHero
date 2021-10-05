create database dbherois CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbherois;

create table tbherois(
ProCod int not null auto_increment,
ProNome varchar(100),
ProCategoria varchar(100),
PorMarca varchar(100),
PorPreco float,
PorEstoque int,
primary key(codPro))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;