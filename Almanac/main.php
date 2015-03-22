<!doctype html>
<html>
<head>
    
	<meta charset="utf-8">
	<title><?php 
        session_start();
        include_once('connexion.php');
        $other="--------";
if(isset($_GET['departement']))
{
    $_SESSION['departement']=$_GET['departement'];
    $other=  str_replace("_", " ", $_SESSION['departement']);
}
$c=new Connection('tp_4_web','root','');
$bdd=$c->seConnecter('tp_4_web','root','');
//$reponse = $bdd->query('SELECT * FROM departement;');
if(isset($_SESSION['promotion']) && isset($_SESSION['departement']))
{
echo "".$_SESSION['promotion']." ".$_SESSION['departement'];
}?></title>
	<meta name="description" content="Trombinosccope De L'ENSP" />
	<link rel="image_src" href="/images/immersive_slider_image.png" />

	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<link rel="canonical" href="http://www.thepetedesign.com/demos/immersive_slider_demo.html" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="js/jquery.immersive-slider.js"></script>
  <link href='js/immersive-slider.css' rel='stylesheet' type='text/css'>
  <style>
    html {
      height: 100%;
    }
    body {
      background: #f3f3f3;
      padding: 0;
      text-align: center;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
    }
    
    .wrapper {
    	height: auto !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
    h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 25px;
      color: #000;
      margin-bottom: 5px;
      font-size: 50px;
      letter-spacing: -4px;
    }
    h2 {
      color: #444;
      font-weight: 100;
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .pointer {
      color: #9b59b6;
      font-family: 'Pacifico', cursive;
      font-size: 30px;
      margin-top: 15px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
      background: #161923;
    }
    
    .main h1 {
      padding:20px 50px;
      float: left;
      width: 100%;
      font-size: 90px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      color: black;
      margin: 0;
      margin-top: 70px;
      font-family: 'Playfair Display';
      letter-spacing: -1px;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
    
    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }
    
    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }
    
    .reload, .btn{
      display: inline-block;
      border: 4px solid #A2261E;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: #CC3126;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      color: #fff;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover{
      background: #A2261E;
    }
    .btn {
      width: 200px;
      color: #fff;
      border: none;
      margin-left: 10px;
      background: black;
    }
    .clear {
      width: auto;
    }
    .btn:hover, .btn:hover {
      background: rgba(0,0,0,0.8);
    }
    .btns {
      width: 410px;
      margin: 50px auto;
    }
    .credit {
      text-align: center;
      color: #444;
      padding: 10px;
      margin: 0 0 0 0;
      background: #161923;
      color: #FFF;
      float: left;
      width: 100%;
    }
    .credit a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: rgba(255, 255, 255, 0.25);
      font-weight: bold;
      font-size: 13px;
      color: #000;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      color: black;
      background: rgba(255, 255, 255, 0.5);
    }
    
    
    .page_container {
      max-width: 960px;
      margin: 50px auto;
    }

    .header {
      background: white;
      padding-top: 10px;
      margin-bottom: 0;
    }
    .header h1{
      margin-bottom: 0;
      font-size: 45px;
    }

    .header .menu {
      padding-bottom: 10px;
    }

    .benefits {
      color: black;
      height: 100px;
      background: #FFF;
      position: relative;
      width: 100%;
      padding: 25px;
      font-size: 40px;
      font-weight: 100;
      float: left;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
    }

    .benefits .page_container{
      margin-bottom: 50px;
      margin-top: 0;
    }
  
    .immersive_slider .is-slide .content h2{
      line-height: 140%;
      font-weight: 100;
      color: white;
      font-weight: 100;
    }
    .immersive_slider .is-slide .content a {
      color: white;
    }
  
  .immersive_slider .is-slide .content p{
    float: left;
    font-weight: 100;
    width: 100%;
    font-size: 17px;
    margin-top: 5px;
  }
              
            /*  header  */
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
    <?php
    include_once('connexion.php');
 function getXIDwithName($field,$value)
        {
            include_once('connexion.php');
            $c=new Connection('tp_4_web','root','');
            $bdd=$c->seConnecter('tp_4_web','root','');
            try
            {
            $reponse = $bdd->query('SELECT * FROM '.$field.' WHERE Nom_'.$field.'="'.$value.'";');
            if($donnees=$reponse->fetch())
            {
                $er=$field.'_ID';
                return($donnees[$er]);
            }
            else {
                return('ERROR');
            }
            }
            catch (Exception $e)
            {
		die('ErreurRecuperationIDAvecNom : ' . $e->getMessage());
            }
        }
