<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário retroalmentado

        $valor1 = $_GET['v1'];
        $valor2 = $_GET['v2'];
    ?>

    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get"> 
        <!-- $_SERVER['PHP_SELF'] RECEBE OS DADOS DO PROPRIO ARQUIVO -->
            
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da Soma</h2>
        <?php 

            if(empty($valor1) || empty($valor2)){
                echo "<strong>[ERRO!] Informe os valores a serem somados!</strong>";
            } else {
                $soma = intval($valor1 + $valor2);
                echo "A soma dos valores $valor1 e $valor2 é igual a <strong>$soma</strong>";
            }

            
        ?>
    </section>
</body>
</html>