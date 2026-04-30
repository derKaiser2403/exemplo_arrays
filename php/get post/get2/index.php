<?php
/*
    isset é uma função que retorna true se uma variavel existe ou se ela tem valor.
    empty retorna verdadeiro se a variável ta vazia.
*/

if (isset($_GET['nome']) && !empty($_GET['nome'])) {
    $nome = $_GET['nome'];
    echo "Olá, $nome!";
} else {
    echo "Informe seu nome na URL. Exemplo: ?nome=João";
}
?>