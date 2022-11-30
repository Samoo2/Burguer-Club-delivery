<?php
require_once("conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco = $_POST["endereco"];

try {

	$stmt = $conn->prepare("INSERT INTO `cadastros` (`id`, `nome`, `email`, `senha`, `endereco`) VALUES (NULL, :nome, :email, :senha, :endereco);");
	$stmt->bindParam("nome",$nome);
	$stmt->bindParam("email",$email);
	$stmt->bindParam("senha",$senha);
    $stmt->bindParam("endereco",$endereco); 
	
	if($stmt->execute()){
		header("Location:user.php");
	}
	else{
		header("Location:formulario.php?msg=Erro na inclusão do usuário!");
	}

} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;
?>