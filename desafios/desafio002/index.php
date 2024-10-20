<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <section>        
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $numero = mt_rand(100000, 199999);
            echo "O valor gerado foi <strong>$numero</strong>";
        ?>
        <p><button onclick="document.location.reload();">🔄 Gerar outro</button></p>
    </section>
</body>
</html>