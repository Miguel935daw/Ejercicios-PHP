<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>
<!-- Escribe un programa que sume, reste, multiplique y divida 
dos números introducidos por teclado. -->
<body>
        <?php
             if (isset($_POST['enviar'])) {
                  $numero1 = $_POST['numero1'];
                  $numero2 = $_POST['numero2'];
                  $producto = $numero1*$numero2;
                  $division = $numero1/$numero2;
                  $resta = $numero1-$numero2;
                  $suma = $numero1+$numero2;
                  echo "Producto:  <input type='text' name='producto' id='producto' value='$producto'/> <br>";
                  echo "Division:  <input type='text' name='division' id='division' value='$division'/> <br>";
                  echo "Resta:  <input type='text' name='resta' id='resta' value='$resta'/> <br>";
                  echo "Suma:  <input type='text' name='suma' id='suma' value='$suma'/>";
             }
             else {
        ?>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Introduce un número: <input type="number" name="numero1" /><br />
               Introduce otro número: <input type="number" name="numero2" />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
        <?php
             };
        ?>
</body>
</html>