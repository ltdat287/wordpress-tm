    <?php get_header(); ?>

    <section class="page-header bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-header-3.jpg)">
        <div class="container">
            <header class="section-header border-left">
                <?php the_breadcrumb(); ?>
                <h1>Tin tức mới nhất</h1>
            </header>
        </div>
    </section>

    <section class="content-block">
       <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="news-menu">
                        <div class="left-n-menu pull-left">
                            <ul class="">
                                <li><a class="active" href="tin-tuc.html">Tin tức - Sự kiện</a></li>
                                <li><a href="khuyen-mai.html">Khuyến mãi</a></li>
                                <li><a href="hinh-anh-video.html">Hình ảnh - video</a></li>
                            </ul>
                        </div>
                        
                        <div class="right-n-menu">
                            <div class="news-search">
                                <input type="text" class="form-control form-true" id="" placeholder="Tìm kiếm ...">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>

            <?php 
                while( have_posts() ) : the_post(); 
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            ?>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="block-detail">
                        <h4 class="block-d-title"><?php the_title(); ?></h4>
                        
                        <div class="line"></div>
                        <p class="block-d-des"><?php the_excerpt(); ?></p>
                        <div class="block-d-img">
                            <img src="<?php echo $image[0]; ?>" alt="">
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php display_related_posts_via_categories(); ?>
                </div>
            </div>

        </div>
    </section>
    
    <?php get_footer(); ?>

</body>

</html>