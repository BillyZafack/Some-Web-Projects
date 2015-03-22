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
       
        $c=new Connection('tp_4_web','root','');
        $bdd=$c->seConnecter('tp_4_web','root','');
        if(isset($_POST['supprimer_choix']) && isset($_POST['supprimer_valeur']))
        {
          
                echo"".$_POST['supprimer_choix']." ".$_POST['supprimer_valeur'];
                try
                {
                $reponse = $bdd->exec('DELETE FROM Etudiant WHERE '.$_POST['supprimer_choix'].'="'.$_POST['supprimer_valeur'].'";');
                header('Location: admin.php?supprimer=1');
                
                }
                catch(Exception $e)
                {
                   die('ErreurSUPPRESSION : ' . $e->getMessage());
                }
            
        }
        
         
        ?>
    </body>
</html>
