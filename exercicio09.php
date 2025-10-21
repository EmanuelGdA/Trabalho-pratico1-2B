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
* Descritivo: Escreva um programa que leia números do usuário até que ele digite 0
* e, no final, mostre a soma de todos os números digitados.
*******************************************************************************/

$soma = 0;
// Inicializamos $numero com um valor diferente de 0 para garantir a entrada no laço.
$numero = 1; 

echo "Digite números para somar. Digite 0 para finalizar.\n";

// O laço continuará enquanto o número digitado for diferente de 0.
while ($numero != 0) {
    // Pede o número ao usuário. Esta é a primeira ação dentro do loop.
    $numero = (int)readline("Digite um número: ");

    // Adiciona o número lido à variável de soma.
    $soma += $numero;
}

echo "A soma total dos números digitados é: " . $soma . "\n";
?>