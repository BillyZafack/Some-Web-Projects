<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choix De Promotion</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">	  
		<link rel="stylesheet" href="css/resp1.css" type="text/css" media="screen">	 
                    <style type='text/css'>
                        html,body {
	background: #959796 url(ressources/images/design/wood-repeat.jpg);
}
header{
    width: 100%;
height: 51px;
background-color: #f8f8f8;
border-color: #e7e7e7;
}

header nav{
    overflow: hidden;
    display: inline-block;
    margin: 20px 0 0 40px;
    padding: 13px 40px;
    float: right;
}

header nav ul{
  list-style: none;
float: right;
}

header nav ul li{
    float: left;
margin-left: 5%;
margin-right: -1%;
margin-bottom: 2%;
font-size: 12px;
font-family: 'lato_regular', arial;
}

header nav ul li:first-child{
  margin-left: -13%;
z-index: 999;
}

header nav ul li a {
    text-decoration: none;
    color: black;
}
                    </style>
</head>

    <body>
        <header >
		<div class="wrapper">
			<nav id="nav_menu" style='padding-top: 1px;'>
				<ul>
                    <li><a href="index.php">Page D'Accueil</a></li>
                                        <li><a href="choix_promo.php">Decouvrir les PIPOS</a></li>
					<li><a href="www.polytechnique.cm">Site Officiel ENSP</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

		</div>
	</header><!--  End Header  -->
        <div class="header content clearfix">
    <img alt="Header" class="header2" src="ressources/images/design/header.png" style="
    margin-left: 24%;  
    margin-top: 4%;
    border-radius: 132px;margin-bottom: -2%; 
">
  </div>
<div id="container">
	<h1 style="
    margin-top: 10%;
    color: white;
    margin-left: 37%;
    margin-bottom: 12%;
    font-size: 184%;
">Choix De Promotion</h1>
	
        <?php
session_start();
$_SESSION['promotion']="";
$_SESSION['departement']="";
include_once ('connexion.php');
		
		$c=new Connection('tp_4_web','root','');
		$bdd=$c->seConnecter('tp_4_web','root','');
		$reponse = $bdd->query('SELECT * FROM promotion;');
		
			echo '<div id="presentation" class="wrapper gris" style="
    border-radius: 12px;
    margin-left: 6%;
    box-shadow: 20px 2px 2px rgba(237, 238, 247, 0.3);
">';
                        echo'<div id="inner" style="background-color: rgba(242, 230, 230, 0.64);
    width: 68%;  
    height: 433px;
    border-radius: 12px;    
    padding-top: 60px;
    box-shadow: 20px 2px 2px  rgba(45, 45, 50, 0.3);
    
padding-left: 7%;margin-left: 5%;"
    
>';
		while ($donnees = $reponse->fetch())
		{
			echo '<article class="grid_4 span" style="background-color: rgba(0, 0, 255, 0.25);
color: black;">
									<div class="indent">
										<span class="title-2 feature-titre"><strong class="bleu"><a href="choix_departement1.php?promotion='.$donnees['Nom_Promotion'].'" >'.'PROMOTION'.' </a></strong> '.$donnees['Nom_Promotion'].'</span>
										<div class="prev-indent-bot2 wrapper">
											<figure class=" zoom"></figure></a>
										</div>
										<p class="p2"><label><a href="choix_departement1.php?promotion='.$donnees['Nom_Promotion'].' style="color:black;"><strong>'.$donnees['Description'].'</strong></a></label><br/>
										</div>
								</article>';
		}
		echo "</div> ";
		echo "</div> ";
		$reponse->closeCursor();
	

?>
    <div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright &COPY; Novembre 2014</strong>
</div>
</body>
</html>












