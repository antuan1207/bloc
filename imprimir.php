<?php

If (isset($_POST['text'])) {
    $text = $_POST['text'];

    
    if(file_exists("texto.txt")){
        unlink("texto.txt");
    }
    $texto = fopen('texto.txt','a');
    fputs($texto,$text);
    fclose($texto);

    $fileName = "Texto.txt";
    if(!empty($fileName) && file_exists($fileName)){
    header("Expires: 0");
    header("Content-Length: " . filesize($fileName));
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/force-donwload");
    header("Content-Transfer-Encoding: binary"); 
    readfile($fileName);
exit;
}else{
echo 'The file does not exist.';
}
}
?>