$c=new Connection('tp_4_web','root','');
$bdd=$c->seConnecter('tp_4_web','root','');
$reponse = $bdd->query('SELECT * FROM promotion;');
$reponse1 = $bdd->query('SELECT * FROM departement;');
//
$reponse2 = $bdd->query('SELECT * FROM etudiant WHERE Promotion_ID='.getXIDwithName("Promotion", $_SESSION['promotion']).' and Departement_ID='.getXIDwithName("Departement", $other).';');?>
  <section class="wrapper">
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
    <div style='margin-bottom:6%'>
      <h2 style='margin-top: 8%; margin-bottom: 6%;'><?php echo "<strong style='float: left;margin-left: 12%;'>PROMOTION :".$_SESSION['promotion']."</strong>";echo"<strong style='float: right;
margin-right: 14%;'> Departement :".$other."</strong>" ;?></h2>
        <div class="header content clearfix">
    <img alt="Header" class="header2" src="ressources/images/design/header.png" style="
  margin-left: -3%;
margin-top: 1%;
border-radius: 132px;
margin-bottom: 2%;
background-color: white;
">
  </div>
        <div ><h4 style='margin-right: 7%;'>Voici les profiles qui ont peuplee cette promotion et ce departement</h4></div>
      <a class="back" href="choix_departement1.php">Retour vers le choix de departement</a>
    </div>
    <div class="main">
      <div class="page_container">
        <div id="immersive_slider">
            
            //
            <?php 
            while ($d=$reponse2->fetch())
            {
                echo' <div class="slide" data-blurred="ressources/images/design/ensp_2.png">
            <div class="content">
              <h2><a href="#" target="_blank">'.$d["Nom_Etudiant"].' '.$d["Prenom_Etudiant"].'</a></h2>
              <p>'.$d['Description'].'</p>
            </div>
            <div class="image">
              <a href="#" target="_blank">
                <img src="ressources/images/'.$_SESSION['promotion'].'/'.$_SESSION['departement'].'/'.$d['Photo'].'" alt="Slider 1">
              </a>
            </div>
          </div>';
            }
            ?>
          
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
          
         
        </div>
      </div>
  	</div>
  </section>
          <?php
$reponse2 = $bdd->query('SELECT * FROM etudiant WHERE Promotion_ID='.getXIDwithName("Promotion", $_SESSION['promotion']).' and Departement_ID='.getXIDwithName("Departement", $other).';');
 
			echo '<section id="presentation" class="wrapper gris" style="
    border-radius: 12px;
    margin-left: 6%;overflow: scroll;
    box-shadow: 20px 2px 2px rgba(237, 238, 247, 0.3);
">';
                        echo'<div id="inner" style="background-color: rgba(242, 230, 230, 0.64);
    width: 68%;  
    height: 433px;
    margin-top:6%;
    border-radius: 12px;    
    padding-top: 60px;overflow: scroll;
    box-shadow: 20px 2px 2px  rgba(45, 45, 50, 0.3);
    
padding-left: 7%;margin-left: 5%;"
    
>';
		while ($donnees = $reponse2->fetch())
		{
			echo '<article class="grid_4 span" style="background-image: url(ressources/images/design/wood-repeat.jpg); border-radius: 32px; background-color: rgba(0, 0, 255, 0.25);width:32%;color: white;">
									<div class="indent">
										<span class="title-2 feature-titre"><strong class="bleu"><a href="profile.php?id='.$donnees['Etudiant_ID'].'" ><strong style="color:black;">'.$donnees['Nom_Etudiant'].'</strong></a></strong> '.$donnees['Prenom_Etudiant'].'</span>
										<div class="prev-indent-bot2 wrapper">
											<figure class=" zoom"></figure></a>
										</div>
										<p class="p2"><label><a href="profile.php?id='.$donnees['Etudiant_ID'].'"><img  style="border-radius: 20px; width: 62%;" src="ressources/images/'.$_SESSION['promotion'].'/'.$_SESSION['departement'].'/'.$donnees['Photo'].'" alt="Slider 1"></a></label><br/>
<div id="part2" style="height: 163px;border: 2px solid rgb(229, 220, 220);;padding-top: 32px;width: 139%;float: right;padding-right: 12px;padding-left: 0px;border-radius: 52px;margin-bottom: 8%;display: inline;margin-right: -178%;color: black;margin-top: -80%;">'.$donnees['Description'].'</div>										
</div>
								</article>';
		}
		echo "</div> ";
		echo "</section> ";
                ?>
  	  <div class="pied_de_page" style="padding: 5px;
clear: both;
text-align: center;
margin-top: 20%;
color: black;
background-repeat: repeat-x;
border: 2px solid black;
margin-bottom: 5px;">

<strong id="copyright">Billy R. Zafack ## Copyright &COPY; Novembre 2014</strong>
</div>
  	<script type="text/javascript">
  	  $(document).ready( function() {
  	    $("#immersive_slider").immersive_slider({
  	      container: ".main"
  	    });
  	  });

    </script>
  </div>
  <script>

  	var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
  	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  	s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>