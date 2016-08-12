    <?php get_header(); ?>

    <section class="page-header bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-header-3.jpg)">
        <div class="container">
            <header class="section-header border-left">
                <?php the_breadcrumb(); ?>
                <h1><?php the_title(); ?></h1>
            </header>
        </div>
    </section>

    <section class="content-block">
       <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="left-nav">
                        
                        <?php get_sidebar(); ?>
                        
                    </div>
                </div>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                        <div class="detail-block">
                            
                            <?php the_content(); ?>

                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
    
    <?php get_footer(); ?>

</body>

</html>