<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
$conteudo1 = fread($arquivo, filesize($nomearquivo));
$conteudo2 = fgets($arquivo, filesize($nomearquivo));

echo $conteudo1
echo $conteudo2
fclose($arquivo);


?>