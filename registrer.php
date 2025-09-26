<!DOCTYPE html>
<html>
<head>
  <title>Registrer data</title>
</head>
<body>
  <h2>Registrer ny klasse</h2>
  <form action="registrer_klasse.php" method="post">
    Klassekode: <input type="text" name="klassekode" required><br>
    Klassenavn: <input type="text" name="klassenavn" required><br>
    Studiumkode: <input type="text" name="studiumkode" required><br>
    <input type="submit" value="Registrer klasse">
  </form>

  <h2>Registrer ny student</h2>
  <form action="registrer_student.php" method="post">
    Brukernavn: <input type="text" name="brukernavn" required><br>
    Fornavn: <input type="text" name="fornavn" required><br>
    Etternavn: <input type="text" name="etternavn" required><br>
    Klassekode: <input type="text" name="klassekode" required><br>
    <input type="submit" value="Registrer student">
  </form>
</body>
</html>
