<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
*     25291090-2 - João Lucas Veiga de Carvalho
*     25164719-2 - Rafael Maia
*     25033056-2 - Gabriel Michels Cubas
*     25246927-2 - João Paulo Mayer Bera
*     25001118-2 - Emanuel Gomes de Almeida
*     25361613-2 - Arthur Marinho Figueira
*     25362639-2 - Roberti Mendes de moura 
Data: 08 de Outubro de 2025
Descritivo: FOREACH Aninhado: Usando o array de produtos do exercício 23, 
imprima o nome e o preço de cada produto.
*******************************************************************************/

$produtos = array(
    array("nome" => "Notebook Gamer", "preco" => 7500.00),
    array("nome" => "Mouse sem fio", "preco" => 150.50),
    array("nome" => "Teclado Mecânico", "preco" => 350.75),
    
);
foreach ($produtos as $produto)
    {
    foreach ($produto as $chave => $valor) 
        {
            echo ($chave) . ": " . (is_numeric($valor) ? "R$ " . number_format($valor, 2) : $valor) . "\n";
        }
        echo "\n";
    }
?>