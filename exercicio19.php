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
* Descritivo: Usando o array de números do exercício 17, calcule e imprima
* a soma de todos os números com foreach.
*******************************************************************************/

// 1. Criando o array com 10 números inteiros (conforme exercício 17)
$numeros = [10, 25, 8, 42, 15, 7, 33, 50, 2, 18];

// 2. Variável para acumular a soma, inicializada em 0
$soma = 0;

echo "Array de números: " . implode(", ", $numeros) . "\n";

// 3. O laço foreach percorre cada elemento do array $numeros
// A cada iteração, o elemento atual é colocado na variável $numero
foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma de todos os números do array é: " . $soma . "\n";
?>