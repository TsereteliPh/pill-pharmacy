<section class="main-list">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'main-list__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$list = get_sub_field( 'list' );
			if ( $list ) :
				?>

				<div class="main-list__box">
					<ul class="reset-list plus-ul main-list__list">
						<?php foreach ( $list as $item ) : ?>
							<li class="main-list__item"><?php echo $item['text']; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
