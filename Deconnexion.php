
<?php

	// Page servant principalement dans des includes afin de permettre à l'utilisateur de revenir à la page de connexion
	
	session_start();
	session_destroy();
	header('Location: Index.php');
	exit;

?>