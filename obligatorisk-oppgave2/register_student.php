<?php include("obligatorisk-oppgave2/db.php"); ?>

<form method="post">
  Brukernavn: <input type="text" name="brukernavn"><br>
  Fornavn: <input type="text" name="fornavn"><br>
  Etternavn: <input type="text" name="etternavn"><br>
  Klasse:
  <select name="klassekode">
    <?php
      $sql = "SELECT klassekode, klassenavn FROM klasse";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        echo "<option value='".$row['klassekode']."'>".$row['klassenavn']."</option>";
      }
    ?>
  </select><br>
  <input type="submit" name="lagre" value="Registrer">
</form>

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
