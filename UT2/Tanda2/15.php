<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo infiel. 
El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes utilizar radio buttons. 
Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas contestadas con falso no suman puntos. 
Utiliza el fichero test_infidelidad.txt para obtener las preguntas y las conclusiones del programa. -->
<body>
    <form name="input" action="15.php" method="post">
        1. Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.<br>
        <input type="radio" name="p1" value="True" required>Si <br>
        <input type="radio" name="p1" value="False" required>No <br>
        2. Ha aumentado sus gastos de vestuario <br>
        <input type="radio" name="p2" value="True" required>Si <br>
        <input type="radio" name="p2" value="False" required>No <br>
        3. Ha perdido el interés que mostraba anteriormente por ti <br>
        <input type="radio" name="p3" value="True" required>Si <br>
        <input type="radio" name="p3" value="False" required>No <br>
        4. Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer) <br>
        <input type="radio" name="p4" value="True" required>Si <br>
        <input type="radio" name="p4" value="False" required>No <br>
        5. No te deja que mires la agenda de su teléfono móvil <br>
        <input type="radio" name="p5" value="True" required>Si <br>
        <input type="radio" name="p5" value="False" required>No <br>
        6. A veces tiene llamadas que dice no querer contestar cuando estás tú delante <br>
        <input type="radio" name="p6" value="True" required>Si <br>
        <input type="radio" name="p6" value="False" required>No <br>
        7. Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a <br>
        <input type="radio" name="p7" value="True" required>Si <br>
        <input type="radio" name="p7" value="False" required>No <br>
        8. Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo <br>
        <input type="radio" name="p8" value="True" required>Si <br>
        <input type="radio" name="p8" value="False" required>No <br>
        9. Has notado que últimamente se perfuma más <br>
        <input type="radio" name="p9" value="True" required>Si <br>
        <input type="radio" name="p9" value="False" required>No <br>
        10. Se confunde y te dice que ha estado en sitios donde no ha ido contigo <br>
        <input type="radio" name="p10" value="True" required>Si <br>
        <input type="radio" name="p10" value="False" required>No <br>
        <input type="submit" value="Enviar">
    </form> 

    <?php
        if($_POST){
            $respuestas = [$_POST["p1"],$_POST["p2"],$_POST["p3"],$_POST["p4"],$_POST["p5"],$_POST["p6"],$_POST["p7"],$_POST["p8"],$_POST["p9"],$_POST["p10"]];
            $contador = count($respuestas);
            $puntos = 0;
            for($i=0;$i<$contador;$i++){
                if($respuestas[$i]=="True"){
                    $puntos += 3;
                }
            }
            if($puntos >= 0 and $puntos <=10){
                echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
            }
            elseif($puntos >= 11 and $puntos <=21){
                echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
            }
            else{
                echo "Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
            }
        }
    ?>
<!-- Puntuación entre 0 y 10: 
¡Enhorabuena! tu pareja parece ser totalmente fiel.

Puntuación entre 11 y 21:
Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.

Puntuación entre 22 y 30:
Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.-->
</body>
</html>