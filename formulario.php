<?php
if(!isset($nome))
	$nome = "";
if(!isset($email)){
	$email = "";
	$aux = "";
}
else{
	$aux = "disabled";
}
if(!isset($senha))
	$senha = "";

if(!isset($endereco))
    $endereco = ""; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title> Cadastro </title>
    
</head>

<body>
    <div id="login">
        <form class="card glow-bg bg-lg" method="post" action="process_cadastrar.php">
            <div class="card-header">
                <h2>Cadastrar-se</h2>
            </div>
            <div class="card-content">
                 <div class="card-content-area">
                    <label for="name">Nome</label>
                    <input type="text" name="nome" id="nome" autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" autocomplete="off">
                </div>
            </div>
            <div class="card-content-area">
                <label for="endereco">Endereco</label>
                <input type="text" name="endereco" id="endereco" autocomplete="off">
            </div>
            <div class="card-footer">
                <input type="submit" value="Cadastrar" class="submit">
            </div>
            <div class="card-footer">
                <label> Já possui uma conta? <a href="login.php"> Entrar</a> </label>
            </div>
        </form>
    </div>
</body>
</html>