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
Descritivo: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada.
*******************************************************************************/
$senha = "";
do {
    $senha = readline("Por favor, digite a senha: ");

    if ($senha != "1234") {
        echo "\n Senha incorreta!\n";
    }


} while ($senha != "1234");

echo "Senha correta! \n";

?>