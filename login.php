<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title> Login </title>
  
</head>

<body>
  <div id="login">
    <form class="card glow-bg bg-lg" action="process_login.php" method="post">
      <div class="card-header">
        <h2> Entrar </h2>
      </div>
      <div class="card-content">
        <div class="card-content-area">
          <label for="usuario"> Usuário </label>
          <input type="text" name="nome" id="nome" autocomplete="off" placeholder="John De">
        </div>
        <div class="card-content-area">
          <label for="password">Senha</label>
          <input type="password" name="senha" id="senha" autocomplete="off" placeholder="password">
        </div>
      </div>
      <div class="card-footer">
        <input type="submit" value="Entrar" class="submit">
      </div>
      <div class="card-footer"> <label> Não tem uma conta? <a href="formulario.php">Cadastrar</a></label></div> 
    </form>
  </div>
</body>
</html>