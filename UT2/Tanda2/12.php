<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<!-- Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en el curso. 
Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida. Pásale el minicuestionario 
a tus compañeros y pídeles que lo hagan para ver qué tal andan de conocimientos en las diferentes asignaturas del curso.-->
<body>
    <form name="input" action="12.php" method="post">
        <h1>Cuestionario sobre 2º DAW</h1>
        <h2>Nuestro profesor@ de DEWC es: 
            <select name="pregunta1" id="pregunta1">
                <option value="Paco">Paco</option>
                <option value="Fernando">Fernando</option>
                <option value="Ana">Ana</option>
                <option value="Juana">Juana</option>
            </select>
        </h2>
        <h2>Nuestro profesor@ de DEWS es: 
            <select name="pregunta2" id="pregunta1">
                <option value="Paco">Paco</option>
                <option value="Fernando">Fernando</option>
                <option value="Ana">Ana</option>
                <option value="Juana">Juana</option>
            </select>
        </h2>
        <h2>Nuestro profesor@ de DIW es: 
            <select name="pregunta3" id="pregunta1">
                <option value="Paco">Paco</option>
                <option value="Fernando">Fernando</option>
                <option value="Ana">Ana</option>
                <option value="Juana">Juana</option>
            </select>
        </h2>
        <h2>Nuestro profesor@ de DAW es: 
            <select name="pregunta4" id="pregunta1">
                <option value="Paco">Paco</option>
                <option value="Fernando">Fernando</option>
                <option value="Ana">Ana</option>
                <option value="Juana">Juana</option>
            </select>
        </h2>
        <h2>Nuestro profesor@ de Inglés es: 
            <select name="pregunta5" id="pregunta1">
                <option value="Paco">Paco</option>
                <option value="Fernando">Fernando</option>
                <option value="Ana">Ana</option>
                <option value="Juana">Juana</option>
            </select>
        </h2>
        <h2>A nuestro profesor Paco le encanta el Sistema Operativo: 
            <select name="pregunta6" id="pregunta1">
                <option value="Linux">Linux</option>
                <option value="Windows">Windows</option>
                <option value="IOS">IOS</option>
            </select>
        </h2>
        <h2>Nuestro profesor Fernando siempre trae su: 
            <select name="pregunta7" id="pregunta1">
                <option value="Café">Café</option>
                <option value="Agua">Agua</option>
                <option value="CocaCola">Coca Cola</option>
                <option value="ColaCao">Cola cao</option>
            </select>
        </h2>
    </form>
    <?php
        if($_POST){
            $respuesta1 = $_POST["pregunta1"];
            
            echo $respuesta1;
        }
    ?>
</body>
</html>