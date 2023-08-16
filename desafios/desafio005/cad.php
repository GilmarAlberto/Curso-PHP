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

            $parteInteira = intval($numero);
            $parteFracionada = fmod($numero, 1);
            $parteFracionada = number_format($parteFracionada, 4, ",", "");

            echo "<p>Analisando o número <strong>$numero</strong> </p>";
            echo "<p>A parte inteira do número é <strong>$parteInteira</strong></p>";
            echo "<p>A parte fracionária do número é <strong>$parteFracionada</strong</p>";

        
        ?>
        <!--<p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>-->
        <button onclick="javascript:history.go(-1)"> &#x2b05; Voltar</button>
    </main>

    
</body>
</html>