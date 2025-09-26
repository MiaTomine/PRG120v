<!DOCTYPE html>
<html>
<head>
  <title>Slett data</title>
</head>
<body>
  <h2>Slett klasse</h2>
  <form action="slett_klasse.php" method="post">
    Klassekode: <input type="text" name="klassekode" required><br>
    <input type="submit" value="Slett klasse">
  </form>

  <h2>Slett student</h2>
  <form action="slett_student.php" method="post">
    Brukernavn: <input type="text" name="brukernavn" required><br>
    <input type="submit" value="Slett student">
  </form>
</body>
</html>
