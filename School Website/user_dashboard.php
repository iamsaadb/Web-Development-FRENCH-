<?php session_start()?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Genie Info</title>
		<link rel="stylesheet" type="text/css" href="../css/style1.css">
	</head>

	<body>
		<div id="wrapper">
		<header class="bg">
			
			<img src="../images/logo.PNG" alt="logo" class="photo" id="logo">
			<h1 font-size="10px">Ecole Nationale des Sciences Appliquées
			<?php 
			if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="logout.php"><input id="deconn" class="conn" type="button" value="Se deconnecter"></a></h1>';
	}
	else {
		echo '<a href="user_login_session.php"><input class="conn" type="button" value="Se connecter"></a>
		<a href="sinscrire.html"><input id="inscription"  type="button" value="S inscrire"></a></h1>' ;
		}
	?>
			<H2>Filière Genie Informatique </H2>
 	
		<nav id="navi">
			<ul id="menu">
				<li ><a href="site.php" id="home" ><img src="../images/home.png" alt = "accueil" id="image"></a></li>

				<li><a href="site.php">Présentation</a>
					
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
                  <li> <?php
 if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="documents.php">' ;
	}
	else {
		echo '<a href="../user_login_session.php">';
		}
	?>Documents</a>

                     <ul class="sub2">
                        <li>
                        	<?php
 if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="s1s2.php">' ;
	}
	else {
		echo '<a href="user_login_session.php">';
		}
	?>GI1</a></li>
                        <li><?php
 if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="s3s4.php">' ;
	}
	else {
		echo '<a href="user_login_session.php">';
		}
	?>GI2</a></li>
                        <li><?php
 if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="s5.php">' ;
	}
	else {
		echo '<a href="user_login_session.php">';
		}
	?>GI3</a></li>
                     </ul>

                  </li>
                  <li><?php
 if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="notes.php">' ;
	}
	else {
		echo '<a href="user_login_session.php">';
		}
	?>Notes</a></li>
               </ul>

            </li>

            <li><a href="#">Espace professeur</a>
               <ul class="sub1">
                  <li><a href="#">Mon compte professeur</a></li>
                  <li><?php
 if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="documents.php">' ;
	}
	else {
		echo '<a href="user_login_session.php">';
		}
	?>
                  	Documents</a></li>
                  <li><?php
 if(isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		echo '<a href="modification_note.php">' ;
	}
	else {
		echo '<a href="user_login_session.php">';
		}
	?>
            Notes</a></li>
               </ul>



				</li>
				<li><a href="contact.html">Contact</a></li>

			</ul>

		</nav> 
		</header>
		<section>
				<img id="myPhoto" src="../images/1.jpg" alt="machakil">
				<script src="../js/slideshow.js"></script>
				<div class="container">
				<article class="a">
					<h1>Dates importantes</h1>
					<p>
						<br>
						<ul>
							- 6 juin : Examen d'electronique numérique<br>
							- 7 juin: Examen de Théorie de langages et compilation<br>
							- 8 juin:Examen de je ne sais pas quoi <br>
					</ul>
					</p>
				</article>
				<article>
					<h1>Evénements</h1>
					<p>
						<br>
						<ul>
							- <a href="fb.com/infotech"> Compétition</a><br>
							- <a href="fb.com/msem"> Formation d'Arduino</a><br>
							- Conférence de programmation en partenariat avec Scorify 
					</ul>
					</p>

				</article>
				<article class="b"><h1>Liens Utiles</h1>
					<br>
					<a href="https://www.youtube.com/channel/UCMhsk1gyCnhq_gajKLaojiQ"><img class="lien" src="../images/YouTube.png"></a>
					<a href="https://www.facebook.com/groups/ensate2008/?fref=ts"><img class="lien"src="../images/facebook.jpg"></a>
					<a href="http://www.uae.ma/portail/FR/index.php/"><img class="lien" src="../images/logouae.jpg"></a>
					<a href="http://biblio.uae.ac.ma/opac_css/"><img class="lien" src="../images/biblio.jpg"></a>


				</article>
			</div>
			<article class="direc"><h1>Mot du directeur</h1><br>
				<img class="pig" src="../images/tn_directeur.jpg">
				Au nom de tous les acteurs de l’école Nationale des Sciences Appliquées de Tétouan, Professeurs, Administratifs et Etudiants, je vous souhaite la bienvenue sur le site de l’école, en espérant qu’il satisfasse votre curiosité et vous fournisse l’information que vous recherchez.<br><br>

L’Ecole Nationale des Sciences Appliquées de Tétouan a aujourd’hui quatre années d’existence. Quoique encore jeune, cette école est déjà bien intégrée dans l’environnement économique de la région. Ses relations avec le monde professionnel se sont intensifiées et elle participe activement au réseau national des ENSA du Maroc.<br><br>

Les circonstances économiques liées au développement industriel de la région de Tanger-Tétouan, notamment l’essor des activités portuaires, nécessitent des emplois de grande technicité et l’ENSA de Tétouan est donc bien positionnée par rapport à cette demande de compétences en technologies et ingénierie par son offre de formation répartie sur quatre filières de formation d’ingénieur.
L’environnement immédiat de l’ENSA est une région d’échange stratégique qui relie l’Afrique à l’Europe, et la Méditerranée à l’Atlantique . Cette région connaît actuellement une croissance économique exponentielle se répercutant en chaîne sur les plans urbain, industriel et social, de la sorte qu’elle va dans le sens de devenir un pôle économique important dans l’ouest de la Méditerranée.

			</article>
				
		</section>


	<footer >

			
			<div  id="dropdown"><ul><li>Ecole Nationale des Sciences Appliquées de Tetouan BP :2222 M'hannech</li> 
				<li>Tel:0539452442</li>
			<li>FAX:0539452475</li></ul>
			 </div>



			
			
	</footer>



</div>
</body>


</html>