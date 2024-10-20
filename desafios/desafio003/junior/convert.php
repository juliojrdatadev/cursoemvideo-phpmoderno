<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            //var_dump($_REQUEST); //pega $_GET $_POST E $_COOKIES

            $dinheiro = $_GET["dinheiro"]; // pega o valor informado no input em html

            $dolar = number_format((floatval($dinheiro) / 5.22), 2, ',', '.');
            // acima, transformou o valor do input em valor numérico e converteu para o formato decimal com vírgula

            if (empty($dinheiro)) {
                echo "<strong>[ERRO!] Informe um valor para ser convertido.</strong>";
            } else {
                echo "<p>Seus R$ $dinheiro equivalem a <strong>US$ $dolar</strong></p>";
                echo "<p>*Cotação fixa de R$ 5,22 informada diretamente no código.</p>";
            }
        ?> 
        <p><button onclick="window.history.back();">🔙 Voltar</button></p>
    </main>
</body>
</html>