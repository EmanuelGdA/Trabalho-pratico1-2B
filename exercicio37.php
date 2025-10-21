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
* Descritivo: Crie um procedimento mostrarDados que receba nome, idade e cidade 
* e os imprima de forma organizada.
*******************************************************************************/

/**
 * Procedimento que exibe dados de uma pessoa.
 * @param string $nome O nome da pessoa.
 * @param int $idade A idade da pessoa.
 * @param string $cidade A cidade da pessoa.
 */
function mostrarDados($nome, $idade, $cidade) {
    echo "--------------------------\n";
    echo "Dados do Usuário:\n";
    echo "Nome: " . $nome . "\n";
    echo "Idade: " . $idade . " anos\n";
    echo "Cidade: " . $cidade . "\n";
    echo "--------------------------\n";
}

// Chamando o procedimento com dados de exemplo
mostrarDados("João Lucas", 18, "Curitiba");
?>