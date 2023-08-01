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
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? 0;

            $antecessor = intval($numero) - 1;
            $sucessor = intval($numero) + 1;

            echo "O antecessor é $antecessor <br>";
            echo "O sucessor é $sucessor <br>";
        
        ?>
        <!--<p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>-->
        <button onclick="javascript:history.go(-1)"> &#x2b05; Voltar</button>
    </main>

    
</body>
</html>