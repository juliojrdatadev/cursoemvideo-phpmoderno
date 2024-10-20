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
        <h1>Conversor de Moedas v2.0</h1>
       <?php /*
            //var_dump($_REQUEST); //pega $_GET $_POST E $_COOKIES

            $dinheiro = $_GET["dinheiro"]; // pega o valor informado no input em html

            $dolar = number_format((floatval($dinheiro) / 5.22), 2, ',', '.');
            // acima, transformou o valor do input em valor numérico e converteu para o formato decimal com vírgula

            if (empty($dinheiro)) {
                echo "<strong>[ERRO!] Informe um valor para ser convertido.</strong>";
            } else {
                echo "<p>Seus R$ $dinheiro equivalem a <strong>US$ $dolar</strong></p>";
                echo "<p>*Cotação obtida diretamente do site do .</p>";
            } */

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $valorReais = floatval($_POST['valorReais']);
            
                // Data atual no formato 'Y-m-d'
                $dataCotacao = date('Y-m-d');
            
                // URL da API do Banco Central
                $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='$dataCotacao'&\$top=100&\$format=json";
            
                // Fazendo a requisição à API do Banco Central
                $response = file_get_contents($url);
                $data = json_decode($response, true);
            
                // Verificando se a API retornou dados válidos
                if (isset($data['value'][0]['cotacaoVenda'])) {
                    $cotacaoVenda = $data['value'][0]['cotacaoVenda'];
            
                    // Convertendo Reais para Dólares
                    $valorDolares = $valorReais / $cotacaoVenda;
            
                    // Exibindo o valor convertido e a cotação
                    echo "<p>Valor em Reais: R$ " . number_format($valorReais, 2, ',', '.') . "</p>";
                    echo "<p>Cotação do Dólar (Venda): US$ " . number_format($cotacaoVenda, 2, ',', '.') . "</p>";
                    echo "<p>Valor convertido para Dólares: US$ " . number_format($valorDolares, 2, ',', '.') . "</p>";
                } else {
                    echo "<p>[ERRO] Não foi possível obter a cotação do dólar.</p>";
                }
            }
         ?>
        <p><button onclick="window.history.back();">🔙 Voltar</button></p>
        <a href="https://www.bcb.gov.br/conversao"></a>
    </main>
</body>
</html>


