<?php
$_SESSION['mat_etd'];
$_SESSION['nom_etd'];
$_SESSION['prenom_etd'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Enregistrement</title>
<?php
if($_POST['matricule_ident']=="" || $_POST['nom']=="")
{
	
	header('Location: identification.php?incorrect=1');
}
else if(!isset($_POST['matricule_ident']) || !isset($_POST['nom']))
{
	header('Location: identification.php?incorrect=1');
}
else
{
	$flag=false;
	 if($id_file=fopen(".\\ressources\\general\\etudiants.txt","r"))
	{
	$i=0;
	$note=0;
		while($tab=fgetcsv($id_file,500,":") )
		{
			if($i!=0)
			{
				$i++;
				$tab[0]=trim($tab[0]);
				if(isset($_POST['matricule_ident']))
				{
				if($tab[0]==$_POST['matricule_ident'])
				{
				   $flag=true;
					$s=trim($tab[3]);
					$note=$note+$s;
				}
				}
			}
			else
			{
				$i++;
			}
		}
	fclose($id_file);
}

	if(file_exists("./ressources/general/etudiants.txt"))
	{
		if($id_file=fopen("./ressources/general/etudiants.txt","r"))
			{
			if(!$flag)
			{
			if(isset($_POST['prenom']))
			{
				fwrite($id_file,$_POST['matricule-ident']." : ".$_POST['nom']." : ".$_POST['prenom']);
				flock($id_file,3);
				fclose($id_file);
			}
			else {
				fwrite($id_file,$_POST['matricule-ident']." : ".$_POST['nom']." : :" );
				flock($id_file,3);
				fclose($id_file);
                 }
				 }
				 else
				 {
					header('Location: identification.php?incorrect=1');
				 }
				 }
					else {
				echo "fichier introuvable";
                 }
}
else
{ 
$id_file=fopen("./ressources/general/etudiants.txt","w");
if(isset($_POST['prenom']))
{
	fwrite($id_file,$_POST['matricule-ident']." : ".$_POST['nom']." : ".$_POST['prenom']);				
	fclose($id_file);
}
else
{
	fwrite($id_file,$_POST['matricule-ident']." : ".$_POST['nom']." : : ");			
}
}
	$_SESSION['mat_etd']=$_POST['matricule_ident'];
	$_SESSION['nom_etd']=$_POST['nom'];
	$_SESSION['prenom_etd']=$_POST['prenom'];
   	header('Location: choix_examen.php?matricule_ident='.$_POST['matricule_ident'].'&amp;nom='.$_POST['nom']);
}
?>
</head>

<body>
</body>
</html>