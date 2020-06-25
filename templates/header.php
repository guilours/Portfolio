<?php //include('/php/_debug.php'); ?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="fr">
<head>

	<title>Guillaume Ferry</title>
	<meta charset="UTF-8">
	<!--DESCRIPTION---------------------------------------------------------------->
	<meta name="description" content="Guillaume ferry, graphiste intégrateur. Site avec une biographie, un portfolio, un formulaire de contact et un lien vers un cv en pdf.">

	<!--FAVICON-------------------------------------------------------------------->
	<link rel="shortcut icon" href="favicon.ico" >

	<!--MEDIA QUERY---------------------------------------------------------------->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!--FONTS---------------------------------------------------------------------->
	<!-- <link href="https://fonts.googleapis.com/css?family=Cookie|Roboto:100,300,400" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'> -->

	<!--FONTAWESOME---------------------------------------------------------------->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!--BOOTSTRAP---------------------------------------------------------------------->
	<!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->

	<!--STYLES--------------------------------------------------------------------->
	<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	<!----------------------------------------------------------------------------->
	<link rel="stylesheet" href="./css/animate.css">
	<!----------------------------------------------------------------------------->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<!----------------------------------------------------------------------------->
</head>

<body>

	<!--Retour haut début-->
	<a name="haut" id="haut"></a>
	<div>
		<a id="cRetour" class="cInvisible" href="#haut"></a>
	</div>
	<!--Retour haut fin-->

	<!----------------------------------------------------------------------------->
	<!--HEADER-->
	<!----------------------------------------------------------------------------->
	<header>

		<div class="menu container">

			<a class="logo navi" data-to="index" href="#index">
				<img class="portrait" src="images/gui2.jpg" alt="guillaume ferry">
				<img src="images/gf.png" alt="logo">
			</a>

			<nav>
				<div class="bgEffect">
					<a class="navi" data-to="about" href="#about"><i class="fab fa-readme fa-3x"></i>Bio</a>
				</div>

				<div class="bgEffect">
					<a class="navi" data-to="portfolio" href="#portfolio"><i class="fas fa-bookmark fa-3x"></i>Portfolio</a>
				</div>

				<div class="bgEffect">
					<a class="navi" data-to="form" href="#form"><i class="fas fa-at fa-3x"></i>Contact</a>
				</div>
			</nav>
		</div>

	</header>
	<!----------------------------------------------------------------------------->
	<!--END HEADER-->
	<!----------------------------------------------------------------------------->



	<!----------------------------------------------------------------------------->
	<!--MAIN-->
	<!----------------------------------------------------------------------------->

	<div id="modalImg">
		<div>
			<img src="images/book/projet2.jpg" alt="projet 1">
		</div>
		<p>description</p>
	</div>
	<main>

		<?php
		//Accès "ou pas" à la bdd selon qu'on est en local ou en ligne
		if($_SERVER['SERVER_NAME'] != 'localhost'){
			include('php/connexionbdd.php');
		}
		?>
