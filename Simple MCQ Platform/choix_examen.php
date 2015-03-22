<?php
$_SESSION['mat_etd'];
$_SESSION['nom_etd'];
$_SESSION['prenom_etd'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>choix_examen</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">	  
		<link rel="stylesheet" href="css/resp1.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/suite.css" type="text/css" media="screen">	 
</head>

<body id="body_choix">
<div class="header content clearfix">
    <img alt="Quiz space" class="header2" src=".\\multimedia\\images\\header.png" style="
    margin-left: 25%;  
    margin-top: 4%;
"/ >
  </div>
<h1 style="
    margin-left: 32.5%;">Toutes les connaissances dans un tout petit espace</h1>
 <h2 style="
    font-family: 'Open Sans', arial;  -webkit-font-smoothing: antialiased;  color: #555;  font-size: 18px;  font-weight: 400;
    margin-top:  12%;
    text-align: center;
" >Choissisez l'examen que vous voulez passer</h2>
<?php
$_SESSION['intitule'];
$_SESSION['session']; 
if($id_file=fopen("ressources\general\liste_examen.txt","r"))
{
	echo '<div id="presentation" class="wrapper gris"><div id="couverture">';
	$i=0;
		while($tab=fgetcsv($id_file,500,":") )
		{
			if($i!=0)
			{
				$i++;
				$tab[1]=trim($tab[1]);
				echo '<article class="grid_4 span">
									<div class="indent">
										<span class="title-2 feature-titre">Examen De <strong class="bleu">'.$tab[0].'</strong></span>
										<div class="prev-indent-bot2 wrapper">
											<a href="examen.php?num_examen='.$i.'&amp;nom_examen='.$tab[0].'&amp;nom_fichier='.$tab[1].'.txt&amp;session='.$tab[3]'.'" class="link-1"><figure class=" zoom"></figure><p class="p2"><label><strong>Nom Du Professeur : </strong>'.$tab[2].'</label><br/>
										<label><strong>Session : </strong>'.$tab[3].'</label><br/>
										<label><strong>Duree : </strong>'.$tab[4].'</label><br/>
										<label><strong>Nombre De Questions : </strong>'.$tab[5].'</label><br/>
										<label><strong>Difficulte : </strong>'.$tab[6].'</label><br/>
										<label><strong>Type D\'Evaluation : </strong>'.$tab[7].'</label><br/></p></a>
										</div>
										</div>
									
								</article>';
			}
			else
			{
				$i++;
			}
		}
	fclose($id_file);
}
echo "</div></div> ";?>

<div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright Octobre/Novembre 2014</strong>
</div>
</body>
</html>