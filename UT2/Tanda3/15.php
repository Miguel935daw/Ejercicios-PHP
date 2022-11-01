<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<!-- Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), 
saque por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente 
introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y el 5, 
se deberán mostrar 21, 22, 23, 24, 25. -->
<body>
    <h1>En este programa vamos a calcular las potencias con la base que introduzcas y un rango de exponentes desde 1 hasta el exponente que introduzcas</h1> 
    <form name="input" action="15.php" method="post">   
            Introduce una base: <input type="number" name="base" required><br>
            Introduce un exponente: <input type="number" name="exponente" min="0" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $base = $_POST["base"];
            $exponente = $_POST["exponente"];
            echo "<table>
            <tr>
                <th>Base</th>
                <th>Exponente</th>
                <th>Potencia</th>
            </tr>";
            for($i=1;$i<=$exponente;$i++){
                $potencia = pow($base,$i);
                echo "<tr>
                    <td>$base</td>
                    <td>$i</td>
                    <td>$potencia</td>
                 </tr>";
            }
        }
    ?>
    <a href="15.php">>> Volver</a>
</body>
</html>