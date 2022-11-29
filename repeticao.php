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
        echo "<br>";
        
        $clientes = ["Guto","Cleyton","Renata","Pedro","Andrea","Ana"]; //array
        for ($i=0; $i < 5; $i++) { 
            echo "$clientes[$i]<br>";
        }
        echo "<br>";
        $contador = 0;
        while ($contador < count($clientes)){
            echo "Cliente: $clientes[$contador]<br>";
            $contador += 1;
        }
    ?>
</body>
</html>