<?php
/*
 Template Name: Tin tuc
 */

    get_header(); ?>

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
                                <li><a class="active" href="<?php the_permalink(); ?>">Tin tức - Sự kiện</a></li>
                                <li><a href="http://wp-tmn.local/khuyen-mai/">Khuyến mãi</a></li>
                                <!-- <li><a href="hinh-anh-video.html">Hình ảnh - video</a></li> -->
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
            
            <div class="row">

                <?php 
                    $args = array(
                        'posts_per_page' => -1,
                        'cat'            => 2,
                        'post_status'    => 'publish',
                        'orderby'        => 'ID',
                        'order'          => 'asc'
                    );
                    $i = 0;

                    $posts = get_posts( $args );
                    foreach ($posts as $post) {
                        $i += 1;
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="new-block">

                        <div class="new-b-img">
                           <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $image[0]; ?>" alt="">
                            </a>
                        </div>
                        <div class="new-b-info f-width">
                            <h4 class="new-b-i-big"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                           
                            <p class="new-b-i-sm"><?php the_excerpt(); ?></p>
                        </div>

                    </div>
                </div>

                <?php 
                    }
                 ?>
                
                <!-- 
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="text-center">
                        <a class="btn btn-true" href="#" role="button"><i class="icon-refresh icons"></i> &nbsp;Tải thêm</a>
                    </div>
                </div> -->


            </div>

        </div>
    </section>
     
    <?php get_footer(); ?>

    <script type="text/javascript">
        (function($) {

             $("#owl-partner").owlCarousel({
              autoPlay: 3000, //Set AutoPlay to 3 seconds
              itemsCustom : [
                [0, 1],
                [480, 2],
                [768, 3],
                [800, 4],
                [1400, 5],
              ],
              pagination : false,

          });

        })(jQuery);
    </script>

</body>

</html>