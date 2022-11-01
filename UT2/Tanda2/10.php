<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<!-- Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento. -->
<body>
    <h1>Introduce el dia y mes de tu fecha de nacimiento en formato numérico</h1>
        <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Dia: <input type="number" name="dia" min="1" max="31"/><br>
            Mes: <input type="number" name="mes" min="1" max="12"/><br>
            <input type="submit" value="Calcular" name="enviar"/>
        </form>
    <?php
        function horoscopo($dia,$mes){
           if($mes == 1){
                if($dia<=20){
                    return "Capricornio";
                }else{
                    return "Acuario";
                }
           }
           if($mes == 2){
                if($dia<=19){
                    return "Acuario";
                }else{
                    return "Piscis";
                }
           }
           if($mes == 3){
                if($dia<=20){
                    return "Piscis";
                }else{
                    return "Aries";
                }
           }
           if($mes == 4){
                if($dia<=19){
                    return "Aries";
                }else{
                    return "Tauro";
                }
           }
           if($mes == 5){
                if($dia<=20){
                    return "Tauro";
                }else{
                    return "Géminis";
                }
           }
           if($mes == 6){
                if($dia<=20){
                    return "Géminis";
                }else{
                    return "Cancer";
                }
           }
           if($mes == 7){
                if($dia<=22){
                    return "Cancer";
                }else{
                    return "Leo";
                }
           }
           if($mes == 8){
                if($dia<=22){
                    return "Leo";
                }else{
                    return "Virgo";
                }
           }
           if($mes == 9){
                if($dia<=22){
                    return "Virgo";
                }else{
                    return "Libra";
                }
           }
           if($mes == 10){
                if($dia<=22){
                    return "Libra";
                }else{
                    return "Escorpio";
                }
           }
           if($mes == 11){
                if($dia<=21){
                    return "Escorpio";
                }else{
                    return "Sagitario";
                }
           }
           if($mes == 12){
                if($dia<=21){
                    return "Sagitario";
                }else{
                    return "Capricornio";
                }
           }
        }
        if($_POST){
            $dia = $_POST["dia"];
            $mes = $_POST["mes"];
            $horoscopo = horoscopo($dia,$mes);
            echo "<h2>Tu horóscopo es: $horoscopo<h2>";
        }
        
    ?>
</body>
</html>