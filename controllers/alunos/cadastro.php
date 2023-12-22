<?php

/** 
 * @param DatabaseConnection $conn
 * */
function carregaCadastro($conn)
{
  if (!empty($_GET['id'])) {
    $aluno = $conn->get('alunos', $_GET['id']);
    //TODO se aluno veio false = Aluno não encontrado.
  }

  if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['id'])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "UPDATE alunos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
    $result = $conn->query($sql);
    //usar o prepare();

    if ($result->rowCount() > 0) {
      header('Location: /alunos?sucesso=1');
    } else {
      echo "Falha ao editar o aluno";
    }
  } else if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone'])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "INSERT INTO alunos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    $result = $conn->query($sql);
    //usar o prepare();

    if ($result->rowCount() > 0) {
      header('Location: /alunos?sucesso=1');
    } else {
      echo "Falha ao inserir o aluno";
    }
  }

  require_once 'views/alunos/cadastro.php';
}