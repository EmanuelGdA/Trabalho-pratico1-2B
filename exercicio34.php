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
Descritivo: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
*******************************************************************************/

    function verificarParImpar($n){
        if (!is_int($n)){
            echo "o valor fornecido('$n') não é um número inteiro \n";
            return;
        }
    

    if ($n % 2 == 0){
        echo "O número é par. \n";
    } else {
        echo "O número $n é ímpar. \n";
    }
}   

    verificarParImpar(11);
    verificarParImpar(6);
    verificarParImpar("cachorro");

// Fiz uma parte adicional, para que o usuario digite o numero da verificação /

$digitado = readline("Digite um número inteiro: ");

if (is_numeric($digitado)){

    $n_inteiro = (int)$digitado;

    verificarParImpar($n_inteiro);
} else {
    echo "O valor '$digitado' não é um número \n";
}

?>