<?php
include './db.php';

if (!empty($_GET['id'])) {
  $sql = "SELECT * FROM alunos WHERE id=?";

  $prep = $conn->prepare($sql);
  $prep->execute([$_GET['id']]);

  //adicionar try catch quando falhar
  $aluno = $prep->fetch();

  //se aluno veio false = Aluno não encontrado.
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Formulário de cadastro</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1>Formulário de cadastro</h1>
    <form action="./cadastro.php" method="post">
      <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">
      <div class="field">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome" value="<?= $aluno['nome'] ?? '' ?>">
      </div>
      <div class="field">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Seu e-mail" value="<?= $aluno['email'] ?? '' ?>">
      </div>
      <div class="field">
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" placeholder="Seu telefone" value="<?= $aluno['telefone'] ?? '' ?>">
      </div>
      <button type="submit">Salvar</button>
      <a id="cancel" href="./index.php">Cancelar</a>
    </form>
  </div>

  <?php

  if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['id'])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "UPDATE alunos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
    $result = $conn->query($sql);
    //usar o prepare();

    if ($result->rowCount() > 0) {
      header('Location: index.php?sucesso=1');
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
      header('Location: index.php?sucesso=1');
    } else {
      echo "Falha ao inserir o aluno";
    }
  }

  ?>
</body>

</html>