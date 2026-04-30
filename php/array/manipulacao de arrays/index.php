<?php

echo "Exemplo 7: Manipulando arrays - Adiciona item <br><br>";
$carros = ["Gol", "Corsa"];
array_push($carros, "Fusca");

print_r($carros); // Array ( [0] => Gol [1] => Corsa [2] => Fusca )
echo "<br><br>";
echo "Exemplo 7: Manipulando arrays - Contar itens <br><br>";
echo "Quantidade de carros: ";
echo count($carros); // 3
echo "<br><br>";


echo "Exemplo 7: Manipulando arrays - Verificar existência <br>";
if (in_array("Gol", $carros)) {
    echo "Existe!";
}

echo "<br><br>";
echo "Exemplo 7: Manipulando arrays - Remover item <br>";
unset($carros[1]);
print_r($carros);

?>