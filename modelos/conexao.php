<?php

$servername = "localhost";
$database   = "adote1";
$username   = "root";
$password   = "";

// conexão protegida
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset('utf8mb4');

if (!$conn) {
    die("Erro na Conexão: " . mysqli_connect_error());
}

?>