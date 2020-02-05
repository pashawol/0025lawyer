<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */

?>

<footer class="footer block-with-lazy">
	<div class="container">
		<div class="footer__row row">
			<div class="col-sm-auto"><a class="footer__link" href="<?php echo the_field('политика_конфиденциальности', 'option'); ?>">Политика конфиденциальности</a>
			</div>
			<div class="col-sm-auto"><a class="footer__link" href="<?php echo the_field('обработка_персональных_данных', 'option'); ?>">Обработка персональных данных</a>
			</div>
		</div>
	</div>
</footer>
</div>
<div class="d-none">
<div class="form-wrap modal-win modal-form" id="modal-call">
		<div class="text-center">
			<!-- <div class="form-wrap__title form-wrap__title--js h3 ttu d-none		">Отправить </div> -->
			<p>Заполните заявку и&nbsp;мы&nbsp;с&nbsp;Вами свяжемся в&nbsp;самое ближайшее время</p>
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="7" title="Форма в модалке"]' ); ?>
</div>
    <!-- #modal-call-->
    <div class="form-wrap modal-win modal-form" id="modal-thanks">
        <div class="text-center">
            <div class="form-wrap__title">спасибо за обращение
            </div>
            <p class="mb-0">Мы&nbsp;свяжемся с&nbsp;Вами в&nbsp;ближайшее время.</p>
        </div>
    </div>
    <!-- #modal-thanks-->
</div>
<!-- modal-->
<div class="btn-top"></div>
<?php wp_footer(); ?>
 
</body>
</html>
