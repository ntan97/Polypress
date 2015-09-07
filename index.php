<?php get_header(); ?>
  <div class="content fit">
    <paper-card>
      <div class="card-content" heading="<?php the_title(); ?>">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      		the_content(); ?>
      	<?php endwhile; ?>
      	<!-- post navigation -->
      	<?php else: ?>
      	<!-- no posts found -->
      	<?php endif; ?>

        <paper-button raised><iron-icon style="margin-right: 20px;" icon="create"></iron-icon><?php edit_post_link('Edit', '', ''); ?></paper-button>
      </div>
    </paper-card>
  </div>
<?php get_footer(); ?>
