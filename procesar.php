<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Block de notas</title>  
</head>
<body>
<h1>Se ha guardado un archivo</h1>

      <?php  

      $Nombre = $_POST['nombre'];
      $Texto = $_POST['texto'];

      $ruta = "archivos/$Nombre.txt";

      $miarchivo = fopen($ruta,'w');

      fwrite($miarchivo, 
            "Nombre: ".$Nombre.
            " Texto: ".$Texto);
            echo "<br>";
            echo "Se ha guardado <strong>\"$Nombre.txt\"</strong><br>";
            echo "Ve al directorio ";
      fclose($miarchivo); 

      ?> 
</body>
<footer>
<br> 
<br>
<a href="index.html"><button id="btn-crear" type="button">Nuevo archivo</button></a>
<a href="ver.html"><button id="btn-volver" type="button">Ver archivos</button></a>

</footer>
</html>



