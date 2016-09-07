    <?php get_header(); ?>

    <section class="slider-block">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> </li>
                
                    <li data-target="#carousel-example-generic" data-slide-to="1"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"> </li>

            </ol>
            <div class="carousel-inner">

            <?php 
            // Get all sticky posts, but only sticky posts
            $sticky = get_option( 'sticky_posts' ); 
            $args = array(
                'posts_per_page' => 3,
                'post__in' => $sticky
            );
            $i = 0;
            $postQuery = get_posts($args);
            foreach ( $postQuery as $post ) : setup_postdata($post);
                if ( has_post_thumbnail($post->ID) ) {
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'home-slider' );
                    $i++;
            ?>

                <div class="item <?php echo (($i == 1) ? 'active' : ''); ?>">
                    <div class="container">

                        <div class="carousel-caption">
                            <h1><?php the_title(); ?></h1>
                            <p><a class="btn btn-true" href="<?php the_permalink(); ?>" role="button">Tìm hiểu thêm <i class="fa fa-chevron-circle-right"></i></a></p>
                        </div>

                    </div>
                    <div class="slide-over hidden-sm hidden-md hidden-lg">

                    </div>

                    <img src="<?php echo $image[0]; ?>" alt="First slide" />
                </div>
            <?php 
                }
            endforeach;
             ?>
     
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </section>
    
    <section class="content-block">
        <div class="container">
            <div class="text-center">
                <div class="row block-title">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="big-title"><b>Dịch vụ</b></h2>
                        <div class="title-line"></div>
                        <span class="small-title">TrueMoney cung cấp các giải pháp thanh toán an toàn, nhanh chóng và tiện lợi </span>
                    </div>
                </div>
                <div class="row">

                    <?php 
                        $args = array(
                            'posts_per_page' => 4,
                            'cat'            => 5,
                        );
                        $posts = get_posts( $args );
                        foreach ($posts as $post) {
                     ?>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <a href="<?php the_permalink(); ?>">
                            <div class="ser-block text-center">

                                <div class="ser-b-icon">
                                    <img src="<?php echo get_template_directory_uri() . get_post_meta( $post->ID, 'icon', true ); ?>" alt="">
                                </div>
                                <div class="ser-b-info">
                                    <h4 class="ser-b-i-big"><?php the_title(); ?></h4>
                                    <p class="ser-b-i-sm"><?php the_excerpt(); ?></p>
                                </div>

                            </div>
                        </a>
                    </div>

                    <?php 
                        }
                     ?>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="block-btn">
                            <a class="btn btn-true" href="/dich-vu/" role="button">Tìm hiểu thêm<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>


    <section class="content-block white-block promo-bk">
            <div class="container">
                <div class="row block-title no-mar">
                    <div class="col-xs-12 col-sm-6">

                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h2 class="big-title">Chương trình<b> khuyến mãi</b></h2>
                        <div class="title-line"></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">

                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="promo-block">
                            <h4>TrueMoney Việt Nam ra mắt dịch vụ ví điện tử với các ưu đãi sau</h4>
                            <ul class="promo-list">
                                <li><i class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;</i>Miễn phí sử dụng thiết bị EDC đối với 1000 đại lý đầu tiên, không đặt cọc</li>
                                <li><i class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;</i>Hỗ trợ lắp đặt miễn phí biển quảng cáo cho đại lý</li>
                                <li><i class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;</i>Chiết khấu cao</li>
                            </ul>
                            <a class="btn" href="/khuyen-mai.html" role="button">Xem thêm <i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <section class="content-block">
        <div class="container">
            <div class="text-center">
                <div class="row block-title">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="big-title"><b>Tin tức</b></h2>
                        <div class="title-line"></div>
                        <span class="small-title">Cập nhật và chia sẻ các tin tức mới nhất về hoạt động của TrueMoney Việt Nam </span>
                    </div>
                </div>
                <div class="row">
                   <div id="owl-news">

                    <?php 
                        $newsposts = get_posts('cat=2&posts_per_page=3');foreach($newsposts as $post) :
                            setup_postdata($post); 
                    ?>
          
                      <div class="item">
                          <div class="new-block text-center">

                                <div class="new-b-img">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>" alt="">
                                </div>
                                <div class="new-b-info">
                                    <h4 class="new-b-i-big"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p class="new-b-i-sm"><?php the_excerpt();?></p>
                                </div>

                            </div>
                      </div>

                  <?php endforeach; ?>

                    </div>


                </div>
            </div>
        </div>

    </section>
    
    <?php get_footer(); ?>

</body>

</html>