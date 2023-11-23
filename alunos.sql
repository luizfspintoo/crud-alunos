/*3° coloquei o nome do arquivo de banco de dados de alunos.sql*/
create table alunos (
	id int not null auto_increment primary key,
    nome varchar(255) not null,
    email varchar(100) not null,
    telefone varchar(14) not null
);