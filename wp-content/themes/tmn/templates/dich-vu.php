<?php
/*
 Template Name: Dich vu
 */

    get_header(); ?>

    <section class="page-header bg-img" style="background-color: #333;">
        <div class="container">
            <header class="section-header border-left">
                <?php the_breadcrumb(); ?>
                <h1>Dịch vụ của chúng tôi</h1>
            </header>
        </div>
    </section>

    <?php 
        $args = array(
            'posts_per_page' => 4,
            'cat'            => 5,
            'post_status'    => 'publish',
            'orderby'        => 'ID',
            'order'          => 'asc'
        );
        $i = 0;

        $posts = get_posts( $args );
        foreach ($posts as $post) {
            $i += 1;
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            $odd = ( $i % 2 == 0 ) ? false : true;

            switch ($i) {
                case 1:
                    $class = 'class="services-infos"';
                    break;

                case 2:
                    $class = 'class="services-infos white-block" style="background: #f6841f;"';
                    break;

                case 3:
                    $class = 'class="services-infos white-block" style="background: #333;"';
                    break;

                case 4:
                    $class = 'class="services-infos" style="background: #fafafa;"';
                    break;
                
                default:
                    $class = 'class="services-infos"';
                    break;
            }

     ?>
    
    <section <?php echo $class; ?>>
        <div class="image-column <?php echo ( $odd ) ? '' : 'hidden-lg'; ?>" style="background-image:url(<?php echo $image[0]; ?>);">
            <div class="hidden-image"><img src="<?php echo $image[0]; ?>" alt=""></div>
        </div>

        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 <?php echo ( ($odd) ? 'right-column' : 'left-column' ); ?>">
                    <div class="inner-box">
                        <div class="ser-d-info">
                            <div class="block-title no-mar">
                                <h2 class="big-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="title-line"></div>
                                <p class="small-text"><?php echo get_post_meta( $post->ID, 'meta_service', true ); ?></p>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>

        <?php if ( ! $odd ) { ?>   

        <div class="image-column image-c-left hidden-xs hidden-sm hidden-md" style="background-image:url(<?php echo $image[0]; ?>);">
            <div class="hidden-image"><img src="<?php echo $image[0]; ?>" alt=""></div>
        </div>

        <?php } ?>

    </section>

    <?php 
        }
     ?>
    
    <section class="content-block">
       <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="owl-partner">
          
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/1.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/2.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/3.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/4.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/5.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/6.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/7.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/8.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/9.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/10.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/11.jpg"></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/12.jpg"></div>

                    </div>
                </div>

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