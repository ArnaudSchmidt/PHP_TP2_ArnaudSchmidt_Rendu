
<html>

	<!-- Page supposée permettre l'affichage des différents données choisies par l'utilisateur -->

	<head>
	
		<meta charset="utf-8" />
		<title>La BDD c'est pas la joie</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />
		
	</head>

	<body>
		
		<header>
			<h3>Application Web : gestion de factures</h3>
			<h4>Affichage de données spécifiques</h4>
			<p>
			
				<a href="Navigation.php" >Revenir au menu</a> ou <a href="Deconnexion.php" >Se déconnecter</a>
			
			</p>
		</header>
		
		<div>
		
			<!-- Formulaire de recherche de facture -->
			<form action="#" method="POST" >
				<h1>Rechercher une facture</h1>
				<p>
					<label> Date : <input name="date" type="date" id="date" required /></label>
				</p>
				<p>
					<label> Numéro client : <input name="NumCli" type="text" id="NumCli" required /></label>
				</p>
				<p>
					<input name="submit_facture" type="submit" class="btn btn-primary" value="Rechercher"/>
				</p>
			</form>
		
		</div>
		
		<div>
		
			<!-- Formulaire de recherche de produit -->
			<form action="#" method="POST" >
				<h1>Rechercher un produit</h1>
				<p>
					<label>Nom du produit : <input name="pnom" type="text" id="NomProd" required /></label>
				</p>
				<p>
					<label>Prix unitaire HT : <input name="pprix" type="text" id="PrixProd" required /></label>
				</p>
				<p>
					<input name="submit_produit" type="submit" class="btn btn-primary" value="Rechercher"/>
				</p>
			</form>

		
		</div>

	</body>
	
	
	
</html>

<?php 

	//méthode POST d'affichage des données selon les critères recherchés

?> 



