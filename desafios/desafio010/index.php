<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $anoSis = date("Y");
        $nas = $_GET['nas'] ?? 0;
        $ano = $_GET['ano'] ?? $anoSis;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nas">Em que ano você nasce?</label>
            <input type="number" name="nas" id="nas" value="<?=$nas?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <?=$anoSis?>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        if(empty($nas)){
            echo "<strong>[!] Informe o ano de nascimento.</strong>";  
        }else if($nas > $ano){
            echo "<strong>[!] O ano de nascimento não pode ser maior que o ano atual.</strong>";
        }else{
            $idade = $ano - $nas;
            echo "Quem nasceu em $nas vai ter <strong>$idade anos</strong> em $ano!";
        }
        ?>
    </section>    
</body>
</html>