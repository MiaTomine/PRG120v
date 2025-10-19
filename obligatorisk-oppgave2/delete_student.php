<?php include("obligatorisk-oppgave2/db.php"); ?>
<h2>Slett student</h2>
<form method="post">
  Velg student:
  <select name="brukernavn">
    <?php
    $res = $conn->query("SELECT brukernavn, fornavn, etternavn FROM student");
    while ($row = $res->fetch_assoc()) {
        echo "<option value='".$row['brukernavn']."'>".$row['fornavn']." ".$row['etternavn']."</option>";
    }
    ?>
  </select>
  <input type="submit" name="slett" value="Slett">
</form>

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
