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
        <?php 
          $args = array(
            'number' => 5,
            'orderby' => 'city',
            'order' => 'ASC'
          );
          $venues = eo_get_venues( $args );

          $arr_venues = array();

          foreach ($venues as $venue) {
            $arr_venues[$venue->term_id] = $venue->name;
          }
        ?>

        <?php while ( have_posts() ) : the_post(); ?>
          <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <div class="detail-block">

              <div class="agent-map">
                <?php echo eo_get_venue_map( array_keys($arr_venues), array( 'zoom' => 16, 'height' => '400px' ) ); ?>
              </div>
              <div id="capture"></div>
              <div class="agent-search"><form class="form-inline row">
                <div class="col-sm-4"><input id="" class="form-control form-true" type="text" placeholder="Tỉnh / thành phố..." /></div>
                <div class="col-sm-4"><input id="" class="form-control form-true" type="text" placeholder="Quận / huyện..." /></div>
                <div class="col-sm-4"><a class="btn btn-orange btn-true">Tìm kiếm</a></div>
              </form></div>
              <div class="agent-list"><span class="o-text f-w-600">Tìm thấy <?php echo count($arr_venues); ?> điểm giao dịch</span>
                <div class="line"></div>
                <div class="agent-info">

                  <?php 
                  $i = 0;
                  foreach ($arr_venues as $key => $value) {
                    $i++;

                    $address_details = eo_get_venue_address($key);
                  ?>

                  <ul class="" <?php echo ( ($i % 2 != 0) ? 'style="background: #f2f2f2;"' : '' ); ?>>
                    <li>
                      <h4 class="f-w-600"><?php echo $value ?></h4>
                    </li>
                    <li><i class="icon-location-pin icons"></i><b>Địa chỉ:</b> <?php echo $address_details['address'] . ' ,' . $address_details['state'] ?></li>
                    <li><i class="icon-phone icons"></i><b>Điện thoại:</b> 0904829003</li>
                  </ul>

                  <?php 
                  }
                  ?>
                  
                </div>
              </div>

            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>

</body>

</html>