<?php
require_once("conecta.php");

$nome = $_POST["nome"];
$senha = $_POST["senha"];

try {

	$stmt = $conn->prepare("SELECT * FROM `cadastros` WHERE `nome` = :nome AND `senha` = :senha");
	$stmt->bindParam("nome",$nome);
	$stmt->bindParam("senha",$senha);
	$stmt->execute();

	$res = $stmt->fetchAll();
	
	if(count($res) > 0) {	
		foreach ($res as $row) {
			$id = $row['id'];
		}
		if(!isset($_SESSION))
			session_start();
			$_SESSION["id_usuario"] = $id;
			header("Location:adm.php");
  }
  else {
      header("Location:login.php");
  }

} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;
?>
