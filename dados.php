<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Página de processamento</h1>
    <?php
        $nome = $_POST["nome"];
        $frequencia = $_POST["frequencia"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $media = ($nota1 + $nota2) / 2;
        echo "Nome: ".$nome."\n";
        echo "Frequência: ".$frequencia."\n";
        echo "Nota 1: ".$nota1."\n";
        echo "Nota 2: ".$nota2."\n";
        if($media > 5){
            if($frequencia >= 75){
                echo "Aprovado!!!";
            }
            else{
                echo "Reprova por Frequência";
            }
        }
        else{
            echo '<span style="color: red;">Reprova por nota</span';
        }
    ?>
</body>
</html>