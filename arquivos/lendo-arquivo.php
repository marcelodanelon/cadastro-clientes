<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
$conteudo = fread($arquivo, filesize($nomearquivo));
fclose($arquivo);

echo $conteudo
?>