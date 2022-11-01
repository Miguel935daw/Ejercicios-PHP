<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
<!-- Escribe un programa que calcule el factorial de un número entero leído por teclado. -->
<body>
    <h2>Introduce el número del cuál quieres saber el factorial</h2> 
    <form name="input" action="28.php" method="post">   
        Introduce un número: <input type="number" min="0" name="n" required><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        function factorial($numero){ 
            $factorial = 1; 
            for ($i = 1; $i <= $numero; $i++){ 
            $factorial = $factorial * $i; 
            } 
            return $factorial; 
        }
        if(isset($_POST["n"])){
            $numero = $_POST["n"];
            $factorial = factorial($numero);
            echo "El factorial de $numero es: $factorial";
        }
    ?>
</body>
</html>