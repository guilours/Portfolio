<!----------------------------------------------------------------------------->
<!-- SECTION CONTACT -->
<!----------------------------------------------------------------------------->
<section id="form" class="part4 part">

	<div class="container">

		<section class="contact">

			<p>Vous souhaitez me faire part d'un projet ? Une question sur le métier de développeur ?
			</p>
			<h2>Contactez-moi</h2>

			<form id="contact" method="post" action="php/formulaire.php">

				<label for="nom"></label><input type="text" name="nom" id="nom" placeholder="Votre Nom">

				<label for="email"></label><input type="email" name="email" id="email" placeholder="Votre Email">

				<label for="objet"></label><input type="text" id="objet" name="objet" placeholder="Objet" tabindex="3" />

				<label for="message"></label><textarea id="message" name="message" placeholder="Message" tabindex="4" cols="30" rows="8"></textarea>


				<div class="bouton">

					<button type="submit" name="envoi">Envoyer</button>
					<button type="reset" name="button">Annuler</button>

				</div>

			</form>

		</section>

	</div>

</section>
