<?php
/**
 * @var Aluno $aluno
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Formulário de cadastro</title>
  <link rel="stylesheet" href="/public/styles/style.css">
</head>

<body>
  <div class="container">
    <h1>Formulário de cadastro</h1>
    <a href="/alunos">Voltar</a></br>
    <form action="/alunos/cadastro" method="post">
      <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">
      <div class="field">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome" value="<?= $aluno->nome ?? '' ?>">
      </div>
      <div class="field">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Seu e-mail" value="<?= $aluno->email ?? '' ?>">
      </div>
      <div class="field">
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" placeholder="Seu telefone"
          value="<?= $aluno->telefone ?? '' ?>">
      </div>
      <button type="submit">Salvar</button>
      <a id="cancel" href="/alunos">Cancelar</a>
    </form>
  </div>


</body>

</html>