<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloc de Notas</title>
</head>
<body>
    <div class="container">
        <form method="post" action="imprimir.php" id="form">
            <label class="labels">Bloc de Notas</label><br>
            <div class="textarea_style">
                <textarea name="text" id="textarea" cols="37" rows="4" class="textarea" maxlength="1000" form="form"></textarea>
            </div><br>
            <span class="textarea_count">(Máximo de 1000 Caracteres)</span>
            <input type="submit" name="Descargar">
        </form>
    </div>
</body>
</html>