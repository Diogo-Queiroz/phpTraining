<?php

require_once("conexao.php");

$sql = "SELECT * FROM usuarios";
$sql = $conn->query($sql);

?>
    <body class="container">
    <div class="page-header"></div>
        <table class="table table-bordered table-hovered">
            <tr class="label-success">
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            <?php foreach($sql->fetchAll() as $usuario) : ?>
            <tr>
                <td><?=$usuario['nome']?></td>
                <td><?=$usuario['email']?></td>
                <td>
                    <a class="btn btn-danger" href="deletar.php?id=<?=$usuario['id']?>">Deletar</a>
                    <a class="btn btn-warning" href="editar.php?id=<?=$usuario['id']?>">Editar</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    <a class="btn btn-primary" href="inserir.php">Novo Usuário</a>
    </body>

</html>
