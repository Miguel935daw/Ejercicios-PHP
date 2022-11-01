<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. 
Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios -->
<body>
        <?php
             if (isset($_POST['enviar'])) {
                  $horas = $_POST['horas'];
                  $total = $horas*12;
                  echo "Salario de esta semana:  <input type='text' name='total' id='total' value='$total euros'/> <br>";
             }
             else {
        ?>
        <h1>Calcula un salario semanal</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Introduce las horas trabajadas: <input type="number" name="horas" /><br />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
        <?php
             };
        ?>
</body>
</html>