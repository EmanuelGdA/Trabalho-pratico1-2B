<?php
/*******************************************************************************
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
*     25362639-2 - Roberti Mendes de Moura
* Data: 08 de Outubro de 2025
* Descritivo: Crie um programa que calcule e imprima a soma dos números de 1 a 100.
*******************************************************************************/

// Variável para acumular a soma, inicializada em 0
$soma = 0;

// O laço for percorre todos os números de 1 a 100
for ($i = 1; $i <= 100; $i++) {
    // A cada iteração, o número atual ($i) é adicionado à soma
    $soma += $i;
}

echo "A soma dos números de 1 a 100 é: " . $soma . "\n";
?>