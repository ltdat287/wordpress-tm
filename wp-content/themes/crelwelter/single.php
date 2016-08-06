      <?php get_header(); ?>
      
      <?php dlt_breadcumbs(); ?>

      <div class="content-catogery">
        <div class="col-sm-3">
         <?php get_sidebar(); ?>
        </div>
        <div class="col-sm-9">
          <div class="detail-new">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h3 class="name-tittle"><?php the_title(); ?></h3>
            <div class="content-new">
              <?php the_content(); ?>
            </div>

          <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
          <?php endif; ?>

          </div>
          <br class="space"/>
        </div>
      <br class="space"/>
      </div> <!-- end content-catogery -->
      <?php get_footer(); ?>