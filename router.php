<?php

class Router
{
  function __construct($conn)
  {
    if (empty($_GET['route'])) {
      header('Location: /alunos');
    } else {
      $route = $_GET['route'];
    }

    // router
    switch ($route) {
      case 'alunos/cadastro':
        carregaCadastro($conn);
        break;
      case 'alunos':
        listaAlunos($conn);
        break;
      default:
        echo $_GET['route'] . ' não existe';
        break;
    }
  }
}