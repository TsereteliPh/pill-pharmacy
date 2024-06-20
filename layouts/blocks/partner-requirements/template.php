<section class="partner-requirements">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'partner-requirements__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="partner-requirements__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$requirements = get_sub_field( 'requirements' );
			if ( $requirements ) :
				?>

				<ul class="reset-list partner-requirements__list">
					<?php foreach ( $requirements as $requirement ) : ?>
						<li class="partner-requirements__item">
							<?php if ( $requirement['icon'] ) : ?>
								<div class="partner-requirements__item-icon"><?php echo wp_get_attachment_image( $requirement['icon'], 'medium', false ); ?></div>
							<?php endif; ?>

							<?php if ( $requirement['text'] ) : ?>
								<div class="partner-requirements__item-text"><?php echo $requirement['text']; ?></div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
