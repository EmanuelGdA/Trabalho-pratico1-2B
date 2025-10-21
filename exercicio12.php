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
* Descritivo: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use
* do-while para mostrar o menu até que o usuário escolha "Sair".
*******************************************************************************/

$opcao = 0;

// O laço do-while garante que o menu seja exibido pelo menos uma vez
do {
    echo "--------- MENU ---------\n";
    echo "1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";
    echo "------------------------\n";
    
    // Pede ao usuário para escolher uma opção
    $opcao = (int)readline("Escolha uma opção: ");

    // O switch verifica a opção escolhida e executa uma ação
    switch ($opcao) {
        case 1:
            echo ">> Sistema INICIADO.\n\n";
            break;
        case 2:
            echo ">> Sistema PARADO.\n\n";
            break;
        case 3:
            echo ">> Saindo do sistema...\n\n";
            break;
        default:
            echo ">> Opção inválida! Tente novamente.\n\n";
            break;
    }
// A condição para continuar no laço é que a opção seja diferente de 3
} while ($opcao != 3);
?>