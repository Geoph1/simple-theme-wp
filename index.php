<?php get_header(); ?>

<div class="container">
	<div class="row">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>