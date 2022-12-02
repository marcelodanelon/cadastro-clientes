<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <h1>Repetição</h1>
    <?php
        $contador = 1;
        while($contador <= 10){
            echo "contando: $contador<br>";
            $contador += 1;
        }
        echo "<hr>";        
        $clientes = ["Pedro","Guto","Cleyton","Renata","Pedro","Andrea","Ana"]; //array
        for ($i=0; $i < 6; $i++) { 
            echo "$clientes[$i]<br>";
        }
        echo "<hr>";
        $i = 0;
        while ($i < count($clientes)){
            echo "Cliente: $clientes[$i]<br>";
            $i += 1;
        }
    ?>
</body>
</html>