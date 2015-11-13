<?php get_header(); ?>

<div class="container">
	<div class="row">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
			<?php get_template_part( '404' ); ?>
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>