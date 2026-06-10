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
        $estado = $_POST["estado"];
        switch($estado){
            case "Acre":
                echo "Rio Branco";
                break;
            case "Alagoas":
                echo "Maceió";
                break;
            case "Amapá":
                echo "Macapá";
                break;
            case "Amazonas":
                echo "Manaus";
                break;
            case "Bahia":
                echo "Salvador";
                break;
            case "Ceará":
                echo "Fortaleza";
                break;
            case "Distrito Federal":
                echo "Brasília";
                break;
            case "Goiás":
                echo "Goiânia";
                break;
            case "Espírito Santo":
                echo "Vitória";
                break;
            case "Maranhão":
                echo "São Luís";
                break;
            case "Mato Grosso":
                echo "Cuiabá";
                break;
            case "Mato Grosso do Sul":
                echo "Campo Grande";
                break;
            case "Minas Gerais":
                echo "Belo Horizonte";
                break;
            case "Pará":
                echo "Belém";
                break;
            case "Paraíba":
                echo "João Pessoa";
                break;
            case "Paraná":
                echo "Curitiba";
                break;
            case "Pernambuco":
                echo "Recife";
                break;
            case "Piauí":
                echo "Teresina";
                break;
            case "Rio de Janeiro":
                echo "Rio de Janeiro";
                break;
            case "Rio Grande do Norte":
                echo "Natal";
                break;
            case "Rio Grande do Sul":
                echo "Porto Alegre";
                break;
            case "Rondônia":
                echo "Porto Velho";
                break;
            case "Roraima":
                echo "Boa Vista";
                break;
            case "Santa Catarina":
                echo "Florianópolis";
                break;
            case "São Paulo":
                echo "São Paulo";
                break;
            case "Sergipe":
                echo "Aracaju";
                break;
            case "Tocantins":
                echo "Palmas";
                break;
        }
    ?>
</body>
</html>