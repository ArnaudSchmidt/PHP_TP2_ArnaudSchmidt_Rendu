
<html>

	<!-- Page supposée permettre l'affichage des factures stockées dans la base de données -->

	<head>
	
		<meta charset="utf-8"/>
		<title>La BDD c'est pas la joie</title>
		<link rel="stylesheet" type="text/css" href="Style.css">
		<link rel="stylesheet" href="Impression.css" type="text/css" media="print" />	<!-- je teste la version imprimable ici en attendant d'avoir l'autre page -->
		
	</head>

	<body>
		
		<header>
			<h3>Application Web : gestion de factures</h3>
			<h4>Affichage des factures</h4>
			<p>
			
				<a href="Navigation.php" >Revenir au menu</a> ou <a href="Deconnexion.php" >Se déconnecter</a>
			
			</p>
		</header>

	</body>
	
	<?php  

		include 'Erreur_&_Connexion.php';

		//On va chercher à afficher les différentes factures
		$reponse = $bdd->query('SELECT * FROM facture');	
		
		while ($donnees = $reponse->fetch())
		{
			
			echo //un tableau en html ?
			
		}
		
		$reponse->closeCursor();	
	
	?>
	
</html>

