<!DOCTYPE html>
<html lang="pt-br   ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numbero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            if(empty($numero)){
                echo "<strong>[!] Informe um número...</strong>";
            }else{
                $raizQuadrada = number_format(sqrt($numero), 3);
                // raiz quadrada = $numero ** (1/3);
                $raizCubica = number_format(pow($numero, 1/3), 3);
                //raiz cubica = numero elevado na potencia de 1/3 (um terço)
                // raiz cubica = $numero ** (1/3);

                echo "Analisando o <strong>número $numero</strong>, temos:";  
                echo "<ul><li>A sua raiz quadrada é <strong>$raizQuadrada</strong></li><li>A sua raiz cúbica é <strong>$raizCubica</strong></li>
                </ul>";
            }
        ?>
    </section>   
</body>
</html>