<div class="modal modal--success" id="success">
	<div class="modal__info">
		<div class="modal__title">Спасибо за заявку!</div>

		<div class="modal__text">Мы получили вашу заявку и успешно её обработали! Наши специалисты <span>свяжутся с вами в ближайшее время.</span></div>
	</div>
</div>

<div class="modal modal--callback" id="callback">
	<div class="modal__wrapper">
		<div class="modal__info">
			<div class="modal__title">Свяжитесь с нами</div>

			<div class="modal__text">Получите бесплатную консультацию от эксперта в аптечном бизнесе <span>прямо сейчас</span></div>
		</div>

		<form method="POST" class="modal__form" name="Связаться">
			<input type="text" class="input modal__input" name="client_name" placeholder="Имя" required>

			<input type="tel" class="input modal__input" name="client_tel" placeholder="Телефон" required>

			<input type="text" class="input modal__input" name="client_message" placeholder="Текст" required>

			<button class="btn modal__submit" type="submit">Отправить</button>

			<div class="modal__policy">
				Нажимая на кнопку вы подтверждаете условия
				<a href="<?php echo get_privacy_policy_url(); ?>">кофиденциальности</a>
			</div>

			<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

			<?php wp_nonce_field( 'Связаться', 'modal_callback_nonce' ); ?>
		</form>
	</div>
</div>
