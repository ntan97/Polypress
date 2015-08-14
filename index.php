<?php get_header(); ?>
  <div tool><?php the_title(); ?></div>

  <paper-material elevation="1">
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  		the_content(); ?>
  	<?php endwhile; ?>
  	<!-- post navigation -->
  	<?php else: ?>
  	<!-- no posts found -->
  	<?php endif; ?>
  </paper-material>

<?php get_footer(); ?>
