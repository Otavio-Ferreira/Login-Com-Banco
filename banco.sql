-- Estrutura de criação do banco de dados login

create database login;
use login;

-- Estrutura da tabela userlogin

create table userlogin(
    id int not null auto_increment primary key,
    nomeuser varchar(50) not null,
    senhauser varchar(30) not null,
);