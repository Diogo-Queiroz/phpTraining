<?php
/**
 * Created by PhpStorm.
 * User: Diogo
 * Date: 02/07/2017
 * Time: 13:53
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Página Teste</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css" />
  </head>


  <body>
    <header></header>
    <section>
      <div class="container">
        <form class="form-inline" action="converter.php" method="get">
          <div class="form-group">
            <label for="nome">Temperatura:</label>
            <input class="form-control" type="number" name="temp" id="temperatura"/>
          </div>
          <select class="form-control" name="tipoOrigem">
            <option value="CpF">converter Celsius para Farenheit</option>
            <option value="CpK">converter Celsius para Kelvin</option>
            <option value="KpF">converter Kelvin para Farenheit</option>
            <option value="KpC">converter Kelvin para Celsius</option>
            <option value="FpK">converter Farenheit para Kelvin</option>
            <option value="FpC">converter Farenheit para Celsius</option>
          </select>
          <button class="btn btn-default" type="submit">Enviar</button>
        </form>
      </div>
    </section>
  <footer></footer>

  <script src="js/bootstrap.js"></script>
  <script src="js/script.js"></script>
  </body>
</html>
