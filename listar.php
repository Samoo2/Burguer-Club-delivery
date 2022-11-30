<?php
require_once("conecta.php");


try {
  $stmt = $conn->prepare("SELECT id, nome, email, senha, endereco FROM cadastros"); 
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

  foreach($stmt->fetchAll() as $k=>$v) { 
 
    echo("<p>Nome: ".$v['nome'].", 
              Email: ".$v['email']."
              <a href='atualizar.php?id=".$v['id']."'>Editar</a>
              <a href='excluir.php?id=".$v['id']."'>Excluir</a>
              </p>");
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<p><a href="formulario.php"> Incluir novo usuário </a></p>