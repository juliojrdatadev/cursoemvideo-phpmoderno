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
        $seg = $_GET['seg'] ??0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
            if(empty($seg)){
                echo "<strong>[!] Informe a quantidade de segundos...</strong>";
            }else{
                $segundos = $seg;
                
                $semanas = intval($segundos / 604800);
                $segundos = $segundos - ($semanas * 604800);

                $dias = intval($segundos / 86400);
                $segundos = $segundos - ($dias * 86400);

                $horas = intval($segundos / 3600);
                $segundos = $segundos - ($horas * 3600);

                $minutos = intval($segundos / 60);
                $segundos = $segundos - ($minutos * 60);


                echo 'Analisando o valor que você digitou, <strong>'.number_format($seg, 0, '', '.') . ' segundos</strong> equivalem a um total de:';
                echo "<ul><li>$semanas semanas</li><li>$dias dias</li><li>$horas horas</li><li>$minutos minutos</li><li>$segundos segundos</li></ul>";
            }
        ?>
    </section>
</body>
</html>