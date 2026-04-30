<?php

// Variáveis de diferentes tipos
$nome = "Maria";        // string
$idade = 30;            // int
$altura = 1.65;         // float
$estadoCivil = false;
$maioridade = $idade >= 18;     // boolean

// Convertendo boolean para texto (true/false)
// $textoEstadoCivil = $estadoCivil ? "Sim" : "Não"; <-- If & else "simplificado";
$textomaioridade = $maioridade ? "Sim" : "Não";

if ($estadoCivil) {
    $textoEstadoCivil = "Sim";
} else {
    $textoEstadoCivil = "Não";
}

// Concatenando tudo em uma frase
$mensagem = "Nome: " . $nome .
            " | Idade: " . $idade . " anos" .
            " | Altura: " . $altura . " m" .
            " | Casada? " . $textoEstadoCivil .
            " | Maior de idade? " . $textomaioridade; 



// Exibindo na tela
echo $mensagem;

?>