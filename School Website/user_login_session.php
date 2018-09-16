<?php
include_once('connect.php');
$message="";
if(isset($_POST['submit']))
{
	echo 'clicked';	
	if(isset($_POST['uname']) && isset($_POST['pass'])){
		if($_POST['uname']!='' && $_POST['pass']!=''){
			$res=$dbh->query("SELECT * from formulaireetudiant where login='".$_POST['uname']."' and mdp='".$_POST['pass']."'")->fetch(PDO::FETCH_ASSOC);
			if(count($res)!=0){
				if($res['login']==$_POST['uname']){
					if($res['mdp']==$_POST['pass']){
						session_start();
						$_SESSION["login"] =$res['login'];
						header("Location:user_dashboard.php");
					}else{
						$message="<font color='#DD00FF'> Mot de passe incorrect </font>";
					}
				}else{
					$message="<font color= #DD0000> Nom d'utilisateur intouve, verifiez la casse ou rendez vous sur la page d'inscription </font>".
					"<a href='formulaireetudiant.php'>Cliquer ici</a>";
				}
			}
		}else{
			$message="Entrer un login et un mot de passe";
			//echo 'not filled';
		}	
	}
}
?>



<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Genie Info</title>
		<link rel="stylesheet" type="text/css" href="../css/style1.css">
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
	</head>

	<body>
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
		
	      <br><br><br>
<body>
<section class="encad2">
<form name="frmUser" method="post" action="">
<div class="message" style="color:red;"><?php if($message!="") { echo $message; }  ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader"><br><br><br>
<td align="center" colspan="2">- Entrez votre login et mot de passe -<br><br></td>
</tr>
<tr class="tablerow">
<td align="right">Nom d'utilisateur</td>
<td><input type="text" name="uname" placeholder="login"></td>
</tr>
<tr class="tablerow">
<td align="right">Mot de passe</td>
<td><input type="password" name="pass" placeholder="mot de passe"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="1"><input type="submit" name="submit" value="Connexion">
<td align="center" colspan="2"><a href='javascript:history.back()'><input type="button" name="Retour" value="Retour"></a>
</td></tr>
</table>
</form>
</section>
</body>
</html>