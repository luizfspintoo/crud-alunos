# CRUD alunos

## Sobre o projeto

Este projeto é um CRUD de alunos, desenvolvido em PHP e MySQL. Ele permite que o usuário cadastre, edite, liste e exclua alunos.

![projeto](https://github.com/luizfspintoo/crud-alunos/assets/122656846/7e8cd4ec-673c-46aa-89a3-345030bf2691)


Tecnologias utilizadas:
- PHP
- MySQL
- PDO
- HTML5
- CSS3
- JavaScript

## Como rodar o projeto

Para rodar o projeto, siga os seguintes passos:

### Com o servidor local Xampp:
- Instale o XAMPP
- Instale o MySQL ou outro banco de dados relacional.
- Clone o projeto crud-alunos dentro do caminho: xampp/htdocs/
- Após clonar, inicie o Xampp: Start em Apache
- Você pode acessar o projeto no navegador pelo endereço http://localhost/crud-alunos

### Com servidor local PHP
- Instale o PHP 7.4 ou superior.
- Instale o MySQL ou outro banco de dados relacional.
- Crie um banco de dados chamado "testeluiz".
- Importe o arquivo alunos.sql para o banco de dados "testeluiz".
- Clone o projeto do GitHub: git clone https://github.com/[seu-usuário]/crud-alunos.git
- Entre na pasta do projeto: cd crud-alunos
- Execute o seguinte comando para iniciar o servidor web embutido do PHP: php -S localhost:8080
- Após executar o comando anterior, o projeto será iniciado na porta 8080. Você pode acessar o projeto no navegador pelo endereço http://localhost:8080.

## Instruções SQL para criar o banco de dados

Para criar o banco de dados, execute o seguinte comando SQL:

CREATE DATABASE testeluiz;
Em seguida, execute o seguinte comando SQL para criar a tabela de alunos:

CREATE TABLE alunos (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(255) NOT NULL,
    email varchar(100) NOT NULL,
    telefone varchar(14) NOT NULL
);


## Explicação da tabela de alunos

A tabela de alunos possui as seguintes colunas:

- id: O ID do aluno.
- nome: O nome do aluno.
- email: O e-mail do aluno.
- telefone: O telefone do aluno.


## Exemplo de uso do projeto

Após rodar o projeto, você poderá acessar a seguinte página:

Página inicial do projeto: index.php

Para cadastrar um novo aluno, clique no botão "Cadastrar". Na página de cadastro.php, insira as informações do aluno e clique no botão "Salvar".

Para ver a lista alunos cadastrados, acesse a página index.php, se houver algum cadastro no banco de dados vai listar os alunos.

Para editar um aluno, clique no botão "Editar" na tabela em index.php ao lado do campo telefone. você será redirecionado para a página de cadastro.php com os campos preenchidos do formulário, com os dados do aluno para a edição.

Para excluir um aluno, clique no botão "Excluir" na tabela em index.php ao lado do campo telefone e do botão editar. Vai aparecer um alerta para a confirmação da exclusão.

## Acesso ao deploy do projeto:
https://luizfelipe.online/
