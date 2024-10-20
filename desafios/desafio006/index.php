<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando dados do formulário retroalmentado

        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 0;

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <!-- $_SERVER['PHP_SELF'] RECEBE OS DADOS DO PROPRIO ARQUIVO -->

            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
            </form>
    </main>
    
    <section>
        <h2>Estrutuda da Divisão</h2>
        <?php 
            if(empty($dividendo) || empty($divisor)){
                echo "<strong>[!] Informe os valores para analisar a divisão.</strong>";
            }else{
                $quociente = intval($dividendo / $divisor);
                $resto = intval($dividendo % $divisor);

                echo "<table class='divisao'><tr><td>$dividendo</td><td>$divisor</td></tr><tr><td>$resto</td><td>$quociente</td></tr></table>";

                //echo "O resultado da divisão de <strong>$dividendo</strong> por <strong>$divisor</strong> é <strong>quociente $quociente</strong> e <strong>resto $resto</strong>";
            }
        ?>        
        

    </section>
</body>
</html>