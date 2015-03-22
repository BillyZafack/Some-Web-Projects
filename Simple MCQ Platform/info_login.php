<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Login</title>
<?php
$flag=false;
 if($id_file=fopen(".\\ressources\\general\\etudiants.txt","r"))
{
	$i=0;
	
		while($tab=fgetcsv($id_file,500,":") )
		{
			if($i!=0)
			{
				$i++;
				$tab[0]=trim($tab[0]);
				$tab[1]=trim($tab[1]);
				$tab[2]=trim($tab[2]);
				if($tab[0]==$_POST['matricule_login'])
				{
				   $flag=true;	
				   $_SESSION['nom_etd']=$tab[1];
				   $_SESSION['prenom_etd']=$tab[2];
				}
				
			}
			else
			{
				$i++;
			}
		}
	fclose($id_file);
}

if($_POST['matricule_login']=="")
{
	header('Location: index.php?incorrect=1');
}
else if($flag==false)
{
	   header('Location: index.php?wrong=1');	
}
else
{
	$_SESSION['mat_etd']=$_POST['matricule_login'];
   	header('Location: choix_examen.php?matricule_login='.$_POST['matricule_login']);
}
?>
</head>

<body>

</body>
</html>