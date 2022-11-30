<?php
require_once("conecta.php");

$nome = $email = $senha = $endereco = "";


try {
  $stmt = $conn->prepare("SELECT nome, email, senha, endereco FROM cadastros WHERE id = $id"); 
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

  foreach($stmt->fetchAll() as $k=>$v) { 
    $nome = $v['nome'];
    $email = $v['email'];
    $senha = $v['senha'];
    $endereco = $v['endereco']; 
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>