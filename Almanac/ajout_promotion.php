<!DOCTYPE html>
<a href="choix_promo.php"></a>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
       
            
        if (isset($_POST['Nom_Promotion']) && $_POST['Nom_Promotion']!= "")
        {
        $c=new Connection('tp_4_web','root','');
        $bdd=$c->seConnecter('tp_4_web','root','');
        
             
                try
                {
                $reponse = $bdd->exec('INSERT INTO Promotion(Nom_Promotion,Chef_De_Promotion,Description) VALUES("'.$_POST['Nom_Promotion'].'","'.$_POST['Chef_De_Promotion'].'","'.$_POST['Description'].'");');
                echo "INTERMEDIARY";
                echo"INSERTIONNNNNNNN";
                mkdir("ressources/images/".$_POST['Nom_Promotion'],0700);
                mkdir("ressources/images/".$_POST['Nom_Promotion']."/Informatique",0700);
                mkdir("ressources/images/".$_POST['Nom_Promotion']."/Genie_Civile_Et_Urbanisme",0700);
                mkdir("ressources/images/".$_POST['Nom_Promotion']."/Genie_Electrique_et_Telecommunications",0700);
                mkdir("ressources/images/".$_POST['Nom_Promotion']."/Genie_Mecanique_et_Industrielle",0700);
                mkdir("ressources/images/".$_POST['Nom_Promotion']."/Mathematiques_et_Sciences_Physiques",0700);
                header('Location: admin.php?promo_success=1');
                
                }
                catch(Exception $e)
                {
                   die('ErreurINSERTION_Promo : ' . $e->getMessage());
                }
               
        }
        else
        {
            header('Location: admin.php?promo_error=1');
        }
        ?>
    </body>
</html>
