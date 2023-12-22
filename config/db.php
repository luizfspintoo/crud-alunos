<?php

class DatabaseConnection
{
  private $connection;

  public function __construct($servername, $dbname, $username, $password)
  {
    try {
      $this->connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  /**
   * @param string $table
   * @return array[]
   * Lista todos os registros de uma tabela
   */
  public function getAll($table)
  {
    $sql = "SELECT * FROM $table";
    $prep = $this->connection->prepare($sql);
    $prep->execute();
    return $prep->fetchAll();
  }

  public function delete($table, $id)
  {
    $sql = "DELETE FROM $table WHERE id=?";
    $prep = $this->connection->prepare($sql);
    $prep->execute([$id]);
  }

  public function get($table, $id)
  {
    $sql = "SELECT * FROM $table WHERE id=?";
    $prep = $this->connection->prepare($sql);
    $prep->execute([$id]);
    return $prep->fetch();
  }
}