<?php
$objet=$_POST["objet"];
$nom=$_POST["nom"];
$email=$_POST["email"];
$msg=$_POST["message"];

require_once 'swift/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('progwebensa@gmail.com')
  ->setPassword('#@ensa.com');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($objet)
  ->setFrom(array('progwebensa@gmail.com' => 'Ensa de Tetouan'))
  ->setTo(array('saadbouayad@outlook.com'))
  ->setBody('Nom===>'.$nom . '..........................................................Email==>' . $email . '..........................................................Contenu==>' . $msg);

$result = $mailer->send($message);
echo "<br><br><br><center>votre email est bien recu, nous vous reponderons dans les plus brefs delais.<br>Merci!<br>";

?>
<html>
<head></head>
<body>
<br><br>
<a href='javascript:history.back()'><input type="button" name="Retour" value="Retour"></a> 
</body>
</html>