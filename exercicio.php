<?php

$dados = [
    "nome" => "Alinne",
    "idade" => 17,
    "time" => "Nenhum",
    "comida" => "Hambúrguer"
];

foreach($dados as $chave => $valor){
    echo "<p><strong>$chave</strong>: $valor</p>";
};


echo "<table>";
    foreach($dados as $chave => $valor){
        echo "<tr>
        <td>$chave: </td>
        <td>$valor</td>
        </tr>";
    };
 echo "</table>";
 
?>