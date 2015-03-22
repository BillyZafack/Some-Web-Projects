<?php

class Connection
{
	private $dbname;
	private $username;
	private $passwd;
	
	public function __constructor($dbname, $username,$passwd)
	{
		$this->dbname=$dbname;
		$this->username=$username;
		$this->passwd=$passwd;
	}
	public function seConnecter($dbname,$username,$passwd)
	{
		try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=tp7_prog_web' , $username, $passwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
		die('Erreur : ' . $e->getMessage());
		}
		return $bdd;
	}
}

?>