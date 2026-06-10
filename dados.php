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
        $texto = $_POST["texto"];
        $areaTexto = $_POST["areadetexto"];
        $checkBox = $_POST["checkbox"];
        $radio = $_POST["radio"];
        $selectOption = $_POST["selecao"];
        switch($radio){
            case "op1":
                $opRadio = "Opção 1";
                break;
            case "op2":
                $opRadio = "Opção 2";
                break;
            case "op3":
                $opRadio = "Opção 3";
                break;
        }
        switch($selectOption){
            case "op1":
                $opSelect = "Opção 1";
                break;
            case "op2":
                $opSelect = "Opção 2";
                break;
            case "op3":
                $opSelect = "Opção 3";
                break;
        }
        echo "Texto: ".$texto."\n";
        echo "Area de texto: ".$areaTexto."\n";
        foreach($checkBox as $valor){
            echo "Opção: ".htmlspecialchars($valor)."\n";
        }
        echo "Radio: ".$opRadio."\n";
        echo "Select option: ".$opSelect."\n";
    ?>
</body>
</html>