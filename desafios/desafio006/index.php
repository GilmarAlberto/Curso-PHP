<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do formulário retroalimentado

        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 1;
    ?>
    
    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" min=0 value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min=1 value="<?=$valor2?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $divisão = floor($valor1 / $valor2);
            $resto = $valor1 % $valor2;
            
            /*echo "<p>O dividendo é <strong>igual a $valor1 </strong></p>";
            echo "<p>O divisor é <strong>igual a $valor2 </strong> </p>";
            echo "<p>A divisão entre os valores $valor1 e $valor2 é <strong> igual a $divisão</strong></p>";
            echo "<p>O resto da divisão entre os valores $valor1 e $valor2 é <strong> igual a $resto </strong></p>";
            */
        
        ?>

        <table class='divisao'>
            <tr>    
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$divisão?></td>
            </tr>

        </table>

    </section>
    
</body>
</html>