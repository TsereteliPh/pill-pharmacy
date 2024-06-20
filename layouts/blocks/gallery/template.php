<section class="gallery">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'gallery__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$gallery = get_sub_field( 'gallery' );
			if ( $gallery ) :
				?>

				<div class="gallery__box">
					<?php foreach ( $gallery as $photo ) : ?>
						<a href="<?php echo $photo['url']; ?>" class="gallery__link" data-fancybox="gallery-<?php echo $args['block_id']; ?>">
							<?php echo wp_get_attachment_image( $photo['id'], 'large', false ); ?>
						</a>
					<?php endforeach; ?>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
