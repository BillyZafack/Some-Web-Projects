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
       
            
        if (isset($_FILES['photo']) AND $_FILES['photo']['error']== 0)
        {
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['photo']['size'] <= 3000000)
            {
                // Testons si l'extension est autorisée
                $infosfichier =pathinfo($_FILES['photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif','png');
                if (in_array($extension_upload,$extensions_autorisees))
                {
                    // On peut valider le fichier et le stocker définitivement
                    if(isset($_POST['departement']))
                    {
                        $r=  str_replace(" ", "_", $_POST['departement']);
                    
                        if(isset($_POST['promotion']))
                        {
                            echo "FILE MOVED";
                            move_uploaded_file($_FILES['photo']['tmp_name'], 'ressources/images/'.$_POST['promotion'].'/'.$r.'/'.basename($_FILES['photo']['name']));
                        }
                    }
                }
                else
                {
                    header('Location: admin.php?extension=1');
                }
            }else
            {
                header('Location: admin.php?size=1');
            }
        
       
        $c=new Connection('tp_4_web','root','');
        $bdd=$c->seConnecter('tp_4_web','root','');
        if(isset($_POST['mat_Etudiant']) && isset($_POST['nom_Etudiant']) && isset($_POST['prenom_Etudiant']) && isset($_POST['promotion']) && isset($_POST['departement']))
        {
             echo "INTERMEDIARY";
            if(getXIDwithName('Promotion', $_POST['promotion'])=='ERROR' || getXIDwithName('Departement', $_POST['departement'])=='ERROR')
            {
                echo"ERREUR RECUPERATION ID AVEC NOM";
            }
            else
            {
                echo"INSERTIONNNNNNNN";
                try
                {
                $reponse = $bdd->exec('INSERT INTO Etudiant(Matricule_Etudiant,Nom_Etudiant,Prenom_Etudiant,Promotion_ID,Departement_ID,Photo,Description) VALUES("'.$_POST['mat_Etudiant'].'","'.$_POST['nom_Etudiant'].'","'.$_POST['prenom_Etudiant'].'",'.getXIDwithName('Promotion', $_POST['promotion']).','.getXIDwithName('Departement', $_POST['departement']).',"'.basename($_FILES['photo']['name']).'","'.$_POST['description'].'");');
                header('Location: admin.php?success=1');
                
                }
                catch(Exception $e)
                {
                   die('ErreurINSERTION : ' . $e->getMessage());
                }
                
                }   
            
        }
        }
        else
        {
            header('Location: admin.php?file=1');
        }
        ?>
    </body>
</html>
