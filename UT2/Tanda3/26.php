<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<!-- Realiza un programa que pida primero un número y a continuación un dígito. 
El programa nos debe dar la posición (o posiciones) contando de izquierda a 
derecha que ocupa ese dígito en el número introducido. -->
<body>
    <h2>En este programa vamos a hacer una pirámide de números con la cantidad de plantas que introduzcas</h2> 
    <form name="input" action="26.php" method="post">   
            Introduce un número: <input type="number" min="0" name="n" required><br>
            Introduce un dígito del número introducido: <input type="number" name="digito" min="0" max="9" required ><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n"]) and isset($_POST["digito"])){
            $numero = $_POST["n"];
            $digito = $_POST["digito"];
            $digitos = array();
            for($i=0;$i<strlen($numero);$i++){
                $digitos[] = $numero[$i];
            }
            if(in_array($digito,$digitos)){
                $posicion = array_search($digito,$digitos);
                echo "El dígito introducido se encuentra en las posiciones $posicion";
            }
        }
    ?>
    <a href="26.php">>> Volver</a>
</body>
</html>