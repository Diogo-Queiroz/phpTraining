<?php
  require('converter.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Página Teste</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css" />
  </head>


  <body class="container">
    <header>
      <h1>Calculadora de Conversão de Temperatura:</h1>
    </header>
    <section class="col-sm-6">
      <div>
        <form class="form-horizontal" action="index.php" method="get">
          <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Temperatura:</label>
            <div class="col-sm-10">
              <input class="form-control" type="number" name="temp" id="temperatura"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <select class="form-control" name="tipo">
                <option>Selecione a conversão</option>
                <option value="CpF">Celsius para Farenheit</option>
                <option value="CpK">Celsius para Kelvin</option>
                <option value="KpF">Kelvin para Farenheit</option>
                <option value="KpC">Kelvin para Celsius</option>
                <option value="FpK">Farenheit para Kelvin</option>
                <option value="FpC">Farenheit para Celsius</option>
              </select>
            </div>
          </div>
          <div class="col-sm-offset-6 col-sm-6">
            <button class="btn btn-lg btn-primary" type="submit">Enviar</button>
          </div>
        </form>
      </div>
    </section>
    <aside class="col-sm-6">
        <label for="resultado" class="col-sm-6 control-label">Resultado da Conversão:</label>
        <div class="col-sm-6">
          <input class="form-control" value="<?= $resultado ?>"/>
        </div>
    </aside>
  <footer></footer>

  <script src="js/bootstrap.js"></script>
  <script src="js/script.js"></script>
  </body>
</html>
