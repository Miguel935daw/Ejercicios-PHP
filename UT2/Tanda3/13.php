<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<!-- Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos. -->
<body>
    <h1>En este programa vas a introducir 10 números positivos o negativos y te vamos a decir cuantos han sido negativos y cuantos positivos</h1>
    <form name="input" action="13.php" method="post">
            Introduce un número: <input type="number" name="n1" required><br>
            Introduce un número: <input type="number" name="n2" required><br>
            Introduce un número: <input type="number" name="n3" required><br>
            Introduce un número: <input type="number" name="n4" required><br>
            Introduce un número: <input type="number" name="n5" required><br>
            Introduce un número: <input type="number" name="n6" required><br>
            Introduce un número: <input type="number" name="n7" required><br>
            Introduce un número: <input type="number" name="n8" required><br>
            Introduce un número: <input type="number" name="n9" required><br>
            Introduce un número: <input type="number" name="n10" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $numeros = array();
            $positivos = 0;
            $negativos = 0;
            for($i = 1;$i<=10;$i++){
                $numeros[] = $_POST["n$i"];
            }
            foreach($numeros as $numero){
                if($numero >=0){
                    $positivos+=1;
                }else{
                    $negativos+=1;
                }
            }
            echo "Has introducido $positivos números positivos y $negativos números negativos";
        }
    ?>
    <a href="13.php">>> Volver</a>
</body>
</html>