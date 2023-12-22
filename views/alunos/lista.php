<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Lista de contatos</title>
  <link rel="stylesheet" href="public/styles/table.css">
</head>

<body>
  <div class="container">
    <h1>Lista de Alunos</h1>
    <a class="cad" href="/alunos/cadastro">Cadastrar +</a>

    <?= $sucesso ?>
    <?= $sucessoExclusao ?>

    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th class="action">Ação</th>
        </tr>
        <?php
        /** @var Aluno $aluno */
        foreach ($listaAlunos as $aluno) {
          ?>
          <tr>
            <td>
              <?= $aluno->nome ?>
            </td>
            <td>
              <?= $aluno->email ?>
            </td>
            <td>
              <?= $aluno->telefone ?>
            </td>
            <td>
              <a href="/alunos/cadastro?id=<?= $aluno->id ?>" class="edit">Editar</a>
              <button onclick="excluirAluno(<?= $aluno->id ?>)">Excluir</button>
            </td>
          </tr>
          <?php
        } ?>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  <script src="public/scripts/alunos.js"></script>
</body>

</html>