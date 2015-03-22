<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inscrit</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">	  
		<link rel="stylesheet" href="css/resp1.css" type="text/css" media="screen">	 
</head>

<body>
<h1 style="
    text-align: center;
    margin-top: 8%;
    margin-bottom: 6%;
    margin-left: 43%;
    font-size: 162%;
">Etudiants Inscrit</h1>
<?php 
if($id_file=fopen("./ressources/general/etudiants.txt","r"))
{
	echo '<div id="presentation" class="wrapper gris">';
	$i=0;
		while($tab=fgetcsv($id_file,500,":") )
		{
			if($i!=0)
			{
				$i++;
				echo '<article class="grid_4 span" style="background-color: rgba(0, 0, 255, 0.25);
color: black;">
									<div class="indent">
										<span class="title-2 feature-titre"><strong class="bleu"><a href="choix_examen.php?matricule_ident1='.$tab[0].'&amp;nom1='.$tab[1].'&amp;prenom1='.$tab[2].'" >'.$tab[1].' </a></strong> '.$tab[2].'</span>
										<div class="prev-indent-bot2 wrapper">
											<figure class=" zoom"></figure></a>
										</div>
										<p class="p2"><label><a href="choix_examen.php?matricule_ident1='.$tab[0].'&amp;nom1='.$tab[1].'&amp;prenom1='.$tab[2].'" style="color:black;"><strong>Matricule : </strong>'.$tab[0].'</a></label><br/>
										<label><a href="choix_examen.php?matricule_ident1='.$tab[0].'&amp;nom1='.$tab[1].'&amp;prenom1='.$tab[2].'" style="color:black;"><strong>Moyenne : </strong>'.$tab[3].'</a></label><br/>
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
echo "</div> ";?>
</body>
</html>