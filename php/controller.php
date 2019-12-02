<?php

	// Requête a mysql
	try {
		$requete = $pdo->prepare(

			"SELECT
			*
			FROM
			`temoignage`;"
		);
		// prépare la requête (les demande à la BDD) et les mets dans une variable "$requete"
		// $requete->bindParam(':id_temoingnage', $id_temoignage);

		// execute la variable "$requete"
		$requete->execute();

		//$resultat est le retour de la requête mySQL. Fetch"All" récupère TOUTES les données
		$resultats = $requete->fetchAll();

		// var_dump($resultats);
		// echo $resultats[0]['nom_temoin'];

	}
	catch (PDOException $e) {
		echo 'Échec lors de la connexion : ' . $e->getMessage();
	}
// }
?>
