<?php
    
$arquivo = fopen("clientes.txt","w");
$listaClientes = [
        [
            "nome" => "Marcelo",
            "idade" => 25
        ],   
        [
            "nome" => "Renata",
            "idade" => 30
        ]  
];

// print_r($listaClientes[0]["nome"]);
// print_r($listaClientes[0]["idade"]);

for ($i=0; $i < count($listaClientes); $i++) { 
    fwrite($arquivo, $listaClientes[$i]["nome"]."\t".$listaClientes[$i]["idade"]."\n");
    echo $listaClientes[$i]["nome"]."\t".$listaClientes[$i]["idade"]."<br>";
}

fclose($arquivo);

?>
