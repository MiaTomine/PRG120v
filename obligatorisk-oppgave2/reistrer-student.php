<?php include("obligatorisk-oppgave2/db.php"); ?>


<?php
if (isset($_POST['lagre'])) {
    $stmt = $conn->prepare("INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['brukernavn'], $_POST['fornavn'], $_POST['etternavn'], $_POST['klassekode']);
    if ($stmt->execute()) {
        echo "Student registrert!";
    } else {
        echo "Feil: " . $stmt->error;
    }
}
?>
