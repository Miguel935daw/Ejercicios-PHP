<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<!-- Realiza un programa que pida una hora por teclado 
y que muestre luego buenos días, buenas tardes o buenas 
noches según la hora. Se utilizarán los tramos de 6 a 12, 
de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en 
cuenta las horas, los minutos no se deben introducir por teclado. -->
<body>
    <form action="02.php" method="post">
        <h1>Introduce la hora actual</h1>
        Hora: <input type="text" name="hora" id="hora" />
        <input id="envio" type="submit" value="Enviar" />
    </form>
    <?php
        if($_POST){
            $hora = $_POST["hora"];
            if($hora>= 6 and $hora<=12){
                echo "<h2>Buenos Días</h2>";
            }
            elseif($hora>=13 and $hora<=20){
                echo "<h2>Buenas Tardes</h2>";
            }
            elseif( ($hora>=21 and $hora<=24) or ($hora>=0 and $hora<=5) ){
                echo "<h2>Buenas Noches</h2>";
            }
            else{
                echo "<h2>No has introducido una hora válida :( </h2>";
            };
    }
    ?>
</body>
</html>