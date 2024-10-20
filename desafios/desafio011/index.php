<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $reaj = $_GET['reaj'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste? <strong>(<span id="pcent"><?=$reaj?></span>%)</strong></label>

            <input type="range" name="reaj" id="reaj" value="<?=$reaj?>" oninput="mostrarValor(value)">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            if(empty($preco) || empty($reaj)){
                echo "<strong>[!] Informe os valores para calcular o reajuste!</strong>";
            }else{
                $novoPreco = number_format($preco + ($preco * ($reaj/100)), 2,',', '.');
                echo 'O produto que custava R$ '. number_format($preco, 2, ',','.'). ', com <strong>'.$reaj.'% de aumento</strong> vai passar a custar <strong>R$ '.$novoPreco.'</strong> a partir de agora.';

            }
        ?>
    </section>
    <script>
        function mostrarValor(valor) {
            document.getElementById("pcent").textContent = valor;
        }
    </script>
</body>
</html>