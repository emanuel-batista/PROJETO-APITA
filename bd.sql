create database tccdasgostosas;
use tccdasgostosas;

create table usuario(
	ID_USUARIO int(11) not null auto_increment primary key,
	NOME varchar(60) not null,
    USERNAME varchar(15) unique,
    SENHA varchar(15) not null,
    RANKING tinyint(1) not null default(2),
    FOTO varchar(100),
    created_at timestamp,
    REDE_SOCIAL varchar(200),
    BIO_USUARIO varchar(500),
    ESPORTE_USUARIO varchar(50)
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
	foreign key (id_usuario) references usuario(id_usuario),
    nome_usuario varchar(250) not null,
    CHAMADA_NOTICIA varchar(500),
    update_at date,
    CURTIDA int(5) default(1),
    CAPA varchar(30)
);

create table entrevista(
	ID_ENTREVISTA int(11) auto_increment primary key,
    TITULO_ENTREVISTA varchar(100) not null,
    LINK_ENTREVISTA varchar(45) not null,
	IMG_ENTREVISTA varchar(100) not null,
    ID_USUARIO int(11),
    foreign key (id_usuario) references usuario(id_usuario),
    CONTEUDO_ENTREVISTA varchar(500) not null,
    nome_usuario varchar(250) not null
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

