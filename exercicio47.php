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
* Descritivo: Crie uma função contarVogais que receba uma string e retorne
* o número de vogais.
*******************************************************************************/

/**
 * Função que conta o número de vogais em uma string.
 * @param string $texto A string a ser analisada.
 * @return int O número total de vogais encontradas.
 */
function contarVogais($texto) {
    $contador = 0;
    // Lista de vogais para verificação
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    
    // Converte toda a string para minúsculas para facilitar a contagem
    $textoMinusculo = strtolower($texto);

    // Percorre cada caractere da string
    for ($i = 0; $i < strlen($textoMinusculo); $i++) {
        // Se o caractere atual estiver na lista de vogais, incrementa o contador
        if (in_array($textoMinusculo[$i], $vogais)) {
            $contador++;
        }
    }
    
    return $contador;
}

// Pede ao usuário para digitar uma frase
$frase = readline("Digite uma frase para contar as vogais: ");

// Chama a função e armazena o resultado retornado
$totalVogais = contarVogais($frase);

echo "A frase digitada possui " . $totalVogais . " vogais.\n";
?>