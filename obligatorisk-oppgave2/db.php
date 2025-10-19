<?php
$host = "localhost";
$user = "107893";
$pass = "1fe1107893";
$db   = "prg120v";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Feil ved tilkobling: " . $conn->connect_error);
}
?>
