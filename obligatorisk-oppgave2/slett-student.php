
<?php /* slett-emne */
/*
/* Programmet lager et skjema for å kunne slette et emne
/* Programmet sletter det valgte emnet
*/

?>
<script src="funksjoner.js"> </script>
<h3>Slett student</h3>
<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onsubmit="return
bekreft()">
 Emne <select name="brukernavn" id="brukernavn">
 <?php print("<option value=''>velg brukernavn </option>");
 include("dynamiske_funksjoner.php"); listeboksbrukernavn(); ?>
 </select> <br/>
<input type="submit" value="Slett student" name="slettStudentKnapp" id="slettStudentKnapp" />
</form>

<?php
 if (isset($_POST ["slettStudentKnapp"])){
    include("db-tilkobling.php"); 
    $brukernavn=$_POST ["brukernavn"];

    if (!$brukernavn){
    print ("Det er ikke valgt noe brukernavn");
    } else {
    include("db-tilkobling.php"); 
    $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn';";
    mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
 
    print ("F&oslash;lgende emne er n&aring; slettet: $brukernavn <br />");
    }

 }

?>