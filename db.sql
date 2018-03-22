    create database helpnow;

    use helpnow;

    create table usuario_cadastro (
    id int not null primary key auto_increment,
    nome varchar (50) not null,
    email varchar (100) not null,
    senha varchar (32) not null
    );

    create table help_cadastro (
    id_problema int not null primary key auto_increment,
    problema varchar (200) not null,
    descricao varchar (200) not null,
    status varchar (200) not null,
    );


    insert into usuario (nome, email, senha, nivel) values('admin', 'admin@admin.com', md5('admin'), 2);
    insert into usuario (nome, email, senha, foto) values('user', 'user@user.com', md5('user'), 'user.jpg');
