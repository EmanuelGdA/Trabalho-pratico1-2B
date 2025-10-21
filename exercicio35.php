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
Descritivo:  Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
*******************************************************************************/

function imprimirArray(array $array_para_imprimir)
{
    echo "Imprimindo elementos do Array \n";
    
    foreach ($array_para_imprimir as $elemento) {
        echo $elemento . "\n";
    }
}

$dias = [
    'Domingo',
    'Segunda-feira',
    'Terça-feira',
    'Quarta-feira',
    'Quinta-feira',
    'Sexta-feira',
    'Sábado'
];

imprimirArray($dias);

?>