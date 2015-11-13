<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Вывести здесь набор наиболее популярных функций при создании записи WP -->
	<?php the_title(); ?>
	<?php the_post_thumbnail(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
	<?php custom_pagination(); ?>
<?php else: ?>
	<?php get_template_part('404'); ?>
<?php endif; ?>

