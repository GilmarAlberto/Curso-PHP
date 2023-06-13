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
            $nome = $_GET["nome"] ?? "none";
            $sobrenome = $_GET["sobrenome"] ?? "none";
            echo "É um prazer te conhecer <strong>$nome $sobrenome</strong>! Este é o meu site";
        
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    
</body>
</html>