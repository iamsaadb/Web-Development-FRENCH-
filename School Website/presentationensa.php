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
					$message="<font color='#DD00FF' size='20'> Nom d'utilisateur intouve, verifiez la casse ou rendez vous sur la page d'inscription </font>".
					"<a href='formulaireetudiant.php'>Cliquer ici</a>";
				}
			}
		}else{
			$message="Please enter The username and the password";
			//echo 'not filled';
		}	
	}
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
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
</body></html>