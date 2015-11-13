<?php /* Template Name: Контакты */
get_header(); ?>

<div class="container">
	<div class="row">

		<div class="col-md-6">
			<div class="contact">
				<p class="adress"><?php echo of_get_option('adress'); ?></p>
				<p class="phone"><?php echo of_get_option('phone'); ?></p>
				<p class="mail"><?php echo of_get_option('mail'); ?></p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="contact-form">
				<?php echo do_shortcode( '[contact-form-7 id="56" title="Контактная форма 1"]' ); ?>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>