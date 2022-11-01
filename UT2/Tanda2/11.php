<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<!-- Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche.-->
<body>
<h1>Introduce una hora determinada:</h1>
        <form name="input" action="11.php" method="post">
            <input type="number" name="hora" min="1" max="24"/>
            : <input type="number" name="minuto" min="0" max="59"/><br>
            <input type="submit" value="Enviar" name="enviar"/>
        </form>
    <?php
        if($_POST){
            $hora = strtotime($_POST["hora"].":".$_POST["minuto"]);
            $mediaNoche = strtotime("24:00");
            if($hora == $mediaNoche){
                echo "<h1>Ya es media noche</h1>";
            }
            else{
                $diferencia = $mediaNoche-$hora;
                echo "<h1>Faltan $diferencia segundos para la media noche</h1>";
            }
        }
    ?>
</body>
</html>