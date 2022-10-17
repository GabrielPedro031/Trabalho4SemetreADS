<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Descubra seu signo</title>
</head>
<body>
    <?php
    $link = "C:\Users\Gabriel\Downloads\Trabalho de faculdade\PHP\Qual_e_seuSignoTrabalhoFaculdade-main\signos.xml";
       $xml = simplexml_load_file($link) or die ("E");
    
    $dt = isset($_GET["data"])?$_GET["data"]:01/01;

    foreach ($xml->children() as $sig) {
        if ($dt >= $sig->dataInicio and $dt <= $sig->dataFim){
            echo $sig->signoNome;
        }
    }
    ?>
</body>
</html>