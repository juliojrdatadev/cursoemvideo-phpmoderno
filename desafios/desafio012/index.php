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

                $semanas = floor($seg / 604800); // 604800 segundos = 1 semana
                $seg = $seg - ($semanas * 604800); // pega o valor "arredondado" de semanas, multiplica por segundos e desconta do valor total de segundos informado pelo usuário para fazer o proximo calculo que é de dias // Remover os segundos correspondentes às semanas
            
                $dias = floor($seg / 86400); // 86400 segundos = 1 dia
                $seg = $seg - ($dias * 86400); // pega o valor "arredondado" de dias, multiplica por segundos e desconta do valor total de segundos informado pelo usuário para fazer o proximo calculo que é de horas // Remover os segundos correspondentes aos dias
            
                $horas = floor($seg / 3600); // 3600 segundos = 1 hora
                $seg = $seg - ($horas * 3600); // pega o valor "arredondado" de horas, multiplica por segundos e desconta do valor total de segundos informado pelo usuário para fazer o proximo calculo que é de minutos // Remover os segundos correspondentes às horas
            
                $minutos = floor($seg / 60); // 60 segundos = 1 minuto
                $seg = $seg - ($minutos * 60); // pega o valor "arredondado" de minutps, multiplica por segundos e desconta do valor total de segundos informado pelo usuário para fazer o proximo calculo que é de segundos // Remover os segundos correspondentes aos minutos

                echo 'Analisando o valor que você digitou, <strong>'.number_format($segundos, 0, '', '.') . ' segundos</strong> equivalem a um total de:';
                echo "<ul><li>$semanas semanas</li><li>$dias dias</li><li>$horas horas</li><li>$minutos minutos</li><li>$seg segundos</li></ul>";
            }
        ?>
    </section>
</body>
</html>