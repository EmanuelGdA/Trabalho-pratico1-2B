<?php
/***************************
* Curso: Engenharia de Software
* Disciplina: Linguagem e Técnicas de Programacão
* Professor: Flores
* Turma: ESOFT-2B
* Componentes:
*     25291090-2 - João Lucas Veiga de Carvalho
*     25164719-2 - Rafael Maia
*     25033056-2 - Gabriel Michels Cubas
*     25246927-2 - João Paulo Mayer Bera
*     25001118-2 - Emanuel Gomes de Almeida
*     25361613-2 - Arthur Marinho Figueira
*     25362639-2 - Roberti Mendes de moura 
* Data: 08 de Outubro de 2025
* Descritivo: Função: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().
***************************/
function inverterString($texto) {
    $invertida = "";               
    $tamanho = strlen($texto);     

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $texto[$i];  
    }

    return $invertida;             
}

$palavra = "software";
$palavraInvertida = inverterString($palavra);
echo $palavraInvertida;
?>