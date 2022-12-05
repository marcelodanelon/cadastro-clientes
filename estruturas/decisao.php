<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes</h1>
    <?php
    $nome = "Marcelo";
    $idade = 25;
    $fumante = false;
    
    echo "<p>Id cliente: $nome<br>";
    echo "Idade cliente: $idade anos<br>";
    echo "Fumante: $fumante<br></p>";
    /* 
    OPERADORES ARITMETICOS - PHP
        Adição: (+)
        Subtração: (-)
        Multiplicação: (*)
        Divisão: (/)
        Módulo - resto da divisão: (%)
    */
        echo 20*3;
        echo "<br>";
    /*
    OPERADORES RELACIONAIS/COMPARAÇÃO - PHP
        (==) Igual a
        (===) Idêntico, e do mesmo tipo de dados
        (!=),(<>) Diferente de
        (!==) Não idêntico
        (<) Menor que
        (>) Maior que
        (<=) Menor ou igual a
        (>=) Maior ou igual a
        (<=>) Define um inteiro(-1,0,1) caso o resultado da comparação for menor que, igual ou maior que, respectivamente
    */
        echo 20>10;
        echo "<br>";
    /*
    OPERADORES LÓGICOS - PHP
    */
        echo "Operadores lógicos<br>";
        echo !$fumante;

        $idade = 75;
        if($idade >= 18 && $fumante == false && $idade<70){
            echo "<p>Sua idade é $idade anos</p>";
            echo "<p>Pode entrar na festa</p>";
        }else if($idade >= 70){
            echo "<p>Pessoas acima de 70 anos, não podem entrar na festa</p>";
        }else{
            echo "<p>Você não pode entrar</p>";
        }

        $nota = 3;
        if($nota>=8){
            echo "<p>Aprovado</p>";
        }else if($nota >=5){
            echo "<p>Recuperação</p>";
        }else{
            echo "<p>Reprovado</p>";
        }

        $idade = 20;
        if($idade>=18){
            echo "Pode entrar";
        }else{
            echo "Rejeitado";
        }

        echo ($idade>=18)?"<br>Pode entrar":"<br>Rejeitado";

        $cor = "verde-agua";
        switch ($cor){
            case 'vermelho':
                echo "<p>Sua cor favorita é <b>Vermelho</b></p>";
                break;
            case 'azul':
                echo "<p>Sua cor favorita é <b>Azul</b></p>";
                break;
            case 'verde':
                echo "<p>Sua cor favorita é <b>Verde</b></p>";
                break;
            default:
                echo "<p>Sua cor favorita não é Verde, nem Azul ou Vermelho</p>";
                break;
        }

        $dia = 2;
        switch ($dia) {
            case 1:
                echo "<p>Domingo</p>";
                break;
            case 2:
                echo "<p>Segunda-Feira</p>";
                break;
            case 3:
                echo "<p>Terça-Feira</p>";
                break;
            case 4:
                echo "<p>Quarta-Feira</p>";
                break;  
            case 5:
                echo "<p>Quinta-Feira</p>";
                break;
            case 6:
                echo "<p>Sexta-Feira</p>";
                break;
            case 7:
                echo "<p>Sábado</p>";
                break;              
            default:
                echo "<p>Dia inválido</p>";
                break;
        }
    ?>
</body>
</html>