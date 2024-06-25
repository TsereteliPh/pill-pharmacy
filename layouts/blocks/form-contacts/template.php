<section class="form-contacts">
	<div class="container form-contacts__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'form-contacts__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<div class="form-contacts__content">
			<form method="POST" class="main-form form-contacts__form" name="Консультация">
				<div class="main-form__label">Позвоните в удобное время</div>

				<input type="text" class="input main-form__input" name="client_name" placeholder="Имя" required>

				<input type="tel" class="input main-form__input" name="client_tel" placeholder="Телефон" required>

				<button class="btn btn--round main-form__submit" type="submit">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>

				<div class="main-form__policy">
					Нажимая на кнопку вы подтверждаете условия
					<a href="<?php echo get_privacy_policy_url(); ?>">кофиденциальности</a>
				</div>

				<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

				<?php wp_nonce_field( 'Консультация', 'form-contacts-nonce' ); ?>
			</form>

			<?php
				$tel_ru = get_field( 'tel_ru', 'options' );
				$tel_kz = get_field( 'tel_kz', 'options' );
				$socials = get_field( 'socials', 'options' );

				if ( $tel_ru || $tel_kz || $socials ) :
					?>

					<div class="form-contacts__contacts">
						<?php if ( get_sub_field( 'contacts_text' ) ) : ?>
							<div class="form-contacts__contacts-text"><?php the_sub_field( 'contacts_text' ); ?></div>
						<?php endif; ?>

						<?php if ( $tel_ru || $tel_kz || $socials ) : ?>
							<div class="form-contacts__callback callback">
								<?php if ( $socials ) : ?>
									<div class="callback__socials-wrapper">
										<div class="callback__socials">
											<?php foreach ( $socials as $social ) : ?>
												<a href="<?php echo $social['link']; ?>" class="callback__socials-link">
													<svg width="35" height="35"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['social']; ?>"></use></svg>
												</a>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endif; ?>

								<?php if ( $tel_ru || $tel_kz ) : ?>
									<div class="callback__phones">
										<?php if ( $tel_ru ) : ?>
											<div class="callback__tel">
												<a href="<?php echo preg_replace( '/[^0-9,+]/', '', $tel_ru ); ?>" class="callback__tel-link"><?php echo $tel_ru; ?></a>

												<div class="callback__tel-text">(для связи в РФ)</div>
											</div>
										<?php endif; ?>

										<?php if ( $tel_kz ) : ?>
											<div class="callback__tel">
												<a href="<?php echo preg_replace( '/[^0-9,+]/', '', $tel_kz ); ?>" class="callback__tel-link"><?php echo $tel_kz; ?></a>

												<div class="callback__tel-text">(для связи в KZ)</div>
											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

					<?php
				endif;
			?>
		</div>
	</div>
</section>
