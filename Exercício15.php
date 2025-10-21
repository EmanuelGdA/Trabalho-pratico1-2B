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
* Descritivo: FOR/IF: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.
***************************/
for ($num = 2; $num <= 50; $num++) {
    $isPrime = true;             

    for ($div = 2; $div * $div <= $num; $div++) { 
        if ($num % $div == 0) {
            $isPrime = false;    
            break;               
        }
    }

    if ($isPrime) {
        echo $num . "\n";      
    }
}
?>