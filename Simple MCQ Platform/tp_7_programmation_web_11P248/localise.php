<?php
session_start();
$_SESSION['modif']="";
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/s1.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/jquery.js"></script> 
        <script type="text/javascript" src="js/bootstrap.js"></script> 
        <style>
        .modalBox
        {
            margin: 150px;
        }
        .msg
        {
            width: 150px;
            height: 80px;
        }
.pied_de_page{
padding: 5px;
clear: both;
text-align: center;
margin-top: 20%;
color: white;
background-repeat: repeat-x;
border: 2px solid white;
margin-bottom: 5px;
}		
        </style><link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
       <div  style="
    background-color: blue;
    color: white;
" class="navbar navbar-fixed-top navbar-bold" data-spy="affix" data-offset-top="1000">
  <div class="container">
    <div class="navbar-header">
        <a href="index.php" class="navbar-brand" style="
    color: white;
">Home</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    
   </div>
</div><h1 style="
    width: 132%;
    height: 23px;
    color: rgb(39, 7, 195);
    text-align: center;
    margin-top: 12%;
    margin-left: -14%;
">Classe : 4eme Annee Genie Informatique</h1>
         <img style="width: 100%;
margin-top: 11%;
margin-left: 8%;" src="ressources/images/classeTP7.png" width="1338" height="555" border="0" usemap="#map" style="
    width: 100%;
" />
<?php 

function getName($id)
{
    include_once 'connexion.php';
   $c=new Connection('tp7_prog_web','root','');
   $bdd=$c->seConnecter('tp7_prog_web','root',''); 
  $reponse = $bdd->query('SELECT * FROM Etudiant WHERE Etudiant_ID='.$id); 
  if($repons=$reponse->fetch())
  {
      echo ''.$repons['Nom'].' '.$repons['Prenom'];
  }
}
?>
<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:Zafack Billy -->
<div >
 <div class="modalBox">
        <p>

 <a style="
    margin-top: -126%;
    margin-left: 19.35%;
"  data-toggle="modal" href="#place1" class="btn btn-primary btn-large rt"> 
          <area shape="rect" coords="234,26,309,89" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place1" />
          <span ><?php getName(1); ?></span>
             </a>
        </p>
        </div>

<div class="modalBox">
        <p>

 <a style="margin-left: 19.5%;
margin-top: -145%;" data-toggle="modal" href="#place2" class="btn rt btn-primary btn-large"> 
 <area shape="rect" coords="234,97,309,157" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place2" />
   <span ><?php getName(2); ?></span>
             </a>
        </p>
        </div>

<div class="modalBox">
        <p>

 <a style="margin-top: -190.7%;
margin-left: 32.0%;" data-toggle="modal" href="#place3" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="366,28,438,91" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place3" />
   <span ><?php getName(3); ?></span>
             </a>
        </p>
        </div>

<div class="modalBox">
        <p>

 <a style="margin-left: 32%;
margin-top: -209%;
" data-toggle="modal" href="#place4" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="365,97,439,157" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place4" />
  <span ><?php getName(4); ?></span>
             </a>
        </p>
        </div>

<div class="modalBox">
        <p>

 <a style="margin-left: 44.4%;
margin-top: -243%;" data-toggle="modal" href="#place5" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="495,96,573,158" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place5" />
  <span ><?php getName(5); ?></span>
             </a>
        </p>
        </div>

<div class="modalBox">
        <p>

 <a style="margin-top: -288%;
margin-left: 44.5%;
" data-toggle="modal" href="#place6" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="497,27,575,90" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place6" />
 <span ><?php getName(6); ?></span>
             </a>
        </p>
        </div>

<div class="modalBox">
        <p>

 <a style="margin-left: 57%;
margin-top: -306%;" data-toggle="modal" href="#place7" class="btn rt btn-primary btn-large"> 
 <area shape="rect" coords="627,96,701,157" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place7" />
 <span ><?php getName(7); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="margin-top: -353%;
margin-left: 56.9%;
" data-toggle="modal" href="#place8" class="btn btn-primary rt btn-large"> 
 <area shape="rect" coords="628,28,702,92" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place8" />
