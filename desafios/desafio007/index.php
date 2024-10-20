<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $salario = $_GET['salario'] ?? 0;
        $minimo = 1380.60;
    ?>
    <main>
        <h1>Informe seu salário</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="salario">Salário (R$):</label>
        <input type="number" name="salario" id="salario" value="<?=$salario?>" step="01">
        
        <p>Considerando o salário mínumo de <strong>R$ <?=number_format($minimo,2,',','.')?></strong></p>

        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            if(empty($salario)){
                echo "<strong>[!] Informe o valor do salário.</strong>";
            }else{
                $quantia = intval($salario / $minimo);
                $resto = $salario % $minimo;

                echo "Quem recebe um salário de R\$ ". number_format($salario, 2, ',', '.') . " ganha <strong>$quantia salários mínimos +</strong> R$ ". number_format($resto, 2, ',', '.') . ".";
            }
        ?>
    </section>
</body>
</html>