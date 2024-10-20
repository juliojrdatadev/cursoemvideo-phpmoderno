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

                // define data inicial e final que vai alimentar a api atraves da função date() da biblioteca do php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $final = date("m-d-Y");
            
                // declara que a variavel $url recebe o endereço do arquivo .json gerado pela api é alimentada pelas variaveis de data $inicio e $final
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $final .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';
                
                // declara que a variavel $dados pega (file_get_contents) o conteúdo do arquivo .json da $url é decondificado (json_decode) e transormado em um array através do parametro "true"
                $dados = json_decode(file_get_contents($url), true);
            
                //var_dump($dados); //parametro para conferencia dos dados retornados pelo array criado á cima dentro da variavel $dados
                     
                // declara que a variavel $cotacao recebe os valores do array $dados passando os parametros/indices ["value"] [0] ["cotacaoCompra"]
                $cotacao = $dados["value"][0]["cotacaoCompra"];

                // formatação de moeda com internacionalização
                // biblioteca intl (internacionalização php)
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
                //----//

                //pega o valor do formulario / input através do metodo get
                $real = floatval($_REQUEST["din"]); // converte o valor do input, que vem como string, em valor real/float

                // faz a conversão do valor informado pelo usuario em dolar
                $dolar = $real / $cotacao;
                
                // valida se o usuário informou um dado para dar sequencia na apresentação do resultado de cotação.
                if(empty($real)){
                    echo "<p><strong>[ERRO!]</strong> Informe um valor para conversão.</p>";
                }else{
                    // apresenta a cotação atual conforme dados coletados via api BC
                    echo "A cotação <strong>ATUAL</strong> do Dolar é foi " . numfmt_format_currency($padrao, $cotacao, "BRL");
                    // apresenta a conversão do valor informado pelo uuário
                    echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
                }
            ?> 
        <button onclick="window.history.back(-1);">🔙 Voltar</button>
        <p style="font-size: 0.8em;">*Dados coletados direto do site do <a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MTAwfX0=" target="_blank">Banco Central do Brasil</a></p>
    </main>
</body>
</html>


