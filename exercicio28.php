<?php 
    /******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25291090-2 - João Lucas Veiga de Carvalho
 25164719-2 - Rafael Maia
 25033056-2 - Gabriel Michels Cubas
 25246927-2 - João Paulo Mayer Bera
 25001118-2 - Emanuel Gomes de Almeida
 25361613-2 - Arthur Marinho Figueira
 25362639-2 - Roberti Mendes de moura 
Data: 08 de Outubro de 2025
Descritivo: : Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
*******************************************************************************/

$frutas = [
    'Banana',
    'Morango',
    'Uva',
    'Melão',
    'Melancia',
    'Laranja',
    'Bergamota'
];


$fruta_procurada = 'Maçã';


if (in_array($fruta_procurada, $frutas)) {
    echo "SIM! A fruta '$fruta_procurada' existe no array.\n";
} else {
    echo "NÃO. A fruta '$fruta_procurada' não foi encontrada no array.\n";
}

?>