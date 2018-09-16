<?php
include_once('connect.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progweb";
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$ddn = $_POST["ddn"];
$cin = $_POST["cin"];
$cnp = $_POST["cnp"];
$ldn = $_POST["ldn"];
$adresse = $_POST["adresse"];
$tel = $_POST["tel"];
$login = $_POST["login"];
$mdp = $_POST["mdp"];
$mdp2 = $_POST["mdp2"];
$err;
if($mdp!=$mdp2){$err=1;}
       else $err=0;
//cryptage mdp
//$mdp=sha1($mdp);
//fin cryptage mdp


if($err==0){
	
	try {
   $sql = "INSERT INTO formulaireprof (cnp, prenom, nom, ddn, ldn, cin,login, mdp,adresse,tel,mdp2)
   VALUES ('$cnp','$prenom', '$nom','$ddn','$ldn','$cin','$login','$mdp','$adresse','$tel','$mdp2')";
   { $dbh->exec($sql);
                 echo "Votre login est: $login. Vous avez &eacute;t&eacute; bien inscrit sur l'&eacute;space &eacute;tudiant<br>";
                 echo '<a href="contact.html"> <br><br><br><input type="button" name="OK" value="OK"></a>';}

  


   }
catch(PDOException $e)
   {
   echo $sql. $err . "<br>" . $e->getMessage();
   }
	
}   else {
	echo "Vos mots de passes ne sont pas egaux, veuillez saisir deux mot de passes identiques ===>   ".
	"<a href='javascript:history.back()'> Retour au formulaire</a>";
}




?>
