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

    <script type="text/javascript">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: {lat: 21.023885, lng: 105.823872}
        });

        setMarkers(map);
      }

      var beaches = [
        ['', 21.026098, 105.823153, 4],
        ['', 21.024135, 105.826758, 5],
        ['', 21.024656, 105.821544, 3],
        ['', 21.022743, 105.821780, 2],
        ['', 21.021742, 105.824312, 1]
      ];

      function setMarkers(map) {
        var image = {
          url: 'http://cong.dk/demo/true-pin.png',
          size: new google.maps.Size(32, 32),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(0, 32)
        };
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
          var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3]
          });
        }
      }
    </script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADrRXBDlNHM8QMVBQVxNHmsbwrj0esxSU&callback=initMap"></script>

</body>

</html>