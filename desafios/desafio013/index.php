<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $saq = $_GET['saq'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletônico</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saq">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saq" id="saq" value="<?=$saq?>" step="5">
            <p style="font-size: 0.6em;">*Notas disponíveis? R$ 100, R$ 50, R$ 10 e R$ 5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            if (empty($saq)) {
                echo "<strong>[!] Informe um valor para sacar.</strong>";
            } else {
                $valor = $saq;

                $nota100 = intdiv($saq, 100); $saq %= 100;
                $nota50 = intdiv($saq, 50); $saq %= 50;
                $nota10 = intdiv($saq, 10); $saq %= 10;
                $nota5 = intdiv($saq, 5); $saq %= 5;
            
                echo '<h2>Saque de R$ ' . number_format($valor, 2, ',', '.') . ' realizado</h2>';
                echo "<br>O Caixa eletrônico vai te entregar as seguintes notas:";
                echo "<ul>
                        <li><img src='100.jpg' alt='100 reais'> x $nota100</li>
                        <li><img src='50.jpg' alt='50 reais'> x $nota50</li>
                        <li><img src='10.jpg' alt='10 reais'> x $nota10</li>
                        <li><img src='5.jpg' alt='5 reais'> x $nota5</li>
                    </ul>";
            }
        ?>
    </section>    
</body>
</html>