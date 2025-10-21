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
* Descritivo: Crie um procedimento mostrarTabuada que receba um número e
* imprima sua tabuada de 1 a 10.
*******************************************************************************/

/**
 * Procedimento que imprime a tabuada de um número.
 * @param int $numero O número para o qual a tabuada será gerada.
 */
function mostrarTabuada($numero) {
    echo "--- Tabuada do " . $numero . " ---\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo $numero . " x " . $i . " = " . $resultado . "\n";
    }
}

// Pede ao usuário para digitar um número para a tabuada
$numeroEscolhido = (int)readline("Digite um número para ver sua tabuada: ");

// Chama o procedimento para exibir a tabuada do número escolhido
mostrarTabuada($numeroEscolhido);
?>