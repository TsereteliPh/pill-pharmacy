<section class="functionality-slider">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'functionality-slider__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$slider = get_sub_field( 'slider' );
			if ( $slider ) :
				?>

				<div class="functionality-slider__slider swiper">
					<ul class="reset-list functionality-slider__list swiper-wrapper">
						<?php foreach ( $slider as $slide ) : ?>
							<li class="functionality-slider__item swiper-slide">
								<?php if ( $slide['label'] ) : ?>
									<div class="functionality-slider__item-label"><?php echo $slide['label']; ?></div>
								<?php endif; ?>

								<?php if ( $slide['text'] ) : ?>
									<div class="functionality-slider__item-text"><?php echo $slide['text']; ?></div>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<div class="slider-controls functionality-slider__controls">
						<div class="slider-controls__prev functionality-slider__prev">
							<svg width="29" height="19"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-left"></use></svg>
						</div>

						<div class="slider-controls__pagination functionality-slider__pagination"></div>

						<div class="slider-controls__next functionality-slider__next">
							<svg width="29" height="19"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-right"></use></svg>
						</div>
					</div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
