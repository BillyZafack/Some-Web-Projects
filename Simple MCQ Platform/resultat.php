<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">	  
		<link rel="stylesheet" href="css/resp1.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/suite.css" type="text/css" media="screen">	 
<title>Resultat</title>
</head>

<body>
<div class="header content clearfix">
    <img alt="Quiz space" class="header2" src=".\\multimedia\\images\\header.png" style="
    margin-left: 28%;  margin-top: 2%;
    margin-bottom: 10%;
"/ >
  </div>
<span class='titre_resultat' style="
    margin-left: 48%;
    margin-bottom: 3%;
    margin-top: 23%;
    font-family: cursive;
    font-size: 150%;
">Resultats</span>
<?php
function fichier_note($nom,$prenom,$intitule,$session,$note)
{
   if(file_exists("copie_".$nom."_".$prenom."_".$matricule."_examen_".$intitule.".txt"))
{
if($id_file=fopen("copie_".$nom."_".$prenom."_".$matricule."_examen_".$intitule."2.txt","w"))
{
flock($id_file,1);
fwrite($id_file,"Nom De L\'Etudiant : ".$nom." ".$prenom." Matricule: ".$matricule." Examen : ".$intitule." NOTE :".$note);
flock($id_file,3);
fclose($id_file);
}
else {echo "fichier introuvable"; }
}
else
{
$id_file=fopen("copie_".$nom."_".$prenom."_".$matricule."_examen_".$intitule.".txt","w");
fwrite($id_file,"Nom De L\'Etudiant : ".$nom." ".$prenom." Matricule: ".$matricule." Examen : ".$intitule." NOTE :".$note);
flock($id_file,3);
fclose($id_file);
}
} 
if(isset($_POST['result']) && isset($_POST['email']))
{
	@mail($_POST['email'],"Vos Resultats","Vous avez eu une note de ".$_POST['result']." sur 20");
	require './PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;


$mail->isSMTP();                                     
$mail->Host = 'smtp.polytechnique.cm';  
$mail->SMTPAuth = true;                              
$mail->Username = 'tp.info@polytechique.cm';         
$mail->Password = 'info2015TI';                        
$mail->Port = 465;                                  

$mail->From = 'tp.info@polytechique.cm';
$mail->FromName = 'Quizz Space';
$mail->addAddress('hubert.ngankam@polytechnique.cm', 'Professeur');     // Add a recipient
$mail->addAddress($_POST['email'], 'Etudiant');                // Name is optional
$mail->addCC('billyrzafack@gmail.com');
$mail->addBCC('billyrzafack@yahoo.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Resultat d\'une session d\'examen';
@$mail->Body    = 'Vous avez obtenu une note de '.$_POST["resultat"].'<b> sur 20!</b>'; //Si n'a pas acces a l'internet
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}echo "<script type=text/javascript> alert('Le mail a ete envoye a votre professeur et a votre adresse mail'); window.location.href='choix_examen.php';</script>";
}
else
{
if(isset($_SESSION['nom_etd']) && isset($_SESSION['prenom_etd']) && isset($_SESSION['intitule']) && isset($_SESSION['session']) && isset($_GET['resultat']))
{
fichier_note($_SESSION['nom_etd'],$_SESSION['prenom_etd'],$_SESSION['intitule'],$_SESSION['session'],$_GET['resultat']);
}
if(isset($_GET['resultat']))
{
	echo"<div id='results'><strong style='margin-left: 20.5%;  color: rgb(56, 54, 54);'>Vous avez eu la note de <span id='note'>".$_GET['resultat']."</span> sur <span id='vingt'>20</span></strong></div>";	
}
echo '<label  style="
    padding-top: 12%;
    margin-left: 38%;
">Entrez une adresse email pour y recevoir vos resultats</label><br/>
<form method="post" action="resultat.php"><input type="email" name="email" placeholder="Adresse Electronique" style="
    margin-top: 6%;
    width: 25%;
    height: 39px;
    margin-left: 39.5%;
    border-radius: 12px;
" id="emaill"/>';
?>
<?php
echo '<input type="submit" value="Envoyer" id="envoyer" style="
    float: left;
    margin-top: 2%;
    margin-left: 42%;
    width: 7%;  height: 37px;  border-color: blue;  border-radius: 12px;
"/>
<input type="text" name="result" value="'.$_GET["resultat"].'" style="display:none;"/></form>';

echo '<a href="choix_examen.php"  id="sauter" style="
    float: right;
    margin-top: 2.7%;
    margin-right: 39%;
    padding-bottom: 1%;
    width: 7%;
    text-align: center;
    height: 37px;
    border-color: blue;
    border-radius: 12px;
    color: rgb(237, 11, 11);
    font-size: 86%;
">Sauter</a>
<div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright Octobre/Novembre 2014</strong>
';}?></div>
</body>
</html>