<?php

$todosAlunos = [
    0 => [
        "nome" => "Alessandra",
        "idade" => 17,
        "media" => 10
    ],
    1 => [
        "nome" => "Alinne",
        "idade" => 17,
        "media" => 10
    ],
    2 => [
        "nome" => "Giovana",
        "idade" => 17,
        "media" => 10
    ],
    3 => [
        "nome" => "Giovanna",
        "idade" => 18,
        "media" => 10
    ],
];

/* Imprimindo posição específica da matriz
* echo $todosAlunos[0]["nome"];
*/

// Imprimindo com foreach todos os elementos da matriz
for($i = 0; $i < 4; $i++){
    foreach($todosAlunos[$i] as $chave => $valor){
        echo "<strong>$chave</strong>: $valor <br/>";
    }
}
?>