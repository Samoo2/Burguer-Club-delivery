<?php
require("conecta.php");

$id = $_GET["id"];

$nome = $_POST["nome"];
$senha = $_POST["senha"];

try {


  $stmt = $conn->prepare("UPDATE `cadastros` SET nome = :nome, senha = :senha WHERE id = $id");
  $stmt->bindParam("nome",$nome);
  $stmt->bindParam("senha",$senha);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . "Registro atualizado com sucesso<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<a href="listar.php">Ver usuários cadastrados</a>