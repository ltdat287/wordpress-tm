<?php
/*
 Template Name: Tuyen dung
 */

    get_header(); ?>

    <section class="page-header bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-header-3.jpg)">
        <div class="container">
            <header class="section-header border-left">
                <?php the_breadcrumb(); ?>
                <h1>Thông tin tuyển dụng</h1>
            </header>
        </div>
    </section>
<?php while( have_posts() ) : the_post(); ?>
    <section class="content-block">
       <div class="container">
                        
                        <?php the_content(); ?>
                        
                <!-- <div class="pag-block">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">&laquo;
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">&raquo;
                      </a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div> -->
        </div>
    </section>
<?php endwhile; ?>

    <?php get_footer(); ?>

</body>

</html>