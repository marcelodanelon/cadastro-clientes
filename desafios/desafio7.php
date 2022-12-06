<?php
$data = [
    [
        "name" => "Constance Alford",
        "email" => "lacinia.sed@yahoo.com",
        "country" => "United States"
    ],
    [
        "name" => "Ariana Jacobs",
        "email" => "non.feugiat@aol.ca",
        "country" => "Canada"
    ],
    [
        "name" => "Cade Wheeler",
        "email" => "egestas@protonmail.org",
        "country" => "Philippines"
    ],
    [
        "name" => "Hayes Greene",
        "email" => "sed.nunc.est@icloud.edu",
        "country" => "Norway"
    ],
    [
        "name" => "Quinlan Brock",
        "email" => "ac.sem@hotmail.net",
        "country" => "Vietnam"
    ]
];

$arquivo = fopen("fornecedores.txt","w");

for ($i=0; $i < count($data); $i++) { 
    fwrite($arquivo,$data[$i]["name"]."\t".$data[$i]["email"]."\t".$data[$i]["country"]."\n");
}
fclose($arquivo);
?>