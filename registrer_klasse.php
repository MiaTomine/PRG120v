<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $klassekode = $_POST['klassekode'];
    $klassenavn = $_POST['klassenavn'];
    $studiumkode = $_POST['studiumkode'];

    $sql = "INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES ('$klassekode', '$klassenavn', '$studiumkode')";
    
    if (mysqli_query($db, $sql)) {
        echo "Klasse registrert vellykket.";
    } else {
        echo "Feil: " . mysqli_error($db);
    }
}

mysqli_close($db);
?>
