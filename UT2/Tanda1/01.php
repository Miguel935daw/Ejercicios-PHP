<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<!-- Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->
<body>
        <?php
             if (isset($_POST['enviar'])) {
                  $numero1 = $_POST['numero1'];
                  $numero2 = $_POST['numero2'];
                  $producto = $numero1*$numero2;
                  echo "Producto:  <input type='text' name='producto' id='producto' value='$producto'/>";
             }
             else {
        ?>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Introduce un número: <input type="number" name="numero1" /><br />
               Introduce otro número: <input type="number" name="numero2" />
               <input type="submit" value="Multiplicar" name="enviar"/>
          </form>
        <?php
             };
        ?>
</body>
</html>