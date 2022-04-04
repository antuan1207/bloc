<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloc de notas</title>
</head>
<body>
<h1>Directorio de archivos</h1>
    <?php 
        $listar = null;
        $directorio = opendir("archivos/");

        while ($elemento = readdir($directorio))
        {
            if ($elemento != '.' && $elemento != '..')
            if (is_dir("archivos/".$elemento))
            {
                $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
            }
            else   
            { 
            $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
            }

        }
    
    ?>
<div class="directorio">
<ul style="padding-left: 32px;padding-right: 32px;">
    <?php echo "$listar"  ?>
</ul>
</div>
<a href="index.html"><button id="btn-volver"type="button">Volver</button></a>
</body>
</html>