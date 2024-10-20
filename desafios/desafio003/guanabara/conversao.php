<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $cotacao = 5.17;


            //pega o valor do formulario / input através do metodo get
            $real = $_REQUEST["din"];

            $dolar = $real / $cotacao;

            // formatação de moeda com internacionalização
            // biblioteca intl (internacionalização php)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            if(empty($real)){
                echo "<p><strong>[ERRO!]</strong> Informe um valor para conversão.</p>";
            }else{
                echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            }
        ?> 
        <p><button onclick="window.history.back(-1);">🔙 Voltar</button></p>
    </main>  
</body>
</html>