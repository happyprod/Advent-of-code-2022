<?php

    error_reporting(0);

    $servername = "localhost";
    $database = "yazaki_p1";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // verifique a conexão
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
                    
    // crie a consulta para selecionar todos os nomes da tabela
    $query = "SELECT valor FROM fatias WHERE lucro='true'";
    // execute a consulta
    $result = mysqli_query($conn, $query);

    // verifique se a consulta teve sucesso
    if ($result) {
        // percorra todos os resultados da consulta e adicione-os à combobox
        while ($row = mysqli_fetch_assoc($result)) {
            $somabrutos = $somabrutos + $row['valor'];
        }
    } 

    if ($somabrutos == 0)
    {
        echo "-------";
    } else {
        echo $somabrutos . "€";
    }

?>