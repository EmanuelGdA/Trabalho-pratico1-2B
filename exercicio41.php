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
Descritivo:  Crie uma função chamada somar que receba dois números e retorne a soma deles.
*******************************************************************************/

function soma(float $n1, float $n2): float {
    return $n1+$n2;
}

$r1 = soma(9, 8);
echo "O resultado de 9 + 8 é: " . $r1. "\n";

$r2 = soma(2.5, 3.4);
echo "O resultado de 2.5 + 3.4 é: " . $r2 . "\n";

echo "O resultado de 386 + 439 é: " . soma(386,439) . "\n";

?>