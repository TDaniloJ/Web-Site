create database VendasSite;
use VendasSite;

create table clientes (
    id_cliente int auto_increment primary key,
    cli_nome varchar(100),
    cli_senha varchar(100),
    cli_email varchar(100),
    cli_telefone varchar(50),
    cli_endereco varchar(50),
    cli_numero_casa int,
    cli_bairro varchar(100)
);