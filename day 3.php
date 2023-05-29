<?php

$n = 0; // Contador
$tamm = 0; //tamanho

do {
    $temp = "";
    $temp = readline(); // Lê
    $flag = 0;

    if ($temp !== "") { // Verifica se o input não está vazio
        $tam = strlen($temp); // Obtém o comprimento do input
        $tam2 = $tam / 2; // Divide o comprimento pela metade para obter o tamanho de cada compartimento
        $temp2[$n] = substr($temp, $tam2, $tam); // Obtém a segunda metade do input
        $temp3[$n] = substr($temp, 0, $tam2); // Obtém a primeira metade do input
        $array[$n] = str_split($temp2[$n]); // Converte o segundo compartimento em um array de caracteres
        $array2[$n] = str_split($temp3[$n]); // Converte o primeiro compartimento em um array de caracteres

        for ($i = 0; $i < $tam2; $i++) {
            for ($ii = 0; $ii < $tam2; $ii++) {
                if (str_contains($array[$n][$i], $array2[$n][$ii])) {
                    // Verifica se um caractere do segundo compartimento existe no primeiro compartimento
                    $array3[$n][$ii] = $array[$n][$i]; // Armazena o caractere repetido no array $array3
                    $tamm = $tamm + 1; // Incrementa o contador de repetições
                }
            }
        }
        $n = $n + 1; // Incrementa o contador principal
    }
} while ($temp !== ""); // Continua o loop até que uma linha vazia seja inserida

for ($i = 0; $i < $n; $i++) {
    $array3[$i] = array_unique($array3[$i]); // Remove elementos duplicados do array $array3
}

// Mostra os resultados
for ($i = 0; $i < $n; $i++) {
    echo 'Mochila ' . ($i + 1) . ": " . $temp2[$i] . $temp3[$i];
    echo "\n";
    echo 'Compartimento 1: ' . implode(", ", $array[$i]);
    echo "\n";
    echo 'Compartimento 2: ' . implode(", ", $array2[$i]);
    echo "\n";
    echo 'Repetidos: ' . implode(", ", $array3[$i]);
    echo "\n";
    echo "\n";
}

$minusculas = 0; // Variável para armazenar a soma das prioridades dos caracteres minúsculos
$maiusculas = 0; // Variável para armazenar a soma das prioridades dos caracteres maiúsculos
$alfmin = range('a', 'z'); // Array com os caracteres minúsculos
$alfmai = range('A', 'Z'); // Array com os caracteres maiúsculos

for ($i = 0; $i < $n; $i++) {
    foreach ($array3[$i] as $value) {
        if (in_array($value, $alfmai)) { // Verifica se o valor está no array de caracteres maiúsculos
            $prioridade = ord($value) - 38; // Calcula a prioridade do caractere maiúsculo
            $maiusculas += $prioridade; // Adiciona a prioridade à soma das prioridades dos caracteres maiúsculos
        } elseif (in_array($value, $alfmin)) { // Verifica se o valor está no array de caracteres minúsculos
            $prioridade = ord($value) - 96; // Calcula a prioridade do caractere minúsculo
            $minusculas += $prioridade; // Adiciona a prioridade à soma das prioridades dos caracteres minúsculos
        }
    }
}

$total = $minusculas + $maiusculas; // Calcula a soma total das prioridades

echo "Soma dos caracteres minusculos: " . $minusculas; // Mostra a soma das prioridades dos caracteres minúsculos
echo "\n";
echo "Soma dos caracteres maiusculos: " . $maiusculas; // Mostra a soma das prioridades dos caracteres maiúsculos
echo "\n";
echo "Total: " . $total; // Mostra a soma total das prioridades

?>
