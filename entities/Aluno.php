<?php

class Aluno
{
  public $nome;
  public $id;
  public $email;
  public $telefone;

  public function __construct($id, $nome, $email, $telefone)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->email = $email;
    $this->telefone = $telefone;
  }
}