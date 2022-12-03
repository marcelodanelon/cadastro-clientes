<?php
    $numero = $_POST["numero"];

    for ($i=0; $i <= 10; $i++) { 
        $result = $i * $numero;
        echo "$i x $numero = $result<br>";
    }
?>