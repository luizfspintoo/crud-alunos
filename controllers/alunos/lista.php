<?php

function listaAlunos($conn)
{
    $sucessoExclusao = '';
    if (!empty($_GET['excluir']) && $_GET['excluir'] == '1' && !empty($_GET['id'])) {
        $conn->delete('alunos', $_GET['id']);
        $sucessoExclusao = "Aluno excluido com sucesso!";
    }
    $sucesso = '';
    if (!empty($_GET['sucesso']) && $_GET['sucesso'] == '1') {
        $sucesso = "Aluno salvo com sucesso!";
    }

    $listaAlunos = $conn->getAll('alunos');
    require_once "views/alunos/lista.php";
}
