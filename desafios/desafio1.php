<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio1</title>
</head>
<body>
    <?php
        echo "Números Pares:<br>";
        for ($i=1; $i <= 100; $i++) { 
            if($i % 2 == 0){
                echo "$i<br>";
            }
        }
    ?>
</body>
</html>