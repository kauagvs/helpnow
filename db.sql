    create database helpnow;

    use helpnow;

    create table usuario (
    id int not null primary key auto_increment,
    nome varchar (50) not null,
    email varchar (100) not null,
    senha varchar (32) not null,
    foto varchar (100) null,
    nivel int(1) UNSIGNED NOT NULL DEFAULT '1'
    );

    create table problema (
    id_problema int not null primary key auto_increment,
    id_usuario int not null,
    problema varchar (200) not null,
    data_inclusao datetime default current_timestamp,
    data_alteracao datetime default current_timestamp
    );

    create table historico (
    id_historico int not null primary key auto_increment,
    id_usuario int not null,
    id_problema int not null,
    problema varchar (200) not null,
    data_alteracao datetime default current_timestamp
    );

    insert into usuario (nome, email, senha, nivel) values('admin', 'admin@admin.com', md5('admin'), 2);
    insert into usuario (nome, email, senha, foto) values('user', 'user@user.com', md5('user'), 'user.jpg');
