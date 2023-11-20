<?php
include './db.php';

$sucessoExclusao = '';
if (!empty($_GET['excluir']) && $_GET['excluir'] == '1' &&  !empty($_GET['id'])) {
    $sql = "DELETE FROM alunos WHERE id=?";
    $prep = $conn->prepare($sql);
    $prep->execute([$_GET["id"]]);

    $sucessoExclusao = "Aluno excluido com sucesso!";
    //usar try catch
}

$sucesso = '';
if (!empty($_GET['sucesso']) && $_GET['sucesso'] == '1') {
    $sucesso = "Aluno salvo com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Lista de contatos</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <div class="container">
        <h1>Lista de Alunos</h1>
        <a class="cad" href="./cadastro.php">Cadastrar +</a>

        <!-- equivale ao echo -->
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
                $sql = "SELECT * FROM alunos";
                $prep = $conn->prepare($sql);
                $prep->execute();
                foreach ($prep->fetchAll() as $row) {
                    // Exiba os resultados
                    echo "<tr>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["telefone"] . "</td>";
                    echo "<td>
                        <a href='./cadastro.php?id={$row['id']}' class='edit'>Editar</a>
                        <button onclick='excluir({$row['id']})'>Excluir</button>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script>
        function excluir(id) {
            const confirma = confirm("Deseja excluir aluno");
            if (confirma) {
                location.href = 'index.php?excluir=1&id=' + id;
            }
        }
    </script>
</body>

</html>