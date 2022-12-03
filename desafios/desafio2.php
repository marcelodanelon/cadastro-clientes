<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio2</title>
</head>
<body>
    <?php
        echo "Números Impares:<br>";
        for ($i=1; $i <= 100; $i++) { 
            if($i % 2 == 1){
                echo "$i<br>";
            }
        }
    ?>
</body>
</html>