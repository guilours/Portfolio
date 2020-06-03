<?php

	$host 	= "justeaw473.mysql.db";
	$user 	= "justeaw473";
	$pass 	= "MotTemporaire5ecure159";
	$dbname 	= "justeaw473";
	// $host 	= "justeavaqeguisql.mysql.db";
	// $user 	= "justeavaqeguisql";
	// $pass 	= "wODp0WCgMPiC";
	// $dbname 	= "justeavaqeguisql";

	try {

		// Création du PDO
		$pdo = new PDO('mysql:host=' . $host . ';dbname='.$dbname , $user, $pass);

		// Configuration de la gestion des erreurs
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Par défaut, on retourne un tableau associatif
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		// Test du SQL avant envoi au serveur
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

		// gestion de l'encodage (caractères spéciaux, accentués.)
		$pdo->exec("SET CHARACTER SET utf8");

		// echo "la connexion a réussie";
	}

	// Erreur lors de la connexion à la base de données
	catch (PDOException $e) {

		echo "Erreur lors de la connexion a la base de données :<br />";
		echo "<pre>" . $e->getMessage() . "</pre><br/>";

		die();
	}

?>
