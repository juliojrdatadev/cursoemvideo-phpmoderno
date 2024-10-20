<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>        
        <h1>Resultado Final</h1>
        <p>
            <?php
                //var_dump($_REQUEST); //pega $_GET $_POST E $_COOKIES
                $numero = intval($_REQUEST["numero"]) ?? null;
                $a = $numero - 1;
                $s = $numero + 1;
                if($numero == null){
                    echo "[ERRO!] Informe um valor a ser calculado.";
                }else{
                    echo "O número escolhido foi <strong>$numero</strong><br>";
                    echo "O antecessor é <strong>".$a."</strong><br>";
                    echo "O sucessor é <strong>".$s."</strong><br>";
                }
            ?>
        </p>       
        <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
    </main>
</body>
</html>