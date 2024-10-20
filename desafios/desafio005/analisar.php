<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            //var_dump($_REQUEST); //pega $_GET $_POST E $_COOKIES

            $numero = floatval($_REQUEST["numero"]) ?? null; // pega o valor informado no input em html

            $numInt = intval($numero);
            $numFra = ($numero - $numInt);

            if ($numero == null) {
                echo "<strong>[ERRO!] Informe um valor para ser analisado.</strong>";
            } else {
                echo "<p>Analisando o número <strong>" . number_format($numero, 3, ',', '.') . "</strong> informado pelo usuário:</p>";
                echo "<li>A parte inteira do número é <strong>" . number_format($numInt, 0, ',', '.') . "</strong></li>";
                echo "<li>A parte fracionária do número é <strong>" . number_format($numFra, 3, ',', '.') . "</strong></li>";
            }

        ?> 
        <p><button onclick="window.history.back();">🔙 Voltar</button></p>
    </main>
</body>
</html>