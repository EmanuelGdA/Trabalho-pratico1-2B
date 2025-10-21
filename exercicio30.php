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
* Descritivo: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. 
* Imprima o elemento da segunda linha e terceira coluna.
*******************************************************************************/

// Criação da matriz 3x3
$matriz = [
    [1, 2, 3],  // Linha 1
    [4, 5, 6],  // Linha 2
    [7, 8, 9]   // Linha 3
];

echo "Matriz criada:\n";
print_r($matriz);

// Para acessar a "segunda linha", usamos o índice 1.
// Para acessar a "terceira coluna", usamos o índice 2.
$elemento = $matriz[1][2];

echo "\nO elemento da segunda linha e terceira coluna é: " . $elemento . "\n";
?>