<section class="achievements">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'achievements__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="achievements__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>
	</div>

	<?php
		$achievements = get_sub_field( 'achievements' );
		if ( $achievements ) :
			?>

			<div class="achievements__box">
				<div class="container">
					<ul class="reset-list achievements__list">
						<?php foreach ( $achievements as $achievement ) : ?>
							<li class="achievements__item">
								<?php if ( $achievement['label'] ) : ?>
									<div class="achievements__item-label"><?php echo $achievement['label']; ?></div>
								<?php endif; ?>

								<?php if ( $achievement['text'] ) : ?>
									<div class="achievements__item-text"><?php echo $achievement['text']; ?></div>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>

			<?php
		endif;
	?>
</section>
