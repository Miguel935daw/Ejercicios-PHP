<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<!-- Escribe un programa que calcule el área de un triángulo. -->
<body>
        <?php
          function areaTriangulo($base,$altura){
               return ($base*$altura)/2;
               };
          if (isset($_POST['enviar'])) {
               $base = $_POST['base'];
               $altura = $_POST['altura'];
               $area = areaTriangulo($base,$altura);
               echo "Área:  <input type='text' name='area' id='area' value='$area'/> <br>";
          }
          else {
        ?>
        <h1>Calcula el Area de un triángulo</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Introduce la base: <input type="number" name="base" /><br />
               Introduce la altura: <input type="number" name="altura" />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
        <?php
             };
        ?>
</body>
</html>