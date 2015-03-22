<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Identification</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/style1.css"/>
</head>

<body>

  <div class="header content clearfix">
    <img alt="Quiz space"  src=".\\multimedia\\images\\header.png" class="header" style="
    margin-left: 1%;  margin-top: 2%;
"/>
  </div>
<h1>Toutes les connaissances dans un tout petit espace</h1>
 <h2 style="
    font-family: 'Open Sans', arial;  -webkit-font-smoothing: antialiased;  color: #555;  font-size: 18px;  font-weight: 400;
    margin-top: 8%;
    text-align: center;
">Enregistrez vous pour acceder aux examens</h2>
<form method="post" action="info_ident.php">
<fieldset id="field1">
<input type="text" name="matricule_ident" placeholder="Matricule" id="matricule" style="
    border-color: rgb(30, 54, 210);
"> 
<input type="text" name="nom" id="nom" placeholder="Nom" style="
    border-color: rgb(30, 54, 210);
">
<input type="text" name="prenom" id="prenom" placeholder="Prenom"> 
<?php if(isset($_GET['incorrect']))
{
	echo "<span id='erreur' style='
    font-size: small;
    font-weight: 800;
    color: red;
    text-align: center;
    margin-left: 27%;
'>Veuillez remplir les champs obligatoire</span>";
}?>
<input type="submit" value="Connexion" name="submit" id="submit1">
<a href="inscrit.php" id="inscrit"> Vous etes deja inscrit?</a>

</fieldset>
</form>
<div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright Octobre/Novembre 2014</strong>
</div>
</body>
</html>