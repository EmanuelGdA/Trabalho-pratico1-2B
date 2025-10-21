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
* Descritivo: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort().
*******************************************************************************/

// Array com os números desordenados
$numeros = [10, 2, 5, 8, 1];

echo "Array original: \n";
print_r($numeros);

// A função sort() ordena o array diretamente. Ela não retorna um novo array.
sort($numeros);

echo "\nArray ordenado em ordem crescente: \n";
print_r($numeros);
?>