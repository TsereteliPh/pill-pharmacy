<section class="partner-stories">
	<div class="container partner-stories__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'partner-stories__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$stories = get_sub_field( 'stories' );
			if ( $stories ) :
				?>

				<div class="partner-stories__box">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-plus.png" class="partner-stories__plus-element-1" alt="Иконка аптечного креста" width="80" height="80">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-plus.png" class="partner-stories__plus-element-2" alt="Иконка аптечного креста" width="80" height="80">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-plus.png" class="partner-stories__plus-element-3" alt="Иконка аптечного креста" width="80" height="80">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-plus.png" class="partner-stories__plus-element-4" alt="Иконка аптечного креста" width="80" height="80">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-plus.png" class="partner-stories__plus-element-5" alt="Иконка аптечного креста" width="80" height="80">

					<div class="partner-stories__slider swiper">
						<div class="partner-stories__label">Что о нас говорят</div>

						<ul class="reset-list partner-stories__list swiper-wrapper">
							<?php foreach ( $stories as $story ) : ?>
								<li class="partner-stories__item swiper-slide">
									<div class="partner-stories__item-info">
										<div class="partner-stories__item-photo"><?php echo wp_get_attachment_image( $story['img'] ? $story['img'] : 228, 'medium', false ); ?></div>

										<?php if ( $story['name'] ) : ?>
											<div class="partner-stories__item-name"><?php echo $story['name']; ?></div>
										<?php endif; ?>

										<?php if ( $story['city'] ) : ?>
											<div class="partner-stories__item-city"><?php echo $story['city']; ?></div>
										<?php endif; ?>
									</div>

									<?php if ( $story['text'] ) : ?>
										<div class="partner-stories__item-text"><?php echo $story['text']; ?></div>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<div class="slider-controls partner-stories__controls">
						<div class="slider-controls__prev partner-stories__prev">
							<svg width="29" height="19"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-left"></use></svg>
						</div>

						<div class="slider-controls__pagination partner-stories__pagination"></div>

						<div class="slider-controls__next partner-stories__next">
							<svg width="29" height="19"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-right"></use></svg>
						</div>
					</div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
