<table border="2">
    <thead>
        <tr>
            <th>Dados</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $arquivo = fopen("fornecedores.txt","r");
        while (!feof($arquivo)) { 
            $linha = fgets($arquivo,100); 
            echo "<tr>";
            echo "<td>$linha</td>";
            echo "</tr>";
        }
        fclose($arquivo);
        ?>
    </tbody>
</table>