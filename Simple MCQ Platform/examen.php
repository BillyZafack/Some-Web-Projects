  <?php
$_SESSION['mat_etd'];
$_SESSION['nom_etd'];
$_SESSION['prenom_etd'];
$_SESSION['intitule'];
$_SESSION['session'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Examen De <?php 
  if(isset($_GET['nom_examen'])&&isset($_GET['intitule']))
  {
  $_SESSION['session']=$_GET['nom_examen'];
  $_SESSION['intitule']=$_GET['intitule'];
  }
  $nom="";
  $prenom="";
  $matricule="";
  $intitule="";
  $session="";
    define("NBRE_QUESTION",20);
	if(isset($_GET["nom_examen"])){
      echo ''.$_GET["nom_examen"];
      }else
      {
          echo 'Examen';
      } ?></title>
      <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">	  
		<link rel="stylesheet" href="css/resp1.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/suite.css" type="text/css" media="screen">	 
  </head>
  
  <body>
  <div class="header content clearfix">
    <img alt="Quiz space" class="header2" src=".\\multimedia\\images\\header.png" style="
    margin-left: 25%;  margin-top: 2%;
"/ >
  </div>
<h1 id=titre_exam>Toutes les connaissances dans un tout petit espace</h1>
 <h2 style="font-family: 'Open Sans', arial;  -webkit-font-smoothing: antialiased;  color: #555;  font-size: 18px;  font-weight: 400;
    margin-top: 16%;
    text-align: center; 
margin-right: 3%;" >Repondez aux questions dans le temps imparties</h2>
  <?php
  $questions=array();
  $j=0;
  $reponses=array();
  $reponse_correcte=array();
  $teste_reponse_correcte=array();
  $rand_keys=array();
  for($i=0;$i<NBRE_QUESTION;$i++)
  {
	$rand_keys[]=$i;  
  }
  
  
  if(isset($_GET['nom_fichier']))
  {
	  	$t=trim($_GET['nom_fichier']);
  		if($id_file=fopen(".\\ressources\\examens\\".$t,"r"))
 		 {
  $i=0;
  echo "<div id='couverture_titre'>";
  while($tab=fgetcsv($id_file,200,":") )
  {
  $i++;
  if($i>1 && $i<9 && $i!=6 && $i!=8)
  {
	  if(isset($tab[0]) and isset($tab[1]))
	  {
  		echo "<span class='titre' id='titre".$i."'>".$tab[0]."</span>"."   : <span class='sous_titre'  id='sous_titre".$i."'>".$tab[1]."</span><br/><br/>";
		if($i==2)
		{
			$intitule=$tab[1];
		}
		else if($i==3)
		{
			$session=$tab[1];
		}
		
	  }
  }

  }
    fclose($id_file);
	echo "</div >";
  }
  
  }
  else{ 
      echo "<h2>Erreur Dans L'ouverture du fichier(not isset($_POST[nom_fichier])) ! </h2> ";
      }
  
 
  if(isset($_GET['nom_fichier']))
  {
	  $t1=trim($_GET['nom_fichier']);
  	if($id_file=fopen(".\\ressources\\examens\\".$t1,"r"))
  	{
 		 $i=0;
 		 while($tab=fgetcsv($id_file,200,":") )
 		 {
 			 $i++;
 			 if(trim($tab[0])=='Q')
 			 {
 				 $questions[]=$tab[1];
			 }
 			 else if(trim($tab[0])=='R')
  			 {
	 			 $reponses[]=$tab[1];
				 $a=trim($tab[1]);
				 $b=explode("|",$a);
				 foreach($b as $element)
				{
					if($element[0]=='*')
					{
						$reponse_correcte[]=str_replace('*','',$element);		
					}
				}
 			 }

 		 }
   	 fclose($id_file);
  	}
  
  }
  else
  { 
      echo "<h2>Erreur Dans L'ouverture du fichier(not isset($_POST[nom_fichier])) ! </h2> ";
  }
  
  srand ((float) microtime() * 10000000);
  shuffle($rand_keys);
   echo "<div id='timer' style='
    color: white;
'></div>";
   //
  
  function arranger_Reponses($input,$j)
  {
	 $sap=explode("|",$input);
	 foreach($sap as $x)
	 {
		 echo'<span class=reponses_span>';
		 $x=trim($x);
		 if($x[0]=='*')
		 {
		 	$x=str_replace('*','',$x);
		 	echo"<input type='radio' name=reponse".$j." class='reponses_corr'/><label
for='reponse".$j."'>".$x."</label><br/><br/>";
		 }
		 else
		 {
		 	echo"<input type='radio' name=reponse".$j." class='reponses_incorr'/><label
for='reponse".$j."'>".$x."</label><br/><br/>";
		 }
		 echo'</span>';
	 }
  }
echo"<form>";
  for ($numero = 0; $numero < NBRE_QUESTION; $numero++)
  {
		echo"<div class='petite_couverture'><span id='question' style='
    margin-left: 36%;
'".$numero.">".$questions[$rand_keys[$numero]]."</span><br/><br/><br/>";
		arranger_Reponses($reponses[$rand_keys[$numero]],$numero+1);
		echo"</div>";
		if($rand_keys[$numero]<20)
		{
		$teste_reponse_correcte[]=$reponse_correcte[$rand_keys[$numero]];
		}
  }
  echo"<input type='reset' id='reset' style='
    width: 10%;
    height: 12%;
	color:white;
    margin-left: 44%;
    margin-bottom: 3%;
    border-radius: 12px;
    background-color: rgba(0, 24, 128, 0.54);
'/>";
  echo"</form>";
  
 ?>
 <script type="text/javascript">
 
 //
 var Timer;
var TotalSeconds;


function CreateTimer(TimerID, Time) {
	
Timer = document.getElementById(TimerID);

TotalSeconds = Time;
UpdateTimer();
window.setTimeout("Tick()", 1000);
}

function Tick() {
if (TotalSeconds <= 0) {
alert("Temps Ecoulé!");
window.location.href='resultat.php?resultat='+k;
return;
}
TotalSeconds -= 1;
UpdateTimer()
window.setTimeout("Tick()", 1000);
}

function UpdateTimer() {
var Seconds = TotalSeconds;

var Days = Math.floor(Seconds / 86400);
Seconds -= Days * 86400;

var Hours = Math.floor(Seconds / 3600);
Seconds -= Hours * (3600);

var Minutes = Math.floor(Seconds / 60);
Seconds -= Minutes * (60);


var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds)


Timer.innerHTML = TimeStr + " RESTANTS!";
}


function LeadingZero(Time) {

return (Time < 10) ? "0" + Time : + Time;

}
 
 //
var k=0;
 function calculate()
 {
 
 var queryAll = document.querySelectorAll('.reponses_corr');
 for(var i=0;i<queryAll.length;i++)
 {
	 if(queryAll[i].checked==true)
	 {
		 k++;
	 }
 }

 window.location.href='resultat.php?resultat='+k;
 }
  document.write("<div id='valider'><a onclick='calculate();' style='margin-left: 49%;background-color:green; color: rgb(243, 240, 240);' >Valider</a></div>");
 
 </script>
 
 <script type="text/javascript">window.onload = CreateTimer("timer", 1800);</script>
 
 <div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright Octobre/Novembre 2014</strong>
</div>
  </body>
  </html>