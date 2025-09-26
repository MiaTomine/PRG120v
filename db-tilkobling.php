<?php
$db = mysqli_connect("localhost", "brukernavn", "passord", "databasenavn");

if (!$db) {
    die("Tilkobling feilet: " . mysqli_connect_error());
}
?>
