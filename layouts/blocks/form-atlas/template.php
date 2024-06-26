<section class="form-atlas">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'form-atlas__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="form-atlas__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>
	</div>

	<?php $link = get_sub_field( 'link' ); ?>

	<div class="form-atlas__box<?php echo $link ? ' form-atlas__box--person' : ''; ?>">
		<div class="container form-atlas__container">
			<?php
				$label = get_sub_field( 'form_title' );
				if ( $label ) :
					?>

					<div class="form-atlas__label">
						<?php echo $label['text']; ?>

						<span><?php echo $label['highlighted']; ?></span>
					</div>

					<?php
				endif;
			?>

			<div class="form-atlas__content">
				<div class="form-atlas__info">
					<?php if ( $link ) : ?>
						<a href="<?php echo $link['url']; ?>" class="form-atlas__link" target="<?php echo $link['target']; ?>">
							<div class="form-atlas__link-text">О системе ATLAS</div>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-youtube.png" alt="Иконка YouTube" width="125" height="88">
						</a>
					<?php endif; ?>

					<?php if ( get_sub_field( 'form_text' ) ) : ?>
						<div class="form-atlas__info-text"><?php the_sub_field( 'form_text' ); ?></div>
					<?php endif; ?>
				</div>

				<form method="POST" class="main-form form-atlas__form" name="Консультация">
					<div class="main-form__label">Позвоните в удобное время</div>

					<input type="text" class="input main-form__input" name="client_name" placeholder="Имя" required>

					<input type="tel" class="input main-form__input" name="client_tel" placeholder="Телефон" required>

					<button class="btn btn--round main-form__submit" type="submit">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>

					<div class="main-form__policy">
						Нажимая на кнопку вы подтверждаете условия
						<a href="<?php echo get_privacy_policy_url(); ?>">кофиденциальности</a>
					</div>

					<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

					<?php wp_nonce_field( 'Консультация', 'form-atlas-nonce' ); ?>
				</form>
			</div>
		</div>
	</div>
</section>
