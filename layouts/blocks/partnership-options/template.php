<section class="partnership-options">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'partnership-options__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="partnership-options__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$options = get_sub_field( 'options' );
			if ( $options ) :
				?>

				<ul class="reset-list partnership-options__list">
					<?php foreach ( $options as $option ) : ?>
						<li class="partnership-options__item">
							<?php if ( $option['label'] ) : ?>
								<div class="partnership-options__item-label"><?php echo $option['label']; ?></div>
							<?php endif; ?>

							<?php if ( $option['text'] ) : ?>
								<div class="partnership-options__item-text"><?php echo $option['text']; ?></div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>

		<button class="btn partnership-options__btn" type="button" data-fancybox data-src="#callback">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
	</div>
</section>
