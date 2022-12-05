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
- Arquivo texto
    - Criar
    - Ler

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

## Estrutura de repetição
### While - ENQUANTO
- Será executado o laço enquanto a condição for verdadeira
### Sintaxe
```php
while(condicao){
    codigo
}
```
### Exemplo
```php
    while($contador <= 10){
        echo "contando: $contador<br>";
        $contador += 1;
    }
```
### Operador de incremento e decremento
- $i++ é igual a `$i = $i + 1`
- o operador `++`faz com que seja atribuído +1 à variavel incremento
- o operador `--`faz com que seja removido -1 da variável decrementada

### Array
- array é uma variável com multidimensões, isso significa que eu posso armazenar diversos valores (inclusive de tipos diferentes).
- um array possui posições iguais a quantidade de elementos. Exemplo:
`$clientes = ["Pedro","Guto","Cleyton","Renata","Pedro","Andrea","Ana"]`
- o array clientes possui 3 posições, sempre começando em 0. Para exibir o cliente Guto, eu devo usar `$clientes[1]`, para exibir o cliente Cleyton, devo usar `$clientes[3]`.
- o comando `count()` exibe a quantidade de posições de um array. Exemplo: `count($clientes)`.

### FOR - para
#### Sintaxe
```php
for(inicialização da variável; condição; incremento){
    código
}
```

#### Exemplo 1
```php
for($i=1 ; $i<=10 ; $i++){
    echo $i;
}
```

#### Exemplo 2
```php
for ($i=0; $i < 6; $i++) { 
    echo "$clientes[$i]<br>";
}
```

# Aula 05
- Arquivo de texto
    - Criar
    - Ler

### Criando um arquivo
- `fopen` : indicar o nome do arquivo e a maneira como esse arquivo será aberto. Exemplo: `fopen("clientes.txt","w");` o nome do arquivo é "clientes.txt" e a maneira como arquivo será aberto é "w", que significa escrita.
- `fwrite` : indicar o nome do arquivo e o conteúdo que será inserido nesse arquivo. Exemplo: `fwrite($arquivos,"Renata");` o nome do arquivo é "clientes.txt" e o conteúdo que será inserido no arquivo é "Renata".
- `fclose` : indicar qual arquivo será fechado. Exemplo: `fclose($arquivo);`.
```php
    $arquivo = fopen("clientes.txt","w");
    fwrite($arquivo, "Renata");
    fclose($arquivo);
```

> Tabela com os modos de abertura de arquivos: https://eufacoprogramas.com/como-manipular-arquivos-em-php/ 
### Lendo um arquivo
- `fopen` : o modo de abertura é o "r" que indica leitura do arquivo. Exemplo: `fopen("clientes.txt","r");`
- `fread` : indicar o arquivo que será lido e o tamanho das informações que serão lidas, neste caso, como normalmente queremos o arquivo inteiro, utilizamos o comando `filesize` que retorna o tamanho de um arquivo. Exemplo: `fread($arquivo, filesize("clientes.txt"));`
```php
$arquivo = fopen("clientes.txt","r");
$conteudo = fread($arquivo, filesize($nomearquivo));
fclose($arquivo);
```
