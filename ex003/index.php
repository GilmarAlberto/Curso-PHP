<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        // 0x - hexadecimal 0b = binário 0 = octal
        $num = 300;
        echo "O valor da variavel é $num<br>";
        $num = 0x1a;
        echo "O valor da variavel é $num<br>";
        $num = 010;
        echo "O valor da variavel é $num <br>";

        $v = 300;
        var_dump($v);
        echo "<br>";

        $v = 45.2;
        var_dump($v);
        echo "<br>";

        $v = true;
        var_dump($v);
        echo "<br>";

        $v = "Gilmar";
        var_dump($v);
        echo "<br>";

        $v = 3e2;
        var_dump($v);
        echo "<br>";

        $v = (int)3e2;
        var_dump($v);
        echo "<br>";

        $v = (int)"350";
        var_dump($v);
        echo "<br>";

        $v = [2,4,5,6,8,7];

        var_dump($v);
        echo "<br>";
    
    ?>
    
</body>
</html>