<span ><?php getName(8); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="margin-top: -372%;
margin-left: 69.5%;" data-toggle="modal" href="#place9" class="btn rt btn-primary btn-large"> 
 <area shape="rect" coords="757,94,833,157" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place9" />
 <span ><?php getName(9); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="margin-left: 69.5%;
margin-top: -418%;
" data-toggle="modal" href="#place10" class="btn btn-primary rt btn-large"> 
 <area shape="rect" coords="756,27,834,89" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place10" />
<span ><?php getName(10); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -439%;
margin-left: 94.5%;" data-toggle="modal" href="#place11" class="btn rt btn-primary btn-large"> 
 <area shape="rect" coords="1017,95,1096,154" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place11" />
<span ><?php getName(11); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -483%;
margin-left: 94.5%;" data-toggle="modal" href="#place12" class="btn rt btn-primary btn-large"> 
 <area shape="rect" coords="1017,25,1097,84" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place12" />
<span><?php getName(12); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -465%;
    margin-left: 19.5%;
"data-toggle="modal" href="#place13" class="btn btn-primary rt btn-large"> 
 <area shape="rect" coords="237,286,311,346" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place13" />
<span><?php getName(13); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a 
   style= " margin-top: -510%;  margin-left: 19.5%;
" data-toggle="modal" href="#place14" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="235,216,313,279" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place14" />
 <span><?php getName(14); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -529.5%;  
    margin-left: 32.0%;
" data-toggle="modal" href="#place15" class="btn btn-primary rt btn-large"> 
 <area shape="rect" coords="367,288,443,346" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place15" />
 <span><?php getName(15); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -575%;  
    margin-left: 32%;
" data-toggle="modal" href="#place16" class="btn btn-primary rt btn-large"> 
 <area shape="rect" coords="368,217,444,282" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place16" />
<span><?php getName(16); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -595%;  
    margin-left: 44.5%;
" data-toggle="modal" href="#place17" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="496,287,570,346" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place17" />
<span><?php getName(17); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -640%;  
    margin-left: 44.5%;
" data-toggle="modal" href="#place18" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="497,216,571,281" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place18" />
<span><?php getName(18); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -659%;  
    margin-left: 57.0%;
" data-toggle="modal" href="#place19" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="628,285,700,347" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place19" />
<span><?php getName(19); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -705%;  
    margin-left: 57.0%;
" data-toggle="modal" href="#place20" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="628,215,701,279" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place20" />
<span><?php getName(20); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -725%;
    margin-left: 69.4%;
" data-toggle="modal" href="#place21" class="btn btn-primary rt btn-large">
<area shape="rect" coords="754,286,836,347" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place21" />
 <span><?php getName(21); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -769.5%;  margin-left: 69.4%;
" data-toggle="modal" href="#place22" class="btn btn-primary rt btn-large"> 
 <area shape="rect" coords="753,217,836,282" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place22" />
<span><?php getName(22); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -789%;  
    margin-left: 94.5%;
" data-toggle="modal" href="#place23" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="1013,216,1091,283" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place25" />
<span><?php getName(23); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -835%;  
    margin-left: 94.6%;
" data-toggle="modal" href="#place24" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="1012,286,1091,347" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place24" />
<span><?php getName(24); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -818%;  
    margin-left: 19.4%;
" data-toggle="modal" href="#place25" class="btn btn-primary rt btn-large"> 
 <area shape="rect" coords="232,471,311,533" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place23" />
<span><?php getName(25); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -863%;  
    margin-left: 19.4%;
" data-toggle="modal" href="#place26" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="233,403,312,465" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place26" />
<span><?php getName(26); ?></span>
             </a>
        </p>
        </div>


 <div class="modalBox">
        <p>

 <a style="
    margin-top: -883%;  
    margin-left: 32.0%;
" data-toggle="modal" href="#place27" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="365,473,441,534" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place27" />
<span><?php getName(27); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -928%;  
    margin-left: 31.9%;
