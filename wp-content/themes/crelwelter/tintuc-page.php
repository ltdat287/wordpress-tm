<?php
/* Template Name: Tintuc Page */
?>

      <?php get_header(); ?>
      
      <?php dlt_breadcumbs(); ?>

      <div class="content-catogery">
        <div class="col-sm-3">
         <?php get_sidebar(); ?>
        </div>
        
        <div class="col-sm-9">
          <div class="new">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
            <?php query_posts( array( 'category_name' => get_the_title(), 'post_status' => array( 'publish', 'future' ), 'posts_per_page' => 3, 'paged' => $paged ) ); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
            <div class="list-new">
              <a href="<?php the_permalink(); ?>" ><img src="<?php echo catch_that_first_image(); ?>" class="imgstyle"> </a>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
              <p><?php the_excerpt(); ?></p>
            </div>

            <?php endwhile; else : ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            <div class="pagination">
              <nav>
                <?php dlt_pagination(); ?>
                <!-- <ul class="pagination">
                  <li> -->
                    <?php //echo get_previous_posts_link('<span aria-hidden="true">&laquo;</span>'); ?>
                    <!-- <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a> -->
                  <!-- </li>
                  <li class="active"><a href="<?php //echo get_pagenum_link($paged); ?>"><?php //echo $paged; ?></a></li>
                  <li><a href="<?php //echo get_pagenum_link($paged+1); ?>"><?php //echo $paged+1; ?></a></li>
                  <li><a href="<?php //echo get_pagenum_link($paged+2); ?>"><?php //echo $paged+2; ?></a></li>
                  <li> -->
                    <?php //echo get_next_posts_link('<span aria-hidden="true">&raquo;</span>'); ?>
                    <!-- <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a> -->
                  <!-- </li>
                </ul> -->
              </nav>

            </div><!--pagination -->
          </div>
          <br class="space"/>
        </div>
      <br class="space"/>
      </div> <!-- end content-catogery -->
      <?php get_footer(); ?>