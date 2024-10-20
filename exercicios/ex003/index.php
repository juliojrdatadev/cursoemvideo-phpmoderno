<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 003</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <!-- <?php 
        $num = 0x1A ;
        echo "O Valor da variavel é $num";
    ?>     -->

    <?php 
        $num = 49.5;
        $v = (string) $num;
        var_dump($v);
    ?>
</body>
</html>