" data-toggle="modal" href="#place28" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="364,407,442,466" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place28" />
<span><?php getName(28); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -949%;  
    margin-left: 44.4%;
" data-toggle="modal" href="#place29" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="494,472,574,533" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place29" />
<span><?php getName(29); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -993%;  
    margin-left: 44.4%;
" data-toggle="modal" href="#place30" class="btn btn-primary rt btn-large"> 
<area shape="rect" coords="493,407,572,464" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place30" />
<span><?php getName(30); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1013%;  
    margin-left: 56.99%;
" data-toggle="modal" href="#place31" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="626,475,705,535" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place31" />
<span><?php getName(31); ?></span>
             </a>
        </p>
        </div> 

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1057%;  
    margin-left: 56.95%;
" data-toggle="modal" href="#place32" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="627,407,705,471" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place32" />
<span><?php getName(32); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1078%;  
    margin-left: 69.4%;
" data-toggle="modal" href="#place33" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="755,472,834,535" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place33" />
<span><?php getName(33); ?></span>
             </a>
        </p>
        </div> 

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1122%;  margin-left: 69.4%;
" data-toggle="modal" href="#place34" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="757,409,834,470" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place34" />
<span><?php getName(34); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1143%;  
    margin-left: 81.9%;
" data-toggle="modal" href="#place35" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="885,472,959,534" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place35" />
<span><?php getName(35); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1187%;  margin-left: 81.9%;
" data-toggle="modal" href="#place36" class="btn rt btn-primary btn-large"> 
<area shape="rect" coords="885,404,958,468" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place36" />
<span><?php getName(36); ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1203%;  
    margin-left: 95.9%;
" data-toggle="modal" href="#" class="btn rt btn-primary"> 
<area shape="rect" coords="1017,483,1106,538" href="http://localhost/tp_7_programmation_web_11P248/localise.php#portederr" />
<span><?php echo 'Porte D\'Entree Secondaire'; ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1235%;  
    margin-left:  1.9%;
" data-toggle="modal" href="#" class="btn rt btn-primary"> 
<area shape="rect" coords="17,494,174,541" href="http://localhost/tp_7_programmation_web_11P248/localise.php#porteava" />
<span><?php echo 'Porte D\'Entree Principale'; ?></span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a style="
    margin-top: -1354.17%; 
    margin-left: 5.9%;
" data-toggle="modal" href="#" class="btn rt btn-primary  "> 
<area shape="rect" coords="27,25,191,110" href="http://localhost/tp_7_programmation_web_11P248/localise.php#tableprof" />
        <span><?php echo 'Table Du Professeur'; ?></span>
 </a>
        </p>
        </div>
</div>

  
<!--
 <div class="modalBox">
        <p>

 <a data-toggle="modal" href="#place38" class="btn btn-primary btn-large">Hover Me!
<area shape="rect" coords="17,494,174,541" href="http://localhost/tp_7_programmation_web_11P248/localise.php#porteava" />
<span>I'm a popup...</span>
             </a>
        </p>
        </div>
 
 <div class="modalBox">
        <p>

 <a data-toggle="modal" href="#place39" class="btn btn-primary btn-large">Hover Me!
 <area shape="rect" coords="27,25,191,110" href="http://localhost/tp_7_programmation_web_11P248/localise.php#tableprof" />
<span>I'm a popup...</span>
             </a>
        </p>
        </div>-->
<!--
 <div class="modalBox">
        <p>

 <a data-toggle="modal" href="#place40" class="btn btn-primary btn-large">Hover Me!
 <area shape="rect" coords="887,474,958,532" alt="Place 40" href="http://localhost/tp_7_programmation_web_11P248/localise.php#place40" />
<span>I'm a popup...</span>
             </a>
        </p>
        </div>

<div class="modalBox">
        <p>

 <a data-toggle="modal" href="#devant" class="btn btn-primary btn-large">Hover Me!
 <area shape="rect" coords="18,496,172,540" alt="Porte D&apos;Entree Devant" href="http://localhost/tp_7_programmation_web_11P248/localise.php#porte_devant" />
<span>I'm a popup...</span>
             </a>
        </p>
        </div>
