<section class="why-us">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'why-us__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="why-us__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$advantages = get_sub_field( 'advantages' );
			if ( $advantages ) :
				?>

				<ul class="reset-list plus-ul why-us__list">
					<?php foreach ( $advantages as $advantage ) : ?>
						<li class="why-us__item"><?php echo $advantage['text']; ?></li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
