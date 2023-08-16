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

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = (date("m-d-Y"));

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $dataHoraCotacao = $dados["value"][0]["dataHoraCotacao"];
            $dolar = $real/$cotacao ;

            // Formatando a data e hora
            $dataFormatada = date("d-m-Y", strtotime($dataHoraCotacao));
            $horaFormatada = date("H:i:s", strtotime($dataHoraCotacao));
            
           /*
           Forma mais simples de formatar moedas

           echo "<p>Seus R\$ " . number_format($real,2,",", ".") . " equivalem a US\$ " . number_format($dolar,2) . "</p>;
           */

            /*
            Forma mais completa e profissional de formatar moedas.
            */

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD" ) . "</p>";
            echo "<p>Cotacao do Banco Central do Brasil: " . numfmt_format_currency($padrao, $cotacao,"BRL") . " às $horaFormatada do dia $dataFormatada<p>"
            
            
        ?>
        <!--<p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>-->
        <button onclick="javascript:history.go(-1)"> &#x2b05; Voltar</button>
    </main>

    
</body>
</html>