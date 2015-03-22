<?php
$_SESSION['mat_etd']="";
$_SESSION['nom_etd']="";
$_SESSION['prenom_etd']="";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/style1.css"/>
</head>

<body>
<div class="header content clearfix">
    <img alt="Quiz space" class="header2" src=".\\multimedia\\images\\header.png" style="
    margin-left: 1%;  margin-top: 2%;
"/ >
  </div>
<h1>Toutes les connaissances dans un tout petit espace</h1>
 <h2 style="
    font-family: 'Open Sans', arial;  -webkit-font-smoothing: antialiased;  color: #555;  font-size: 18px;  font-weight: 400;
    margin-top: 8%;
    text-align: center;
" >Identifiez vous pour acceder aux examens</h2>
<form method="post" action="info_login.php">
<fieldset id="field1" style="
    width: 35%;
    margin-left: 31%;
">
<label><input type="text" name="matricule_login" placeholder="Matricule" id="matricule1" style="
    border-color: blue;
"></label>
<?php
 if(isset($_GET['incorrect']))
{
	echo "<span id='remplir' style='
    font-size: small;
    font-weight: 800;
    color: red;
    text-align: center;
    margin-left: 27%;
'>Veuillez remplir les champs obligatoire</span>";
}
if(isset($_GET['wrong']))
{
	echo "<span id='remplir1' style='
    font-size: small;
    font-weight: 800;
    color: red;
    text-align: center;
    margin-left: 27%;
'>Le matricule entree n'existe pas.</span>";
}?>
<input type="submit" value="Connexion" name="submit" id="submit2">
<a href="identification.php" id="inscrit1"> Vous n'etes pas deja inscrit?</a>

</fieldset>
</form>

<script src="./js/jquery-ui-1.10.4/jquery-1.10.2.js"></script> 
 <script type="text/javascript">
 var a = document.getElementById('remplir1')
 if(a!=null)
 {
	document.getElementById('matricule1').setAttribute('border-color','red');
 }</script>

<div class="pied_de_page">

<strong id="copyright">Billy R. Zafack ## Copyright Octobre/Novembre 2014</strong>
</div>
</body>
</html>