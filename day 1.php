<?php

    $e = array(); // array para os 5 elfos
    $cont = 0;
    $temp2 = 0;
    $temp = "";

    for ($i = 0; $i < 5; $i++) { // ciclo para 5 elfos
        $soma = 0;
        $cont++;
        do { // ciclo para pedir as calorias até dar o Enter e trocar de elfo
            echo "";
            $temp = readline();
            if (trim($temp) !== "") { // verifica se a variável está vazia (Enter)
                $soma += intval($temp); //+=
            }
        } while (trim($temp) !== "");
        $e[$i] = $soma;
    }

    $max = 0;
    $elfo = 0;

    for ($i = 0; $i < 5; $i++) { // verifica qual é o elfo com mais calorias
        if ($e[$i] > $max) {
            $max = $e[$i];
            $elfo = $i + 1;
        }
    }

    echo "" . $max;

?>
