<?php /* vis-alle-klasser */
/*
/* Programmet skriver ut alle registrerte studier
*/

 include("db-tilkobling.php"); 
 $sqlSetning="SELECT klassekode, klassenavn, studiumkode * FROM klasse ORDER BY klasse;";
 $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");

 $antallRader=mysqli_num_rows($sqlResultat); 
 if ($antallrader == 0) {
    print ("ingen klasser registrert");
 } else {
print ("<table border=1>");
 print ("<tr><th align=left>klassekode</th> <th align=left>klassenavn</th> </tr> <tr><th align=left>studiumkode>/th></tr>");
 
 while ($rad=mysqli_fetch_array($sqlResultat)) {
 $klassekode=$rad["klassekode"];
 $klassenavn=$rad["klassenavn"];
 $studiumkode=$rad["studiumkode"];
 print ("<tr> <td> $klassekode </td> <td> $klassenavn </td> <td> $studiumkode </td> </tr>");
 }
 print ("</table>");
}

?>