# cadastro-clientes
 - Operadores lógicos 
 - Estrutura de decisão
    - if
    - switch
    - ternário
- Estrutura de repetição
    - while
    - for
- Desafios

## Operadores lógicos
- Os operadores lógicos são:
    - && (AND ou E) - Se apenas uma expressão for falsa, o resultado será falso. Para ser verdadeiro, todas as expressões precisam ser verdadeiras.
    - || (OR ou OU) - Uma expressão precisa ser verdadeiro para o resultado ser verdadeiro. O resultado só será falso se todas as expressões forem falso.
    - !  (NOT ou NÃO) - Inverte o resultado, se for verdadeiro e você usar o NOT, o resultado mudará para falso, se for falso mudará para verdadeiro

## Estrutura de decisão
### IF
- Quando você precisa que seu código tome alguma decisão, baseado em uma ou mais condições.
#### Sintaxe
```php
    if(condicao){
        resposta verdadeira;
    }
    else{
        resposta falso;
    }
```
#### IF SIMPLES
```php
if($idade >= 18 && $fumante == false){
    echo "<p>Sua idade é $idade anos</p>";
    echo "<p>Pode entrar na festa</p>";
}
```
#### IF com ELSE
```php
    if($idade >= 18 && $fumante == false){
        echo "<p>Sua idade é $idade anos</p>";
        echo "<p>Pode entrar na festa</p>";
    }
    else{
        echo "<p>Você não pode entrar</p>";
    }
```
#### IF com ELSE IF
```php
    $nota = 3;
    if($nota>=8){
        echo "<p>Aprovado</p>";
    }else if($nota >=5){
        echo "<p>Recuperação</p>";
    }else{
        echo "<p>Reprovado</p>";
    }
```
### Ternário
#### Sixtaxe
```php
    condicao ? resposta verdadeira : resposta falsa
```
#### Exemplo
```php
    echo ($idade>=18)?"<br>Pode entrar":"<br>Rejeitado";
```

### Switch
#### Sixtaxe
```php
    switch (variavel) {
        case valor1:
            //código a ser executado se a expressão for igual ao valor1
            break;
        case valor2:
            //código a ser executado se a expressão for igual ao valor2
            break;
        case valorN:
            //código a ser executado se a expressão for igual ao valorN
            break;
        default:
            //código
            break;
    }
```

#### Exemplo
```php
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
```