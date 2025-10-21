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
* Descritivo: Faça um procedimento que receba um array associativo de um carro
* (marca, modelo, ano) e imprima seus dados.
*******************************************************************************/

/**
 * Procedimento para exibir os dados de um carro.
 * @param array $carro Array associativo com as chaves 'marca', 'modelo' e 'ano'.
 */
function imprimirDadosCarro($carro) {
    echo "--- Detalhes do Veículo ---\n";
    echo "Marca: " . $carro['marca'] . "\n";
    echo "Modelo: " . $carro['modelo'] . "\n";
    echo "Ano: " . $carro['ano'] . "\n";
    echo "---------------------------\n";
}

// Criando um array associativo de exemplo para um carro
$meuCarro = [
    "marca" => "Fiat",
    "modelo" => "Uno",
    "ano" => 1998
];

// Chamando o procedimento e passando o array do carro como argumento
imprimirDadosCarro($meuCarro);
?>