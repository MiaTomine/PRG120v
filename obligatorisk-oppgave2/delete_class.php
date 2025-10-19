<?php include("obligatorisk-oppgave2/db.php"); ?>
<h2>Slett klasse</h2>
<form method="post">
  Velg klasse:
  <select name="klassekode">
    <?php
    $res = $conn->query("SELECT klassekode, klassenavn FROM klasse");
    while ($row = $res->fetch_assoc()) {
        echo "<option value='".$row['klassekode']."'>".$row['klassenavn']."</option>";
    }
    ?>
  </select>
  <input type="submit" name="slett" value="Slett">
</form>

<?php
if (isset($_POST['slett'])) {
    $stmt = $conn->prepare("DELETE FROM klasse WHERE klassekode=?");
    $stmt->bind_param("s", $_POST['klassekode']);
    if ($stmt->execute()) {
        echo "Klasse slettet!";
    } else {
        echo "Feil: " . $stmt->error;
    }
}
?>
