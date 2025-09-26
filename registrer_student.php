<?php
include("db-tilkobling.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brukernavn = $_POST['brukernavn'];
    $fornavn = $_POST['fornavn'];
    $etternavn = $_POST['etternavn'];
    $klassekode = $_POST['klassekode'];

    $sql = "INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode')";
    
    if (mysqli_query($db, $sql)) {
        echo "Student registrert vellykket.";
    } else {
        echo "Feil: " . mysqli_error($db);
    }
}

mysqli_close($db);
?>
