
<header> 
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/style2.css">
<title>liste toutes les documents:</title>

</header>
<div id="wrapper">
		<header class="bg">
			<img src="../images/logo.PNG" alt="logo" class="photo" id="logo">
			<h1>Ecole Nationale des Sciences Appliquées <input class="conn" type="button" value="Se connecter"><input id="inscription"  type="button" value="S'inscrire"></h1>
			<h2>Filière Informatique </h2>
 	
		<nav id="navi">
			<ul id="menu">
				<li ><a href="#" id="home" ><img src="../images/home.png" alt = "accueil" id="image"></a></li>

				<li><a href="#">Présentation</a>
					
					<ul class="sub1">
						<li><a href="#">Ensa Tétouan</a></li>
						<li><a href="#">Filière Genie informatique</a></li>
						<li><a href="#">Mot du chef de filière</a></li>
						<li><a href="charte.html">Charte de l'étudiant</a></li>
					</ul>

				</li>

				<li><a href="#">Espace étudiant</a>

					<ul class="sub1">
						<li><a href="#">Mon compte étudiant</a></li>
						<li><a href="#">Documents</a>

							<ul class="sub2">
								<li><a href="#">GI1</a></li>
								<li><a href="#">GI2</a></li>
								<li><a href="#">GI3</a></li>
							</ul>

						</li>
						<li><a href="#">Notes</a></li>
					</ul>

				</li>

				<li><a href="#">Espace professeur</a>
					<ul class="sub1">
						<li><a href="#">Mon compte professeur</a></li>
						<li><a href="#">Documents</a></li>
						<li><a href="#">Notes</a></li>
					</ul>



				</li>
				<li><a href="#">Contact</a></li>

			</ul>

		</nav> 
	</div>
	<body>
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
echo '<div align="center">';
echo '<table border="1">';
echo '<h3>Liste de touts les documents:</h3><br><br>';
echo '<tr>
<td>Module:</td>
<td>Type:</td>
<td>Titre</td>
<td>Fichier:</td>
<td>Semestre:</td>
<td>Auteur:</td>
<td>Description:</td>
<td>date:</td>
</tr>';

while($data=$reponse->fetch())
{
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
	echo '</table>';
	echo '</div>';
$reponse->closeCursor();
   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   }

?>
</body>
</div>
<footer >

			
			<div  id="dropdown"><ul><li>Ecole Nationale des Sciences Appliquées de Tetouan BP :2222 M'hannech</li> 
				<li>Tel:0539452442</li>
			<li>FAX:0539452475</li></ul>
			 </div>
			
	</footer>