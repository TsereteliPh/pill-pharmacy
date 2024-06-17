</main>

<footer class="footer">
	<div class="container footer__container">
		<a href="<?php echo bloginfo( 'url' ); ?>" class="footer__logo" aria-label="Логотип Аптечной сети Таблетка"></a>
	</div>

	<div class="footer__links">
		<div class="container footer__links-container">
			<a href="<?php echo get_privacy_policy_url(); ?>" class="footer__links-policy">Политика конфиденциальности</a>

			<div class="footer__links-rights">Все права защищены <?php echo date( 'Y' ); ?></div>
		</div>
	</div>
</footer>

<?php get_template_part('layouts/partials/modals'); ?>

<?php wp_footer(); ?>

</body>
</html>
