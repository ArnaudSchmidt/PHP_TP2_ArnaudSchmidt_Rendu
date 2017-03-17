
<?php 

	// Page qui complète Index.php de façon à traiter les données (hasher le mot de passe et ajout à la base de données)

	//vérification des champs du formulaire
	if (isset($_POST['pseudo']) and isset($_POST['password']))
	{
		//connexion à la base de données
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=Debut_Facture','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur :' . $e->getmessage());
		}
		
		//récupération des données pour les stocker dans des variables
		$identifiant = $_POST['pseudo'];
		$mdp = $POST['password'];
		
		//hashage du mot de passe
		$hashmdp = password_hash($mdp, PASSWORD_DEFAULT);
		
		//ajout des données dans la base MySQL
		$bdd-> exec('INSERT INTO utilisateur(identifiant,mot_de_passe) VALUES($identifiant,$hashmdp)');
		
		//on termine le traitement de la requête
		$bdd->closeCursor();
		
		//on stock les informations afin de maintenir la connexion
			//variables de session ?
		
		//une fois l'utilisateur entrée dans la base, on l'amène au menu de navigation
		header('Location: Navigation.php');
		exit;
		
	}
	
?>
