<?php
require_once('conexao.php');

if (isset($_GET['id']) && empty($_GET['id']) == false)
{
  $id = addslashes($_GET['id']);

  $sql = "DELETE FROM usuarios WHERE id = '$id'";
  $conn->query($sql);

  header("Location: listaUsuarios.php");
}
else
{
  header("Location: listaUsuarios.php");
}