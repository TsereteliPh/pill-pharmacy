<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$tel_ru = get_field( 'tel_ru', 'options' );
	$tel_kz = get_field( 'tel_kz', 'options' );
	$socials = get_field( 'socials', 'options' );
?>

<header class="header">
	<div class="header__container">
		<a href="<?php echo bloginfo( 'url' ); ?>" class="header__logo" aria-label="Логотип Аптечной сети Таблетка"></a>

		<?php if ( $tel_ru || $tel_kz || $socials ) : ?>
			<div class="header__callback callback">
				<?php if ( $socials ) : ?>
					<div class="callback__socials-wrapper">
						<div class="callback__socials-text">Связаться с нами:</div>

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

		<button class="btn btn--round header__modal" data-fancybox data-src="#callback">
			Связаться
			<svg width="20" height="20"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-phone"></use></svg>
		</button>

		<button class="header__burger" type="button">
			<span></span>
		</button>
	</div>

	<div class="header__drop">
		<?php wp_nav_menu( array(
			'theme_location' => 'menu_main',
			'container' => '',
			'menu_id' => 'menu-main',
			'menu_class' => 'reset-list header__menu'
		) ); ?>
	</div>
</header>

<main class="main">
	<?php if ( is_front_page() ) get_template_part( 'layouts/partials/welcome' ); ?>