<div class="modalBox">
        <p>

 <a data-toggle="modal" href="#derriere" class="btn btn-primary btn-large">Hover Me!
 <area shape="rect" coords="1019,487,1102,540" alt="Porte Arriere" href="http://localhost/tp_7_programmation_web_11P248/localise.php#porte_arriere" />
<span>I'm a popup...</span>
             </a>
        </p>
        </div>

 <div class="modalBox">
        <p>

 <a data-toggle="modal" href="#prof" class="btn btn-primary btn-large">Hover Me!
 <area shape="rect" coords="30,25,191,109" alt="Table Du Professeur" href="http://localhost/tp_7_programmation_web_11P248/localise.php#table_prof" />
<span>I'm a popup...</span>
             </a>
        </p>
        </div>-->

</map>

            
             
        <!-- Modal 
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal Title Goes Here</h4>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis dui sagittis nulla sollicitudin blandit. Nulla mollis neque felis, id mattis justo aliquam a. Proin rhoncus magna id adipiscing eleifend. Curabitur a nulla enim. Nulla facilisi.
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
          <a href="#" class="btn btn-primary">Do Nothing</a>
        </div>
      </div> <!-- /.modal-content
    </div><!-- /.modal-dialog 
  </div>--><!-- /.modal -->

<?php    
   include_once 'connexion.php';
   $c=new Connection('tp7_prog_web','root','');
   $bdd=$c->seConnecter('tp7_prog_web','root','');
        
for($i=1;$i<=40;$i++)
{
  $reponse = $bdd->query('SELECT * FROM Etudiant WHERE Etudiant_ID='.$i); 
  if($repons=$reponse->fetch())
  {
 echo '<div class="modal" id="place'.$i.'">';
  echo '<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          ';
 $_SESSION['modif']=$repons['Etudiant_ID'];  
   echo '<h4 class="modal-title">'.$repons['Nom'].' '.$repons['Prenom'].'</h4>
        </div>';
   echo '<div class="modal-body">
        <span><img src="ressources/images/etudiant/'.$repons['Photo'].'"/></span><br/>
        <span><span class="sas">Matricule : </span>'.$repons['Matricule'].'</span><br/>
        <span><span class="sas">Nom : </span>'.$repons['Nom'].'</span><br/>
        <span><span class="sas">Prenom : </span>'.$repons['Prenom'].'</span><br/>
        <span><span class="sas">Numero De Telephone : </span>'.$repons['Telephone'].'</span><br/>
        <span><span class="sas">Adresse Electronique : </span>'.$repons['Email'].'</span><br/>
        <span><span class="sas">Promotion : </span>'.$repons['Promotion'].'</span><br/>
        <span><span class="sas">Description : </span>'.$repons['Presentation'].'</span><br/>
        <span><a style="margin-left:35%;margin-top:15px;" href='.$repons['Social'].'>Media Social</a></span><br/>
        <span><a style="margin-left:35%;margin-top:15px;" href='.$repons['CV'].'>Curriculum Vitae</a></span><br/>
        <span><a style="margin-left:35%;margin-top:15px;" href='.$repons['Espace'].'>Espace Web</a></span><br/>
        </div>';
    echo '<div class="modal-footer">
          <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> 
        <a  class="btn za" id='.$repons['Etudiant_ID'].' >Modifier</a> 
       </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->';
  }
} 
 ?>
         <div class="pied_de_page" style="padding: 5px;
padding: 5px;
clear: both;
/* text-align: center; */
margin-top: 20%;
color: rgb(243, 243, 250);
background-repeat: repeat-x;
border: 2px solid white;
margin-bottom: 5px;
background-color: blue;">

<strong id="copyright">Billy R. Zafack ## Copyright &COPY; Novembre 2014</strong>
</div>
        <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="js/jquery.js"></script>
    <script text="javascript">
    $('document').ready(function(){
       $('.za').click(function(){
           var s=$(this).attr('id');
        document.write(''+$(this).attr('id'));
           window.location.href='modifier.php?des='+s;
           
    });});</script>
    </body>
    
</html>
