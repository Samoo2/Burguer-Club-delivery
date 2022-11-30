<?php
require("conecta.php");
include("verifica.php");

$id = $nome = $email = $senha = $endereco = "";

if (!isset($_SESSION))
  session_start();
$id = $_SESSION["id_usuario"];

try {
  $stmt = $conn->prepare("SELECT nome, email, senha, endereco FROM cadastros WHERE id = $id");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  foreach ($stmt->fetchAll() as $k => $v) {
    $nome = $v['nome'];
    $email = $v['email'];
    $senha = $v['senha'];
    $endereco = $v['endereco'];
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title> Formulário </title>
</head>

<body>
  <form action="process_atualizar.php?id=<?= $id ?>" method="post">
    <?php include("formulario.php"); ?>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>