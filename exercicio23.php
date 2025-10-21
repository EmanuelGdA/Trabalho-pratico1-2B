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
* Descritivo: Crie um array de produtos, onde cada produto é um array associativo 
* com "nome" e "preço".
*******************************************************************************/

// Criação de um array contendo outros arrays associativos (produtos)
$produtos = [
    ["nome" => "Notebook Gamer", "preco" => 7500.00],
    ["nome" => "Mouse sem fio", "preco" => 150.50],
    ["nome" => "Teclado Mecânico", "preco" => 350.75]
];

echo "Array de produtos criado:\n";
print_r($produtos);
?>