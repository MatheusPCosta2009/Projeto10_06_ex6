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
        $comprimento = $_POST["comprimento"];
        $largura = $_POST["largura"];
        $area = $largura * $comprimento;
        echo "Area do terreno: ".$area."m";
    ?>
</body>
</html>