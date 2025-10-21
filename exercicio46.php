<?php

/*******************************************************************************
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
Descritivo: Função: Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.
*******************************************************************************/

// Cria a função que verifica se um número é primo
function ehPrimo($numero) {
 if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

// Testa a função

$valor = 24;

if (ehPrimo($valor)) {
    echo "$valor é um número primo.";
} else {
    echo "$valor não é um número primo.";
}
?>
