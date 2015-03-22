<?php

try
		{
		$bdd->query('CREATE DATABASE IF NOT EXISTS tp_4_web');
		$bdd->query('use tp_4_web');
		$bdd->query('CREATE TABLE IF NOT EXISTS promotion(
		Promotion_ID INT AUTO_INCREMENT,
		Nom_Promotion VARCHAR(50),
		Chef_De_Promotion VARCHAR(30),
                Description VARCHAR(200),
		CONSTRAINT pk_promo PRIMARY KEY(Promotion_ID));');
		$bdd->exec('insert into promotion(Nom_Promotion,Chef_Promotion,Description) values("2016","Tchamani Moise","Une Promotion de dynamisme, du renouveau et d\'experiences exceptionelles. 300 a l\'entree, cette promtion restera gravee dans l\'HISTOIRE de L\'ENSP");');
		$bdd->exec('insert into promotion(Nom_Promotion,Chef_Promotion,Description) values("2017","Jean Doe","Une promotion qui a fait ses preuves dans tous les domaines de la vie coommune de polytechnique");');
		 
		$bdd->query('CREATE TABLE IF NOT EXISTS departement(
		Departement_ID INT AUTO_INCREMENT,
		Nom_Departement VARCHAR(50),
		Chef_Departement VARCHAR(30),
		CONSTRAINT pk_dept PRIMARY KEY(Promotion_ID));');
		$bdd->exec('insert into departement(Nom_Departement,Chef_Departement) values("Departement D\'Informatique","Pr. BOUETOU BOUETOU THOMAS");');
		$bdd->exec('insert into departement(Nom_Departement,Chef_Departement) values("Departement Du Genie Civile et Urbanisme","Jean GCU");');
		$bdd->exec('insert into departement(Nom_Departement,Chef_Departement) values("Departement Du Genie Electrique et Telecommunications","Jean GEL");');
		$bdd->exec('insert into departement(Nom_Departement,Chef_Departement) values("Departement Du Genie Mecanique et Industrielle","Jean GM");');
		$bdd->exec('insert into departement(Nom_Departement,Chef_Departement) values("Departement Des Mathematiques et Sciences Physique","Pr GWET Henri");'); 
		
		$bdd->query('CREATE TABLE IF NOT EXISTS Etudiant(
		Etudiant_ID INT AUTO_INCREMENT,
                Matricule_Etudiant VARCHAR(20),
		Nom_Etudiant VARCHAR(50),
		Prenom_Etudiant VARCHAR(30),
                Promotion_ID INT,
                Departement_ID INT,
                Photo VARCHAR(20),
                Description VARCHAR(200),
		CONSTRAINT pk_etd PRIMARY KEY(Etudiant_ID)
                CONSTRAINT fk_etd_promo FOREIGN KEY(Promotion_ID) REFERENCES Promotion(Promotion_ID),
                CONSTRAINT fk_etd_dept FOREIGN KEY(Departement_ID) REFERENCES Departement(Departement_ID));');
		$bdd->exec('insert into Etudiant(Matricule_Etudiant,Nom_Etudiant,Prenom_Etudiant,Promotion_ID,Departement_ID,Photo,Description) values("11P001,"Feuyan","Audric",1,1,"feuyan.jpg","Un esprit dynamique, feroce et pouvant s\'adapter a tout environement de travail. M. Feuyan est un homme avec un future assuree.");');
		$bdd->exec('insert into Etudiant(Matricule_Etudiant,Nom_Etudiant,Prenom_Etudiant,Promotion_ID,Departement_ID,Photo,Description) values("11P002,"Ndonna","Yacynth",1,1,"ndonna.jpg","Le GSA De l\'ENSP M. a fait ses preuves en representant l\'ENSP a Accra en Aout 2015");');
		 }
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		
?>
