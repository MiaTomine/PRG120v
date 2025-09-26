<!DOCTYPE html>
<html>
<head>
  <title>Vis data</title>
</head>
<body>
  <h2>Vis alle klasser</h2>
  <?php
  include("db-tilkobling.php");
  $sql = "SELECT * FROM klasse";
  $resultat = mysqli_query($db, $sql);

  while ($rad = mysqli_fetch_array($resultat)) {
      echo "Klassekode: " . $rad['klassekode'] . " - Klassenavn: " . $rad['klassenavn'] . "<br>";
  }
  ?>

  <h2>Vis alle studenter</h2>
  <?php
  $sql = "SELECT * FROM student";
  $resultat = mysqli_query($db, $sql);

  while ($rad = mysqli_fetch_array($resultat)) {
      echo "Brukernavn: " . $rad['brukernavn'] . " - Navn: " . $rad['fornavn'] . " " . $rad['etternavn'] . "<br>";
  }
  ?>
</body>
</html>
