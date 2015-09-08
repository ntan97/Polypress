<?php get_header(); ?>
  <div class="content fit">
    <paper-page>
      <div class="card-content" heading="<?php the_title(); ?>">
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
          <paper-button><iron-icon style="margin-right: 20px;" icon="create"></iron-icon><?php edit_post_link('Edit', '', ''); ?></paper-button>
        </div>
      <?php } ?>
    </paper-page>
  </div>
<?php get_footer(); ?>
