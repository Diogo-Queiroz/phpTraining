<?php
  require_once("conexao.php");

  if(isset($_POST['nome']) && empty($_POST['nome']) == false)
  {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $conn->query($sql);

    header("Location: listaUsuarios.php");
  }
?>

  <body class="container">
  <div class="page-header"></div>
    <form class="form-horizontal" method="post">
      <div class="form-group">
        <label class="col-sm-3 control-label">Nome:</label>
        <div class="col-sm-9">
          <input type="text" name="nome" class="form-control" placeholder="nome"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">E-mail:</label>
        <div class="col-sm-9">
          <input type="text" name="email" class="form-control" placeholder="E-mail"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Senha:</label>
        <div class="col-sm-9">
          <input type="password" name="senha" class="form-control" placeholder="Senha"/>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <input type="submit" class="btn btn-default" value="Inserir"/>
          <a class="btn btn-warning" href="listaUsuarios.php">Retornar</a>
        </div>
      </div>
    </form>
  </body>
</html>