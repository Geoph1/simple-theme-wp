<?php /* Template Name: Пользовательский шаблон */
get_header(); ?>

<div class="container">
	<div class="row">

		<?php $wp_query = new WP_Query ( array( 'category_name' => 'slug', 'posts_per_page' => $paged ) ); ?>
		
		<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<?php the_content(''); ?>
		<?php endwhile; ?>
			<?php custom_pagination(); ?>
		<?php else: ?>
			<?php get_template_part( '404' ); ?>
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>