<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>       
        <h1>Conversor de Moedas</h1>
    </header>
    <main>
        <?php 
            $real = $_GET["real"] ?? 0;

            $cotacao = 4.90;
            $dolar = $real/$cotacao ;
            
           /*
           Forma mais simples de formatar moedas

           echo "<p>Seus R\$ " . number_format($real,2,",", ".") . " equivalem a US\$ " . number_format($dolar,2) . "</p>;
           */

            /*
            Forma mais completa e profissional de formatar moedas.
            */

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD" ) . "</p>";
            
            
            
            
        ?>
        <!--<p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>-->
        <button onclick="javascript:history.go(-1)"> &#x2b05; Voltar</button>
    </main>

    
</body>
</html>