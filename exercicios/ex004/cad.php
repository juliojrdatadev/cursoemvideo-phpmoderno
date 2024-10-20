<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento PHP</h1>
    </header>
    <main>
        <?php 
            //var_dump($_REQUEST); //pega $_GET $_POST E $_COOKIES

            $nome = $_GET["nome"] ?? "";
            $sobrenome = $_GET["sobrenome"] ?? "";

            if($nome == "" || $sobrenome == ""){
                echo "Informe seu nome e sobrenome";
            }else{
                echo "<p>É um grande prazer te conhecer <strong>$nome $sobrenome</strong></p> \n <p>Este é meu site!</p>";
            }
 

        ?>        
        <a href="javascript:history.go(-1)">Voltar</a>
    </main>
</body>
</html>