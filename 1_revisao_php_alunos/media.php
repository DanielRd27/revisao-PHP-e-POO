<?php

$teste = [
    1,
    2,
    2
];

$turma = [
    ["nome" => "Ana Silva", "notas" => [8.5, 9.0, 7.5]],
    ["nome" => "Pedro Santos", "notas" => [6.0, 7.5, 8.0]],
    ["nome" => "Maria Oliveira", "notas" => [9.5, 9.0, 10.0]],
    ["nome" => "João Costa", "notas" => [5.0, 6.5, 7.0]],
    ["nome" => "Lucia Pereira", "notas" => [7.5, 8.0, 6.5]]
];

function mediaAlunos($listAlunos) {

    foreach ($listAlunos as $aluno) {
        $nota = $aluno['notas'];
        $nome = $aluno['nome'];
        $soma = 0;
        $quantidade = count($nota);

        foreach ($nota as $number) {
            $soma += $number;
        }
        $media = $soma / $quantidade;
        
    $mediaAluno = number_format($media, 1, ',', '.');
    
    $cores = [
        "exelente" => "blue",
        "aprovado" => "green",
        "recuperacao" => "orange",
        "reprovado" => "red"
    ];

    if ($media >= 9 && $media <= 10) {
        $avaliacao = "exelente";
    } elseif ($media >= 7 && $media < 9) {
        $avaliacao = "aprovado";
    } elseif ($media >= 6 && $media < 7) {
        $avaliacao = "recuperacao";
    } elseif ($media < 6 && $media >= 0) {
        $avaliacao = "reprovado";
    } 

    $cor = $cores[$avaliacao];
    
    echo "$nome - Media - <span style='color: $cor'>$mediaAluno ($avaliacao)</span>";
    echo "<br>";
    }
}

echo mediaAlunos($turma);


?>