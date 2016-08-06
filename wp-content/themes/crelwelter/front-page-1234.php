      <?php get_header(); ?>
      <div class="breadcrumb-page">
        <ol class="breadcrumb">
          <li><a href="#">Trang chủ</a></li>
          <li class="active"><a href="#">Giới thiệu</a></li>
        </ol><!--end breadcrumb-->
      </div>
      <div class="content-catogery">
        <div class="col-sm-3">
          <?php get_sidebar(); ?>
        </div>
        <div class="content-catogery">
        <div class="col-sm-3">
         <?php get_sidebar(); ?>
        </div>
        
        <div class="col-sm-9">
          <div class="new">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
            <div class="list-new">
              <a href="<?php the_permalink(); ?>" ><img src="images/imgnew.jpg" class="imgstyle"> </a>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
              <p><?php the_excerpt(); ?></p>

            <?php endwhile; else : ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            </div>
            <div class="pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>

            </div><!--pagination -->
          </div>
          <br class="space"/>
        </div>
      <br class="space"/>
      </div> <!-- end content-catogery -->
      <?php get_footer(); ?>