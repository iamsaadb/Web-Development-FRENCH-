
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Genie Info</title>
		<link rel="stylesheet" type="text/css" href="../css/style1.css">
	</head>

		<header class="bg">
			
			<img src="../images/logo.PNG" alt="logo" class="photo" id="logo">
			<h1 font-size="10px">Ecole Nationale des Sciences Appliquées 
			<a href="user_login_session.php"><input class="conn" type="button" value="Se connecter"></a>
			<a href="sinscrire.html"><input id="inscription"  type="button" value="S'inscrire"></a></h1>
			<H2>Filière Genie Informatique </H2>
 	
		<nav id="navi">
			<ul id="menu">
				<li ><a href="site.html" id="home" ><img src="../images/home.png" alt = "accueil" id="image"></a></li>

				<li><a href="site.html">Présentation</a>
					
					<ul class="sub1">
						<li><a href="presentation.php">Ensa Tétouan</a></li>
						<li><a href="gi.php">Filière Genie info</a></li>
						<li><a href="video.html">Mot du chef de filière</a></li>
						<li><a href="charte.html">Charte de l'étudiant</a></li>
					</ul>

				</li>

				<li><a href="#">Espace étudiant</a>

               <ul class="sub1">
                  <li><a href="#">Mon compte étudiant</a></li>
                  <li><a href="documents.php">Documents</a>

                     <ul class="sub2">
                        <li><a href="s1s2.php">GI1</a></li>
                        <li><a href="s3s4.php">GI2</a></li>
                        <li><a href="s5.php">GI3</a></li>
                     </ul>

                  </li>
                  <li><a href="notes.php">Notes</a></li>
               </ul>

            </li>

            <li><a href="#">Espace professeur</a>
               <ul class="sub1">
                  <li><a href="#">Mon compte professeur</a></li>
                  <li><a href="documents.php">Documents</a></li>
                  <li><a href="modification_note.php">Notes</a></li>
               </ul>



				</li>
				<li><a href="contact.html">Contact</a></li>

			</ul>

		</nav> 
		</header>
 <body>  <br><br><br><br><br><br><br>
<div class="body2">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progweb";
try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$reponse = $conn->query('SELECT * FROM fichier');
echo '<div align="center"><table border="1">';
echo '<h3>Liste des documents de GI2:</h3><br><br>';
echo '<tr>
<td>Module:</td>
<td>Type:</td>
<td>Titre</td>
<td>Fichier:</td>
<td>Semestre:</td>
<td>Auteur:</td>
<td>Description:</td>
<td>Date:</td>
</tr>';

while($data=$reponse->fetch())
{
	if($data['semestre']=='s3'||$data['semestre']=='s4'){
echo '<tr>';
echo '<td>'.$data['module'].'</td>';
echo '<td>'.$data['type'].'</td>';
echo '<td>'.$data['titre'].'</td>';
echo '<td>'.'<a href="'.$data['file'].'"> '.$data['name'].'</a>'.'</td>';
echo '<td>'.$data['semestre'].'</td>';
echo '<td>'.$data['auteur'].'</td>';
echo '<td>'.$data['description'].'</td>';
echo '<td>'.$data['date'].'</td>';
echo '</tr>';
	}
}
	echo '</table>';
	echo '</div>';
$reponse->closeCursor();
   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   }
?>
    </div>
</body><br><br><br><br><br><br><br>
<footer >

         
         <div  id="dropdown"><ul><li>Ecole Nationale des Sciences Appliquées de Tetouan BP :2222 M'hannech</li> 
            <li>Tel:0539452442</li>
         <li>FAX:0539452475</li></ul>
          </div>
         
   </footer>