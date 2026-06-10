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
        $ano = $_POST["ano"];
        $checagem1 = $ano % 4;
        $checagem2 = $ano & 100;
        if($checagem1 == 0 && $checagem2 != 0){
            echo "Ano bissexto";
        }
        else{
            echo "Ano comum";
        }
    ?>
</body>
</html>