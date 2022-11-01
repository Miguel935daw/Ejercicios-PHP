<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07</title>
</head>
<!-- Escribe un programa que calcule el total de una factura a partir de la base imponible. -->
<body>
        <?php
             if (isset($_POST['enviar'])) {
                  $base = $_POST['base'];
                  $total = $base*1.21;
                  echo "Total Factura:  <input type='text' name='total' id='total' value='$total'/> <br>";
             }
             else {
        ?>
        <h1>Calcula una factura</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Introduce la base imponible: <input type="number" name="base" /><br />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
        <?php
             };
        ?>
</body>
</html>