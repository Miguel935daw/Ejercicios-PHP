<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<!-- Escribe un programa que pida por teclado un día de la semana 
y que diga qué asignatura toca a primera hora ese día. -->
<body>
    <form action="01.php" method="post">
        <h1>Introduce el dia de la semana y te diremos que tienes a primera hora</h1>
        Dia: <input type="text" name="dia" id="dia" />
        <input id="envio" type="submit" value="Ver primera hora" />
    </form>
    <?php
        include 'horario.inc.php';
        if($_POST){
            $dia = strtolower($_POST["dia"]);
            if($dia=="lunes"){
                echo "<h3>El $dia tienes $lunes[0]</h3>";
            }
            elseif($dia=="martes"){
                echo "<h3>El $dia tienes $martes[0]</h3>";
            }
            elseif($dia=="miércoles" or $dia=="miercoles"){
                echo "<h3>El $dia tienes $miercoles[0]</h3>";
            }
            elseif($dia=="jueves"){
                echo "<h3>El $dia tienes $jueves[0]</h3>";
            }
            elseif($dia=="viernes"){
                echo "<h3>El $dia tienes $viernes[0]</h3>";
            }
            else{
                echo "No has introducido una respuestas válida :(";
            };
        };
    ?>
</body>
</html>