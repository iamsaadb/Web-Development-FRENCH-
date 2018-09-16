
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inscription etudiant</title>
		<link rel="stylesheet" type="text/css" href="../css/style1.css">
	</head>

	
		<div id="wrapper">
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
<body><div class="encad2"><form action="cible2.php" enctype = "multipart/form-data" method="post">
<h2> Formulaire etudiant </h2>
Prenom : <input type="text" name="prenom"> <br><br>
Nom : <input type="text" name="nom"> <br><br>
Date de naissance : <input type="date" name="ddn"> <br><br>
Lieu de naissance : <input type="text" name="ldn"> <br><br>
CIN : <input type="text" name="cin"> <br><br>
CNE : <input type="text" name="cne"> <br><br>
Niveau scolaire :
<select name="ns">
  <option name="gi1">GI1</option>
  <option name="gi2">GI2</option>
  <option name="gi3">GI3</option>
</select><br><br>
Telephone : <input type="text" name="tel"> <br><br>
Adresse : <input type="text" name="adresse"> <br><br> <br><br>
<b> Login :</b> <input type="text" name="login"> <br><br>
<b> Mot de passe :</b>  <input type="password" name="mdp"> <br><br>
<b> Confirmation mot de passe :</b>  <input type="password" name="mdp2"> <br><br>
<input type="submit" name="envoyer" value="Envoyer">
<input type="reset" name="vider" value="Vider">
</form></div>'
</body>
 <footer >
	
			
			<div  id="dropdown"><ul><li>Ecole Nationale des Sciences Appliquées de Tetouan BP :2222 M'hannech</li> 
				<li>Tel:0539452442</li>
			<li>FAX:0539452475</li></ul>
			 </div>



			
			
	</footer>



</html>
