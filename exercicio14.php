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
Descritivo: Escreva um programa que leia um número e o imprima. O programa deve repetir até que o número lido seja negativo.
*******************************************************************************/


echo "Digite números. O programa irá parar quando você digitar um número negativo.\n";

$numero = 0;

do {
    $entrada = readline("Digite um número: ");

    if (is_numeric($entrada)) {
        
        $numero = (float)$entrada;

        echo "Você digitou: " . $numero . "\n";

    } else {
        echo "Entrada inválida. Por favor, digite apenas números.\n";
        $numero = 0;
    }

} while ($numero >= 0);

echo "Você digitou um número negativo. Programa encerrado.\n";

?>