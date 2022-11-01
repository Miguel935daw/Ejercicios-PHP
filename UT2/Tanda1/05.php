<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<!-- Escribe un programa que calcule el área de un rectángulo. -->
<body>
     <?php
          function areaRectangulo($ancho,$alto){
               return $ancho*$alto;
          };
          
          if (isset($_POST['enviar'])) {
               $ancho = $_POST['ancho'];
               $altura = $_POST['altura'];
               $area = areaRectangulo($ancho,$altura);
               echo "Área:  <input type='text' name='area' id='area' value='$area'/> <br>";
          }
          else {
     ?>
          <h1>Calcula el Area de un rectángulo</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          Introduce el ancho: <input type="number" name="ancho" /><br />
          Introduce la altura: <input type="number" name="altura" />
          <input type="submit" value="Calcular" name="enviar"/>
          </form>
     <?php
          };
     ?>
</body>
</html>