<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<!-- Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. 
El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula 
sumando los dos anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... 
El número n se debe introducir por teclado. -->
<body>
    <form name="input" action="12.php" method="post">
            Introduce la cantidad de términos de fibonacci que quieres: <input type="number" name="n1" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n1"])){
            $terminos = $_POST["n1"];
            $anterior1 = 0;
            $anterior2 = 1;
            echo "$anterior1, $anterior2";
            for($i=0;$i<$terminos-2;$i++){
                $nuevo = $anterior1 + $anterior2;
                echo ", $nuevo";
                $anterior1 = $anterior2;
                $anterior2 = $nuevo;
            }
        }
    ?>
    <a href="12.php">>> Volver</a>
</body>
</html>