create database tccdasgostosas;
use tccdasgostosas;

create table usuario(
	ID_USUARIO int(11) not null auto_increment primary key,
	NOME varchar(60) not null,
    USERNAME varchar(15) unique,
    SENHA varchar(15) not null,
    RANKING tinyint(1) not null default(2),
    FOTO varchar(100),
    created_at timestamp

);

create table noticia(
	ID_NOTICIA int(11) not null auto_increment primary key,
    TITULO_NOTICIA varchar(100) not null,
    CONTEUDO_NOTICIA mediumtext not null,
    IMG_NOTICIA varchar(100) not null,
    CATEGORIA_NOTICIA varchar(45) not null,
    PUBLICADO_NOTICIA boolean,
    created_at timestamp,
    id_usuario int(11) not null,
	foreign key (id_usuario) references usuario(id_usuario)
);

create table entrevista(
	ID_ENTREVISTA int(11) auto_increment primary key,
    TITULO_ENTREVISTA varchar(100) not null,
    LINK_ENTREVISTA varchar(45) not null,
	IMG_ENTREVISTA varchar(100) not null,
    ID_USUARIO int(11),
    foreign key (id_usuario) references usuario(id_usuario)
);

create table comentario(
	ID_COMENTARIO int(11) primary key auto_increment,
    CONTEUDO_COMENTARIO varchar(250),
    ID_USUARIO int(11),
    ID_NOTICIA int(11),
    ID_ENTREVISTA int(11),
	foreign key (id_usuario) references usuario(id_usuario),
	foreign key (id_noticia) references noticia(id_noticia)
);

insert into usuario(nome, username, senha, ranking, foto, created_at) values('admin', 'admin', 'admin', 0, 'admin.jpg', now());
insert into noticia(titulo_noticia, conteudo_noticia, img_noticia, categoria_noticia, publicado_noticia, created_at, id_usuario) values('Noticia 1', 'Conteudo da noticia 1', 'noticia1.jpg', 'noticia', 1, now(), 1);
