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
        <div class="col-sm-9">
          <!-- <div class="detail-new"> -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

          <?php endwhile; ?>
          <?php //dlt_pagination(); ?>

           <!-- <div class="pagination">
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

          </div><!--pagination --> -->

          <?php else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>

<!--           </div> -->
          <br class="space"/>
        </div>
      <br class="space"/>
      </div> <!-- end content-catogery -->
      <?php get_footer(); ?>