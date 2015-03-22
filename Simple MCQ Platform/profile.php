<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($_GET['nom']))
      {
			echo"".htmlspecialchars($_GET['nom'])." - QuizSpace";
      }
?></title>
</head>

<body>
<?php 
	if(isset($_GET['matricule_ident']))
	{
	echo"<h1 id='bvn'>Bienvenue</h1>";
	echo"<h1 id='nm'>".$_GET['nom']." ".$_GET['prenom']."</h1>";
	echo"<strong id='perfois'>Ceci est la premiere fois que vous utilisez<span>Quiz Space</span></strong>";
	echo"<section id='palmares_examen'>Vous n'avez pas encore passé un examen
	<a href='choix_examen.php' id='lien_exam'>Passer un Examen</a></section>";
	echo"<section id='moyenne_rang'>Votre moyenne general est de<span id='moyenne'>00.0</span>
	Votre grade est de <span id='grade'>Debutant</span></section>"; 
	}
?>

<div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright Octobre/Novembre 2014</strong>
</div>
</body>
</html>