<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2B
Componentes:
*     25291090-2 - João Lucas Veiga de Carvalho
*     25164719-2 - Rafael Maia
*     25033056-2 - Gabriel Michels Cubas
*     25246927-2 - João Paulo Mayer Bera
*     25001118-2 - Emanuel Gomes de Almeida
*     25361613-2 - Arthur Marinho Figueira
*     25362639-2 - Roberti Mendes de moura 
Data: 08 de Outubro de 2025
Descritivo: Procedimento calcularMediaAluno que recebe duas notas via teclado,
calcula e imprime a média e se o aluno foi "Aprovado" (média >= 7) ou "Reprovado".
*******************************************************************************/
$nota1 = (int)readline("Digite a primeira nota: ");
$nota2 = (int)readline("Digite a segunda nota: ");
MediaNota($nota1, $nota2);
function MediaNota($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média: " . $media . "\n";

    if ($media >= 7) {
        echo "Aprovado\n";
    } else {
        echo "Reprovado\n";
    }
}
?>