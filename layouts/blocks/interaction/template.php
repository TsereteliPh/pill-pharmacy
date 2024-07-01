<section class="interaction">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'interaction__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="interaction__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>
	</div>

	<?php
		$interactions = get_sub_field( 'interactions' );
		if ( $interactions ) :
			?>

			<div class="interaction__box">
				<div class="interaction__start"><?php the_sub_field( 'start' ); ?></div>

				<ul class="reset-list interaction__list">
					<?php foreach ( $interactions as $interaction ) : ?>
						<li class="interaction__item">
							<div class="interaction__item-icon-wrapper">
								<div class="interaction__item-icon">
									<?php echo wp_get_attachment_image( $interaction['icon'], 'medium', false ); ?>
								</div>
							</div>

							<div class="interaction__item-text"><?php echo $interaction['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<div class="interaction__end"><?php the_sub_field( 'end' ); ?></div>
			</div>

			<?php
		endif;
	?>
	</div>
</section>
