<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloc de notas</title>
</head>
<body>
<h1>Buscador del bloc</h1>
    <?php 


        $elnombre = $_POST['elnombre'];

        $ruta = "archivos/$elnombre.txt";

        file_exists("archivos/$elnombre.txt") 

            or die ("Error: El archivo no existe.");

            $miarchivo = fopen($ruta,'r');

            $ver = fgets($miarchivo);
            
        fclose($miarchivo);
        echo "<br>";
        echo $ver;
        echo "<br>";

    ?>
    <br>
    <br>
    <a href="ver.html"><button id="btn-volver"type="button">Volver</button></a>
    <a href="directorio.php"><button id="btn-volver"type="button">Directorio</button></a>
</body>
</html>





