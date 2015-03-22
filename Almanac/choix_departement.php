<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choix De Departement</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">	  
		<link rel="stylesheet" href="css/resp1.css" type="text/css" media="screen">	 
</head>

<body>
<?php
session_start();
include_once('connexion.php');
if(isset($_GET['promotion']))
{
    $_SESSION['promotion']=$_GET['promotion'];
}
$c=new Connection('tp_4_web','root','');
$bdd=$c->seConnecter('tp_4_web','root','');
$reponse = $bdd->query('SELECT * FROM departement;');
echo '<div id="presentation" class="wrapper gris">';
while ($donnees = $reponse->fetch())
		{
echo '<article class="grid_4 span" style="background-color: rgba(0, 0, 255, 0.25);
color: black;">
									<div class="indent">
										<span class="title-2 feature-titre"><strong class="bleu"><a href="trombino.php?departement='.$donnees['Nom_Departement'].'" >'."DEPARTEMENT".' </a></strong> '.$donnees['Nom_Departement'].'</span>
										<div class="prev-indent-bot2 wrapper">
											<figure class=" zoom"></figure></a>
										</div></div>
								</article>';
		}
								
		echo "</div> ";
		
		$reponse->closeCursor();
?>
</body>
</html>