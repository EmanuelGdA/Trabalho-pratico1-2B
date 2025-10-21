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
* Descritivo: Escreva uma função calcularAreaRetangulo que receba a largura e 
* a altura e retorne a área.
*******************************************************************************/

/**
 * Função que calcula a área de um retângulo.
 * @param float $largura A largura do retângulo.
 * @param float $altura A altura do retângulo.
 * @return float A área calculada.
 */
function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

// Definindo os valores para o cálculo
$largura = 10;
$altura = 5;

// Chamando a função e armazenando o resultado
$area = calcularAreaRetangulo($largura, $altura);

echo "A área de um retângulo com largura " . $largura . " e altura " . $altura . " é: " . $area . "\n";
?>