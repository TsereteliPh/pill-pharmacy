<section class="premises-requirements">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'premises-requirements__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="premises-requirements__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$requirements = get_sub_field( 'requirements' );
			if ( $requirements ) :
				?>

				<div class="premises-requirements__box">
					<ul class="reset-list premises-requirements__list">
						<?php foreach ( $requirements as $requirement ) : ?>
							<li class="premises-requirements__item"><?php echo $requirement['text']; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
