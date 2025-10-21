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
Descritivo: Crie um programa que peça ao usuário para adivinhar um número (ex: 7) e continue pedindo até que ele acerte.
*******************************************************************************/

define('NUMERO_SECRETO', 7);

echo "Jogo da Adivinhação!\n";
echo "Tente adivinhar o número secreto (entre 1 e 10).\n";

$palpite = null;

while ($palpite != NUMERO_SECRETO) {
    
    $entrada_do_usuario = readline("Qual é o seu palpite? ");
    
    $palpite = (int)$entrada_do_usuario;

    if ($palpite != NUMERO_SECRETO) {
        echo "Errado. Tente novamente!\n";
    }
}

echo "Parabéns! Você acertou! O número secreto era " . NUMERO_SECRETO . ".\n";
?>