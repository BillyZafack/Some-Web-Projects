<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"  type="text/css"/>
        <link rel="stylesheet" href="Style.css" type="text/css"/>
      
    <link href="css/landing-page.css" rel="stylesheet" type="text/css"/>
    <link href="css/landing-page.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <style type='text/css'>
            .champs
            {
                margin-left: -2%;
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
    <body style="background-image: url(ressources/images/design/wood-repeat.jpg)">  
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
    border-radius: 132px;
">
     <?php
            if(isset($_GET['success']))
            {
                echo '<div id="success" style="width: 44%;
z-index=9999;height: 64px;background-color: rgba(255, 165, 0, 0.73);z-index: 9999; margin-left: 27%;margin-top: 3%; font-size: 152%;
    font-weight: bolder; color: white;
                         
    padding-top: 2%;
"><span style="
    margin-left: 25%;
    margin-top: 23%;
    margin-bottom: 12%;
">L\'Etudiant a été enregistré</span></div>';
            }
            if(isset($_GET['supprimer']))
            {
                echo '<div id="supprimer" style="width: 44%;
z-index=9999;height: 64px;background-color: red;z-index: 9999; margin-left: 27%;margin-top: 3%; font-size: 152%;
    font-weight: bolder; color: white;
                         
    padding-top: 2%;
"><span style="
    margin-left: 25%;
    margin-top: 23%;
    margin-bottom: 12%;
">L\'Etudiant a été supprimer</span></div>';
            }
            if(isset($_GET['promo_success']))
            {
                echo '<div id="promo_success" style="width: 44%;
z-index=9999;height: 64px;background-color: red;z-index: 9999; margin-left: 27%;margin-top: 3%; font-size: 152%;
    font-weight: bold; color: white;
                         
    padding-top: 2%;
"><span style="
    margin-left: 25%;
    margin-top: 23%;
    margin-bottom: 12%;
">La Promotion a été ajoutée</span></div>';
            }
            ?>
  </div>
          
        <section class="container">
           
            <div class="row">
                <nav id="menu" class="navbar menu-header">
                    <div class="navbar-inner" style="
    margin-top: 12%;
">
                        <div class="container">
                            <form  class="navbar-search pull-left" action="">
                                <input class="search-query input-large" id="search"  type="text" placeholder="Recherche">
                            </form>
                            
                            <ul id="onglets" class="nav nav-tabs">
                                <li class="divider-vertical"></li>
                                <li class="active"><a href="#Auteur_Document" data-toggle="tab">Creer Un Nouveau Etudiant</a></li>
                                <li><a href="#GroupeProprietaire_Document" data-toggle="tab">Creer Une Nouvelle Promotion</a></li>
                                <li><a href="#Type_Document" data-toggle="tab">  Supprimer un Etudiant </a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div class="main-container row">
                
                
                <article class="form_A_Remplir">      
                    <div class="tab-content">
                        <div class="span7 formulaire Auteur_Document tab-pane active" id="Auteur_Document">
                            <form action="insert.php" method="post" enctype="multipart/form-data" name="Auteur" style="width: 178%;margin-left: -6%;" class="form-horizontal well">
                                <fieldset>
                                    <div id='part1'  style="    height: 203px; border: 2px solid rgb(229, 220, 220); padding-top: 32px; width: 33%; padding-right: 12px; padding-left: 0px; margin-left: 1.5%;border-radius: 52px; margin-top: 4%; margin-bottom: 8%;">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="text" class="champs" style='margin-left: -11%;margin-top: 1%;height: 28px;' placeholder="Matricule De L'Etudiant" name="mat_Etudiant" id="mat_Etudiant"/>  
                                            <span class="error1 help-inline" style='color:red;display:none;'>Ce Champs est Obligatoire</span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="text"  class='champs' style='margin-left: -11%;margin-top: 1%;height: 28px;' placeholder="Nom De L'Etudiant" name="nom_Etudiant" id="nom_Etudiant"/> 
                                            <span class="error2 help-inline" style='color:red;display:none;'>Ce Champs est Obligatoire</span>
                                        </div>
                                    </div>

									<div class="control-group">
                                        <div class="controls"> 
                                            <input type="text" class='champs' style='margin-left: -11%;margin-top: 1%;height: 28px;' placeholder="Prenom De L'Etudiant" name="prenom_Etudiant" id="prenom_Etudiant"/>
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
                                    </div>
                                    <div id='part2' style="height: 203px;border: 2px solid rgb(229, 220, 220);;padding-top: 32px;width: 49%;float: right;padding-right: 12px;padding-left: 0px;margin-left: 1%;border-radius: 52px;margin-bottom: 8%;display: inline;margin-right: 2%;margin-top: -33%;">
                                    <div class="control-group">
                                        <label class="control-label" for="Domaine_Auteur"> Promotion </label>
                                        <div class="controls">
                                            <select style='margin-top: 0%;margin-left: 3%;' name="promotion" id="Domaine_Auteur">
											<?php
											session_start();
											$_SESSION['promotion']="";
											include_once ('connexion.php');
											$c=new Connection('tp_4_web','root','');
											$bdd=$c->seConnecter('tp_4_web','root','');
											$reponse = $bdd->query('SELECT * FROM promotion;');
											while ($donnees = $reponse->fetch())
											{
											echo '<option value="'.$donnees["Nom_Promotion"].'">'.$donnees["Nom_Promotion"].'</option>';
                                                                                        
                                                                                        }
											?>
                                            </select>
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>

                                    
                                              
                                    <div class="control-group">
                                        <label class="control-label" for="departement"> Departement  </label>
                                        <div class="controls">
                                            <select style='margin-top: 0%;margin-left: 3%;' name="departement" id="departement">
                                                <?php
											session_start();
											$_SESSION['promotion']="";
											include_once ('connexion.php');
											$c=new Connection('tp_4_web','root','');
											$bdd=$c->seConnecter('tp_4_web','root','');
											$reponse = $bdd->query('SELECT * FROM departement;');
											while ($donnees = $reponse->fetch())
											{
											echo '<option value="'.$donnees['Nom_Departement'].'">'.$donnees['Nom_Departement'].'</option>
                                                ';
		}
											?>
                                            </select>
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="Attribut_auteur"> Photo  </label>
                                        <div class="controls">
                                           <input style='margin-top: 0%;margin-left: 3%;' type="file" name="photo" id="photo" class="group1_champ" value="...">
                                           <?php
                                            if(isset($_GET['file']))
                                            {
                                               echo '<span class="help-inline error3" style="color:red;display:block;font-size: 92%;font-weight: 900;margin-left:19%;">Une Photo est Obligatoire</span>';
                                            }
                                            else if(isset ($_GET['extension']))
                                            {
                                                 echo '<span class="help-inline error3" style="color:red;display:block;font-size: 92%;font-weight: 900;margin-left:19%;">Seul les images d\'extension gif,jpg,jpeg ou png sont permises</span>';
                                            }
                                            else if(isset ($_GET['size']))
                                            {
                                                 echo '<span class="help-inline error3" style="color:red;display:block;font-size: 92%;font-weight: 900;margin-left:19%;">La taille de la photo doit etre en dessous de 3Mo</span>';
                                            }
                                            ?>
                                                    </div>
                                    </div>
                                        </div>
                                    <?php
                                    if(isset($_GET['requete']))
                                    {
                                        echo'<!-- Modal -->
  <div class="modal in" id="myModal" aria-hidden="false" style="display: block;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Modal Title Goes Here</h4>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis dui sagittis nulla sollicitudin blandit. Nulla mollis neque felis, id mattis justo aliquam a. Proin rhoncus magna id adipiscing eleifend. Curabitur a nulla enim. Nulla facilisi.
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
          <a href="#" class="btn btn-primary">Do Nothing</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->';
                                    }
                                    ?>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea placeholder="DESCRIPTION DE L'ETUDIANT" name='description' style="overflow: scroll; width: 54%;height: 194px; margin-left: 18%;border: 1px solid rgb(216, 206, 206); border-radius: 23px;
"></textarea>
                                            <span class="error2 help-inline"></span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="reset" id="reinit1" style='margin-left: 33%;' value="Annuler" onclick="initEtudiant" class="btn-primary btn-small">
                                                <i class="icon-white icon-remove-sign"></i> Reinitialiser
                                            </button>
                                            <button type="submit" id="valider1" style='margin-left: 3%;' value="Associer" class="btn-success btn-small "> 
                                                <i class="icon-white icon-ok-sign"></i> Valider
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="span7 formulaire GroupeProprietaire_Document tab-pane" style=" margin-left: 21%; margin-top: 7%;" id="GroupeProprietaire_Document">
                            <form name="GroupeProprietaire"  method="post" action="ajout_promotion.php" class="form-horizontal well" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label"  style="
    margin-right: 3%;
"for="ID_Groupe"> Nom De La Promotion </label>
                                        <div class="controls">
                                             <input type="text" name="Nom_Promotion" id="Nom_GroupeProprietaires"/>  
                                             <?php
                                           if(isset($_GET['promo_error']))
                                           {
                                               echo '<span class="error1 help-inline" style="color:red;">Ce Champs est Obligatoire</span>';
                                           }
                                                       ?>
                                                    </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" style="
    margin-right: 3%;
" for="Nom_GroupeProprietaires"> Chef De Promotion </label>
                                        <div class="controls">
                                            <input   type="text" name="Chef_De_Promotion" id="Nom_GroupeProprietaires"/>  
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <label class="control-label" style="
    margin-right: 3%;
" for="Nom_GroupeProprietaires"> Description </label>
                                        <div class="controls">
                                            <textarea  name='Description' style='height: 143px; overflow: scroll;' placeholder="DESCRIPTION DE LA PROMOTION">
                                                
                                            </textarea><span class="help-inline"></span>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="reset" style="
    margin-left: 21%;
" value="Annuler" class="btn-primary btn-small">
                                                <i class="icon-white icon-remove-sign"></i> Reinitialiser
                                            </button>
                                            <button type="submit" value="Associer" class="btn-success btn-small"> 
                                                <i class="icon-white icon-ok-sign"></i> Valider
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="span7 formulaire Type_Document tab-pane"  style=" margin-left: 22%; margin-top: 7%;" id="Type_Document">
                            <form name="supprimer_Etudiant" method="post" action="supprimer.php" class="form-horizontal well">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" style="
    margin-left: 3%;
" for="ID_Type"> ID </label>
                                        <div class="controls">
                                            <select name="supprimer_choix" id="Domaine_Auteur">
                                                <option value="Matricule_Etudiant">Matricule</option>
                                                <option value="Nom_Etudiant">Nom Etudiant</option>
                                                <option value="Prenom_Etudiant">Prenom Etudiant</option>
                                               </select><span class="help-inline"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" style="
    margin-left: 3%;
" for="Nom_GroupeProprietaires"> Valeur </label>
                                        <div class="controls">
                                            <input name="supprimer_valeur" type="text" name="Nom_GroupeProprietaires" id="Nom_GroupeProprietaires"/>  
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="reset" style="
    margin-left: 21%;
" value="Annuler" class="btn-primary btn-small">
                                                <i class="icon-white icon-remove-sign"></i>Reinitialiser
                                            </button>
                                            <button type="submit" value="Associer" class="btn-success btn-small"> 
                                                <i class="icon-white icon-ok-sign"></i>Valider
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
        <script type="text/javascript">
$(document).ready(function(){
       $('#success').hide(20000);
       $('#supprimer').hide(20000);
       $('#promo_success').hide(20000);
       var s=$('#search').attr('value');
       $('.search-query').keydown(function(e){
           var c = e.keyCode || e.which;
           if(code==13)
           {
               window.href.Location='admin.php?requete='.s;
           }
       });
      
	var $champ = $('.champs');
	var $login = $('#mat_Etudiant');
	var $nom = $('#nom_Etudiant');
        var $prenom = $('#prenom_Etudiant');
	var $photo = $('#photo');
        var $creer = $('#valider1')
	var $erreur1 = $('.error1');
	var $erreur2 = $('.error2');
	
  
	
	$champ.keyup(function(){
		if($(this).val().length < 2 && $(this).val().length > 0){
			$(this).css({
				borderColor : 'red',
				color : 'red'
			});
		}
		else{
			$(this).css({
				borderColor : 'green',
				color : 'green'
			});
		}
	
	});

	
	$creer.click(function(e){
		   // e.preventDefault();
		
			verifier($login);
			verifier($nom);
                        verifier($prenom);
			
	});
	
});


function verifier(ch)
    {
		var $erreur1 = $('.error1');
		var $erreur2 = $('.error2');
		if(ch.attr('placeholder')=="Matricule De L'Etudiant")
		{
        if(ch.val().trim().length < 2 && ch.val().trim().length >= 0){ // si le champ est vide
			$erreur1.css('display', 'block'); // on affiche le message d'erreur
            ch.css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
            });
        }
		}
		else if(ch.attr('placeholder')=="Nom De L'Etudiant")
		{
			if(ch.val().trim().length < 2 && ch.val().trim().length >= 0){ // si le champ est vide
			$erreur2.css('display', 'block'); // on affiche le message d'erreur
            ch.css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
            });
        }
		}
                else if(ch.attr('placeholder')=="Prenom De L'Etudiant")
		{
			if(ch.val().trim().length < 2 && ch.val().trim().length >= 0){ // si le champ est vide
            ch.css({ // on rend le champ rouge
				borderColor : 'red',
				color : 'red'
            });
        }
		}
		
    }
</script>
        <div class="pied_de_page" style="padding: 5px;
clear: both;
text-align: center;
margin-top: 20%;
color: white;
background-repeat: repeat-x;
border: 2px solid white;
margin-bottom: 5px;">

<strong id="copyright">Billy R. Zafack ## Copyright &COPY; Novembre 2014</strong>
</div>
    </body>
</html>
