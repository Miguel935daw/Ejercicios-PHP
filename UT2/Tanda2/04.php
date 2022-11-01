<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio04</title>
</head>
<!-- Vamos a ampliar uno de los ejercicios de la relación anterior para 
considerar las horas extras. Escribe un programa que calcule el salario 
semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) 
se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora. -->
<body>
    <?php
    function salario_semanal($horasTrabajadas,$salarioHora,$salarioHorasExtra=1){
        if($horasTrabajadas<=40){
            $total=$horasTrabajadas*$salarioHora;
            return $total;
        }
        elseif($horasTrabajadas>40){
            $total=40*$salarioHora;
            $total+=($horasTrabajadas-40)*$salarioHorasExtra;
            return $total;
        }
        else{
            return 0;
        }
    }?>
    <h1>Calcula un salario semanal</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Introduce las horas trabajadas: <input type="number" name="horas" /><br />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
    <?php
        if($_POST){
            $horas = $_POST["horas"];
            $total = salario_semanal($horas,12,16);
            echo "Salario de esta semana:  <input type='text' name='total' id='total' value='$total euros'/> <br>";
        }
    ?>
</body>
</html>