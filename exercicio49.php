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
Descritivo: : Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.
*******************************************************************************/

function gerarArrayPares(int $n): array
{
    $array_de_pares = [];

    if ($n < 0) {
        return $array_de_pares;
    }

    for ($i = 0; $i <= $n; $i++) {
        
        if ($i % 2 == 0) {
            
            $array_de_pares[] = $i;
        }
    }
    return $array_de_pares;
}


// --- Demonstração de Uso ---

echo "Testando\n";

$limite = 23;
$resultado = gerarArrayPares($limite);

echo "Pares de 0 até $limite:\n";
print_r($resultado);

?>