<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<!-- Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números enteros a partir de uno que se introduce por teclado -->
<body>
    <form name="input" action="11.php" method="post">
            Introduce un número: <input type="number" name="n1" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
     if(isset($_POST["n1"])){
        $numero = $_POST["n1"];
            echo "<table>
                    <tr>
                        <th>Número</th>
                        <th>Cuadrado</th>
                        <th>Cubo</th>
                    </tr>";
        for ($i = $numero; $i<=$numero+5; $i++){
            $cuadrado = pow($i,2);
            $cubo = pow($i,3);
            echo "<tr>
                    <td>$i</td>
                    <td>$cuadrado</td>
                    <td>$cubo</td>
                 </tr>";
        }
        echo "</table>";
    }
    ?>
    <a href="11.php">>> Volver</a>
</body>
</html>