<?php
    get_header(); ?>

    <section class="page-header bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-header-3.jpg)">
        <div class="container">
            <header class="section-header border-left">
                <?php the_breadcrumb(); ?>
                <h1>Thông tin công ty</h1>
            </header>
        </div>
    </section>

<?php while ( have_posts() ) : the_post() ?>
    <section class="content-block">
       <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="detail-block">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
<?php endwhile; ?>
    
    <?php get_footer(); ?>

</body>

</html>