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
Descritivo: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.
*******************************************************************************/

function maiorNumero(float $num1, float $num2): float
{
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

echo "Testando \n";

echo "O maior número entre 10 e 5 é: " . maiorNumero(10, 5) . "\n";
echo "O maior número entre 3 e 8 é: " . maiorNumero(3, 8) . "\n";
echo "O maior número entre 7.5 e 7.2 é: " . maiorNumero(7.5, 7.2) . "\n";
echo "O maior número entre -10 e -2 é: " . maiorNumero(-10, -2) . "\n";

?>