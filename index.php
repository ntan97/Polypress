  <?php get_header(); ?>
    <div class="horizontal layout vertical">
      <paper-card class="flex-4" heading="<?php the_title(); ?>">
        <div class="card-content">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        		the_content(); ?>
        	<?php endwhile; ?>
        	<!-- post navigation -->
        	<?php else: ?>
        	<!-- no posts found -->
        	<?php endif; ?>

        </div>
        <?php if (is_user_logged_in()) { ?>
          <div class="card-actions">
            <?php $post_type = get_post_type(); ?>
            <paper-button><?php edit_post_link('<iron-icon icon="create"></iron-icon> Edit '.$post_type.' ', '', ''); ?></paper-button>
          </div>
        <?php } ?>
      </paper-card>
    </div>
  <?php get_footer(); ?>
