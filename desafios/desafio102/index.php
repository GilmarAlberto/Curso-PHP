<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio002</title>
</head>
<body>
    <?php 
        /*
        1. Concatenação: Crie uma string que combine o seu nome com o sobrenome.
        2. Contagem de caracteres: Determine o número de caracteres em uma determinada string.
        3. Substring: Extraia uma parte específica de uma string.
        4. Maiúsculas e minúsculas: Converta uma string para letras maiúsculas ou minúsculas.
        5. Substituição: Substitua todas as ocorrências de uma determinada palavra em uma string por outra palavra.
        6. Quebra de string: Divida uma string em um array de substrings com base em um caractere delimitador.
        7. Remoção de espaços em branco: Remova todos os espaços em branco de uma string.
        8. Verificação de palíndromo: Verifique se uma determinada string é um palíndromo (lê-se da mesma forma de trás para frente).
        9. Contagem de ocorrências: Conte quantas vezes uma determinada palavra aparece em uma string.
        10. Inversão de string: Inverta a ordem dos caracteres em uma string.

        */
    
        //1. Concatenação: Crie uma string que combine o seu nome com o sobrenome.
        $nome = "Gilmar";
        $sobrenome = "Pinto";

        echo "Meu nome é $nome $sobrenome<br>";

        //2. Contagem de caracteres: Determine o número de caracteres em uma determinada string.

        $nome = "Gilmar Alberto de Abreu Pinto";
        $contador = strlen($nome);

        echo "A string \"$nome\" tem $contador caracteres<br>";

        //3. Substring: Extraia uma parte específica de uma string.

        $sub = substr($nome, 7,7);

        echo "O substring da string \"$nome\" é $sub<br>";

        //4. Maiúsculas e minúsculas: Converta uma string para letras maiúsculas ou minúsculas.

        $maiuscula = strtoupper($nome);
        $minuscula = strtolower($nome);
        
        echo "Maiúscula: $maiuscula<br>";
        echo "Minúscula: $minuscula<br>";

        //5. Substituição: Substitua todas as ocorrências de uma determinada palavra em uma string por outra palavra.

        $subst = substr_replace($nome, "Dick", 24, 5 );

        echo $subst."<br>";

        //6. Quebra de string: Divida uma string em um array de substrings com base em um caractere delimitador.

        $arraySubstrings = explode(" ", $nome);

        print_r($arraySubstrings);
        
        echo "<br>";

        //7. Remoção de espaços em branco: Remova todos os espaços em branco de uma string.

        $sem_espaco = str_replace(" ","",$nome);

        echo $sem_espaco."<br>";
        
        //8. Verificação de palíndromo: Verifique se uma determinada string é um palíndromo (lê-se da mesma forma de trás para frente).

        $nome = "osso";

        $reverso = strrev($nome);

        if($nome==$reverso){
            echo "É palíndromo";
        }else{
            echo "Não é palíndromo";
        }

        echo "<br>";

        //9. Contagem de ocorrências: Conte quantas vezes uma determinada palavra aparece em uma string.

        $nome = "Gilmar Alberto Gilmar Abreu Gilmar Pinto";
        $conta = substr_count($nome, "Gilmar");

        echo $conta."<br>";

        //10. Inversão de string: Inverta a ordem dos caracteres em uma string.

        $reverso = strrev($nome);

        echo $reverso
    
    ?>
    
</body>
</html>