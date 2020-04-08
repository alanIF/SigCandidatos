create database sig_candidatos;
use sig_candidatos;

create table usuario( 
	id int auto_increment not null,
	nome varchar(200) not null,
	email varchar(200) not null,
	senha varchar(200) not null,
	primary key(id)
);

create table candidato(
	id int auto_increment not null,
	nome text not null,
	descricao text, 
	partido text,
	data_nascimento text,
	rede_social text,   
        foto text,
        visitas int,    
        cargo text,
	primary key(id)
); 


create table proposta(
	id int auto_increment not null,
	id_candidato int not null,
	titulo text not null,
	descricao text not null,
	primary key(id),
	foreign key(id_candidato) references candidato(id)
);

create table conquista(
	id int auto_increment not null,
	id_candidato int not null,
	titulo text not null,
	descricao text not null,
	primary key(id),
	foreign key(id_candidato) references candidato(id)
);

create table denuncia(
	id int auto_increment not null,
	nome_reclamante text not null,
	nome_denuciado text not null, 
	descricao text, 
	data_denuncia text,
        situacao int,
	primary key(id)

);
