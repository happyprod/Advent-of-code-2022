<?php
//ler o valor da fatia e do valor, depois ler o valor da fatia da bd e somar os 2. depois é dar update/editar 

session_start();
    $fatia = $_POST['fatia'];
    $valor = $_POST['valor'];
    $email = $_SESSION['email'];
    $soma = 0;

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
    $query = "SELECT valor FROM fatias WHERE email='$email' AND fatia='$fatia' AND lucro='false'";
    // execute a consulta
    $result = mysqli_query($conn, $query);

    if ($result) {
        // percorra todos os resultados da consulta e adicione-os à combobox
        while ($row = mysqli_fetch_assoc($result)) {
            $soma = $valor + $row['valor'];
        }
    } else {
        // se a consulta falhar, exiba uma mensagem de erro
        echo "Erro ao recuperar dados: " . mysqli_error($conn);
    }



    $sql = "UPDATE fatias SET valor='$soma' WHERE email='$email' AND fatia='$fatia' AND lucro='false'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Linha atualizada com sucesso.";
    } else {
        echo "Erro ao atualizar linha: " . mysqli_error($conn);
    }

?>