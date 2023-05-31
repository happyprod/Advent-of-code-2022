<?php

$file = './input.txt'; //Arquivo

$content = file_get_contents($file); // Lê o conteúdo do arquivo
$lines = explode("\n", $content); // Divide o conteúdo em linhas

$player1 = 0;
$player2 = 0;

foreach ($lines as $line) {

    $play = $line;
    if ($play == 'A X')
    {
        $player1 = $player1 + 1 + 3;
        $player2 = $player2 + 1 + 3;
    } else if ($play == 'A Y'){
        $player1 = $player1 + 1;
        $player2 = $player2 + 2 + 6;
    } else if ($play == 'A Z'){
        $player1 = $player1 + 1 + 6;
        $player2 = $player2 + 3;
    } else if ($play == 'B X'){
        $player1 = $player1 + 2 + 6;
        $player2 = $player2 + 1;
    } else if ($play == 'B Y') {
        $player1 = $player1 + 2 + 3;
        $player2 = $player2 + 2 + 3;
    } else if ($play == 'B Z') {
        $player1 = $player1 + 2;
        $player2 = $player2 + 3 + 6;
    } else if ($play == 'C X'){
        $player1 = $player1 + 3;
        $player2 = $player2 + 1 + 6;
    } else if ($play == 'C Y'){
        $player1 = $player1 + 3 + 6;
        $player2 = $player2 + 2;
    } else if ($play == 'C Z'){
        $player1 = $player1 + 3 + 3;
        $player2 = $player2 + 3 + 3;
    }
}

    if ($player1 > $player2)
    {
        echo $player1;
    } else {
        echo $player2;
    }

?>