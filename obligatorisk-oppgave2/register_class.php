<?php include("../db.php"); ?>
<h2>Registrer ny klasse</h2>
<form method="post">
  Klassekode: <input type="text" name="klassekode"><br>
  Klassenavn: <input type="text" name="klassenavn"><br>
  Studiumkode: <input type="text" name="studiumkode"><br>
  <input type="submit" name="lagre" value="Registrer">
</form>

<?php
if (isset($_POST['lagre'])) {
    $stmt = $conn->prepare("INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['klassekode'], $_POST['klassenavn'], $_POST['studiumkode']);
    if ($stmt->execute()) {
        echo "Klasse registrert!";
    } else {
        echo "Feil: " . $stmt->error;
    }
}
?>
