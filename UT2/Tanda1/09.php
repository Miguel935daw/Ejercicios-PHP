<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>
<!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1* πr * 2h/3 . -->
<body>
        <?php
             function volumenCono($radio,$altura){
               return 1*pi()*$radio*2*$altura/3;
             };
             if (isset($_POST['enviar'])) {
                  $radio = $_POST['radio'];
                  $altura = $_POST['altura'];
                  $volumen = round(volumenCono($radio,$altura));
                  echo "Volumen:  <input type='text' name='volumen' id='volumen' value='$volumen'/> <br>";
             }
             else {
        ?>
        <h1>Calcula el volumen de un cono</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Introduce el radio: <input type="number" name="radio" /><br />
               Introduce la altura: <input type="number" name="altura" />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
        <?php
             };
        ?>
</body>
</html>