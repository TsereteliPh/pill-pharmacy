<?php
	$welcome = get_field( 'welcome' );
	if ( $welcome ) :
		?>

		<section class="welcome">
			<div class="container">
				<div class="welcome__content">
					<?php if ( $welcome['title'] ) : ?>
						<h1 class="welcome__title">
							<?php echo $welcome['title']['text']; ?>
							<span><?php echo $welcome['title']['highlighted']; ?></span>
						</h1>
					<?php endif; ?>

					<button class="btn welcome__btn" type="button" data-fancybox data-src="#callback">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
				</div>
			</div>
		</section>

		<?php
	endif;
?>
