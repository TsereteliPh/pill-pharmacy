<section class="faq">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'faq__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$faq = get_sub_field( 'faq' );
			if ( $faq ) :
				?>

					<ul class="reset-list js-accordion faq__list">
						<?php foreach ( $faq as $item ) : ?>
							<li class="faq__item">
								<button class="faq__item-button" type="button">
									<?php echo $item['question']; ?>

									<span class="faq__item-icon"></span>
								</button>

								<div class="faq__item-answer-wrapper">
									<div class="faq__item-answer"><?php echo $item['answer']; ?></div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>

				<?php
			endif;
		?>
	</div>
</section>
