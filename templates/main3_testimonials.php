	<section class="temoignages">

		<?php
		include('./php/controller.php');
		?>

		<div class="cd-testimonials-wrapper cd-container">

			<ul class="cd-testimonials">

				<?php
				if ($resultats) {
					// echo 'hey';

					foreach ($resultats as $value) {
						?>
						<li>
							<p>
								<?php echo $value['texte_temoignage']; ?>
							</p>

							<div class="cd-author">
								<img src="<?php echo $value['image_temoignage']; ?>" alt="Author image">

								<ul class="cd-author-info">

									<li><?php echo $value['nom_temoignage']; ?></li>

									<li><?php echo $value['status_temoignage']; ?></li>
								</ul>
							</div>
						</li>
						<?php
					}
				}
				?>
			</ul>
		</div>
	</section>
</section>
