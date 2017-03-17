
<?php	

	//Page destinée à des includes étant donné que ce bout de code reviendra régulièrement

	//connexion à la base de données
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=Debut_Facture','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur :' . $e->getmessage());
	}
	
?>