
<html>

	<!-- Page supposée recevoir l'identifiant de l'utilisateur et son mot de passe -->

	<head>
	
		<meta charset="utf-8"/>
		<title>La BDD c'est pas la joie</title>
		<link rel="stylesheet" type="text/css" href="Style.css">
		
	</head>

	<body>
	
		<header>
			<h3>Application Web : gestion de factures</h3>
			<h4>Page de connexion</h4>
		</header>
	
	
		<!-- On utilise un formulaire pour récupérer l'identifiant et le mot de passe de l'utilisateur -->
		<form action="Traitement_Donnees.php" method="POST"> 												
			<p>
				<label for="pseudo">Pseudo : </label><Input type="text" name="pseudo" />
			</p>
			<p>
				<label for="password">Mot de passe : </label><Input type="password" name="password" />
			</p>
			<p>
				<input name="submit_comment" type="submit" class="btn btn-primary" value="Connexion"/>
			</p>
		</form>
	
	</body>
	
</html>

