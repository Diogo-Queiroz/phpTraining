<?php
require_once("conexao.php");

$id = 0;

if (isset($_GET['id']) && empty($_GET['id']) == false)
{
  $id = addslashes($_GET['id']);

  $sql = $conn->query("SELECT * FROM usuarios WHERE id = '$id'");
  if ($sql->rowCount() > 0 )
  {
    $info = $sql->fetch();
  }
}
else
{
  header("Location: listaUsuarios.php");
}
?>

  <body class="container">
    <div class="page-header"></div>
    <form class="form-horizontal" method="post">
      <div class="form-group">
        <label class="col-sm-3 control-label">Nome:</label>
        <div class="col-sm-9">
          <input type="text" name="nome" class="form-control" value="<?= $info['nome'] ?>"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">E-mail:</label>
        <div class="col-sm-9">
          <input type="text" name="email" class="form-control" value="<?= $info['email'] ?>"/>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <input type="submit" class="btn btn-default" value="Editar"/>
          <a class="btn btn-warning" href="listaUsuarios.php">Retornar</a>
        </div>
      </div>
    </form>
  </body>
</html>