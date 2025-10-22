<?php include("obligatorisk-oppgave2/db.php"); ?>
<?php
if (isset($_POST['slett'])) {
    $stmt = $conn->prepare("DELETE FROM student WHERE brukernavn=?");
    $stmt->bind_param("s", $_POST['brukernavn']);
    if ($stmt->execute()) {
        echo "Student slettet!";
    } else {
        echo "Feil: " . $stmt->error;
    }
}
?>
