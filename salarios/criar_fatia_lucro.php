<?php
session_start();
    $fatia = $_POST['fatia'];
    $valor = $_POST['valor'];
    $email = $_SESSION['email'];

    $servername = "localhost";
    $database = "yazaki_p1";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // verifique a conexão
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

    
        $contador = 0;

    $query = "SELECT fatia FROM fatias WHERE email='$email' AND fatia='$fatia' AND lucro='true'";
    // execute a consulta
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $contador = $contador + 1;
        }
        
        if ($contador == 0)
        {
            $sql = "INSERT INTO fatias (id_fatia, email, fatia, valor, lucro) VALUES (null, '$email', '$fatia', '$valor', 'true')";
            mysqli_query($conn, $sql);
        }
    } else {    
        
    }

    
    
?>