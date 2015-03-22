<?php
 session_start(); 
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/s1.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <title>Modification</title>
    </head>
    <body>
  <?php    if(isset($_GET['des'])||isset($_POST['txt']))
   {
      if(isset($_GET['des']))
      {
      echo'       <h1 style="
    width: 132%;
    height: 23px;
    color: rgb(39, 7, 195);
    text-align: center;
    margin-top: 9%;
    margin-left: -14%;
    margin-bottom: 5%;
">Modifier Les Informations Sur L\'Etudiant</h1>';
  include_once 'connexion.php';
   $c=new Connection('tp7_prog_web','root','');
   $bdd=$c->seConnecter('tp7_prog_web','root',''); 

  $reponse = $bdd->query('SELECT * FROM Etudiant WHERE Etudiant_ID='.$_GET['des']); 
   
  if($repons=$reponse->fetch())
  {
      echo '<span id="nom" style="
    margin-left: 45.5%;
">'.$repons['Nom'].' '.$repons['Prenom']."</span>";
      echo '<br/>';
      echo '<span style="
    margin-left: 46%;
"><img src="ressources/images/etudiant/'.$repons['Photo'].'"/></span><br/>';
        
  }
      }
if(!isset($_POST['modif_choix']))
{
    echo '

        <form method="post" action="modifier.php"> <div class="controls"  id="moisr">
                                           <select name="modif_choix" id="choice" style="
    width: 22%;
    height: 35px;border-radius: 8px;
    margin-left: 38%;
    margin-top: 2%;
">
                                                <option value="Matricule" selected="selected">Matricule</option>
                                                <option value="Nom">Nom</option>
                                                <option value="Prenom">Prenom</option>
                                                <option value="Telephone">Numero De Telephone</option>
                                                <option value="Email">Adresse Electronique</option>
                                                <option value="Promotion">Promotion</option>
                                                <option value="CV">Lien vers Media Social</option>
                                                <option value="Social">Lien vers Curriculum Vitae</option>
                                                <option value="Espace">Lien vers Espace Web</option> 
                                            </select><span class="help-inline"></span>
                                        </div>
                                        <input type="text" style="display:none;" name="des" value="'.$_GET['des'].'"/>
            <div class="controls" style="display: block" id="text">
                <input type="text" placeholder="Nouvelle Valeur" name="txt" id="anne" style="
    width: 32%;
    margin-left: 34%;border-radius: 8px;
    height: 32px;
    margin-top: 4%;
"><br/>
            </div>
                <div class="controls" style="display: none" id="areas">
                    <textarea id="area" style="
    margin-left: 28%;border-radius: 8px;
    height: 132px;placeholder="Nouvelle Description"
    width: 43%;
    margin-top: 3%;
" name="area"></textarea></div>
                <div class="controls" style="
    margin-left: 43%;
    margin-top: 3%;
"   id="sbt">
                    <button value="Modifier" style="color:white;
    width: 22%;background-color: rgb(40, 40, 167);border-radius: 8px;
    height: 32px; class="btn btn-default btn-large" type="submit">Modifier</button>
                </div>
        </form>';
    echo '<script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>';
    echo '<script type="text/javascript">'
    . '$("document").ready(function(){if($("#choice").val()=="descrip")'
            . '{'
            . '$("#areas").css("display","block");'
            . '$("#text").css("display","none");'
            . '}'
            . 'else{$("#areas").css("display","none");'
            . '$("#text").css("display","block");}});</script>"';
}
    else
    {
        
        include_once('connexion.php');
        
        $c=new Connection('tp7_prog_web','root','');
        $bdd=$c->seConnecter('tp7_prog_web','root','');
        if(isset($_POST['txt']))
        {
             
                try
                { 
                     
                    echo 'UPDATE Etudiant SET '.$_POST['modif_choix'].' = "'.$_POST['txt'].'" WHERE Etudiant_ID ='.$_POST['des'].';';
                $reponse = $bdd->exec('UPDATE Etudiant SET '.$_POST['modif_choix'].' = "'.$_POST['txt'].'" WHERE Etudiant_ID ='.$_POST['des'].';');
                  session_destroy();
        header('Location: localise.php');  
                }
                catch(Exception $e)
                {
                   die('ErreurSUPPRESSION : ' . $e->getMessage());
                }
                
                 
            
        }

        else
        {
            echo 'ERREUE DE POST';
        }
           
        
    }
     }
 else {
         echo"NNNNNNNNNNNON";
     }
        ?>
    </body>
</html>
