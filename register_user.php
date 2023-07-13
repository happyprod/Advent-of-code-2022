<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $servername = "localhost";
    $database = "yazaki_p1";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexão falhada: " . $conn->connect_error);
    }

    $flag = 0;
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["email"] == $email) {
                $flag = 1;
                header("Location: register.php");
            }
        }
    }


    if ($flag == 0) {
        mkdir(__DIR__.'/utilizador/' . $email . '/', 0777, true);
        $diretorio = "./img/foto/default.jpg";
        $sql = "INSERT INTO login (id_user, nome, email, senha, fotop) VALUES (null, 'Truck lover', '$email', '$senha', '$diretorio')";
        mysqli_query($conn, $sql);
        header("Location: login.php");
    }

} else {
    header("Location: register.php");
}
?>