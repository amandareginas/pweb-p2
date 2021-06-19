<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "loja";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
?>