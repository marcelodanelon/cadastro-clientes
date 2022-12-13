<?php
    $pessoas = array(
        ["Nome","Idade","Cidade"],
        ["Guto",36,"Santa Barbara"],
        ["Marcelo",25,"Americana"]
    );
    echo "<pre>";
    print_r($pessoas);
    echo "</pre>";

    $arquivo = fopen("dados.csv","a+");

    // for ($i=0; $i < count($pessoas); $i++) { 
    //     fputcsv($arquivo,$pessoas[$i],";");
    // }    

    foreach ($pessoas as $uma_pessoa) {
        fputcsv($arquivo,$uma_pessoa,";");
    }

    fclose($arquivo);

    // for ($i=0; $i < count($pessoas); $i++) { 
    //     for ($j=0; $j < count($pessoas); $j++) { 
    //         print_r($pessoas[$i][$j]);
    //     }
    //     echo "<hr>";
    // }
?>