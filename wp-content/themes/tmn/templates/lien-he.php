<?php
/*
 Template Name: Lien he
 */

    get_header(); ?>

    <section class="page-header bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-header-4.jpg)">
        <div class="container">
            <header class="section-header border-left">
                <?php the_breadcrumb(); ?>
                <h1>Liên hệ với chúng tôi</h1>
            </header>
        </div>
    </section>

    
    <section class="content-block">
       <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                   <div class=" block-title no-mar s-title">
                        <span class="small-title">Mọi yêu cầu giải đáp thắc mắc liên quan đến dịch vụ hoặc đề nghị hợp tác, xin vui lòng liên hệ hotline <b>1900 636486</b> 24/7 hoặc gửi tin nhắn cho chúng tôi: </span>
                    </div>

                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="contact-form">
                        <form action="<?php the_permalink(); ?>" method="POST" role="form">

                            <?php 
                                $input = $_POST;

                                $responese = apply_filters( 'tmn_contact_email', $input );

                                if ( isset($responese) ) { echo $responese; }
                             ?>

                            <div class="form-group">
                                <input type="text" name="message_name" class="form-control form-true" placeholder="Họ & tên">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="message_email" class="form-control form-true" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="text" name="message_title" class="form-control form-true" placeholder="Tiêu đề">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control form-true" name="message_text" rows="2" placeholder="Nội dung"></textarea>
                            </div>

                            <div class="text-center">
                            <button name="submit" type="submit" class="btn btn-true btn-orange">Gửi nội dung</button>
                            </div>
                        </form>

                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="contact-info">
                        <h4>Công ty cổ phần 1PAY (1Pay Joint Stock Company)</h4>
                        <ul>
                            <li><i class="icon-location-pin icons"></i><span>Trụ sở chính: Số 4, ngõ 151B, Đường Yên Lãng, Quận Đống Đa, Hà Nội.</span></li>
                            <li><i class="icon-location-pin icons"></i><span>VP đại diện Tp.HCM: Số 927/1, Đường Cách Mạng Tháng 8, Quận Tân Bình, Hồ Chí Minh.</span></li>
                            
                            <li class="">
                                <div class="contact-i-line"></div>
                            </li>
                            <li><i class="icon-info icons"></i><span>MST: 0106086776</span></li>
                            <li class="">
                                <div class="contact-i-line"></div>
                            </li>
                            <li><i class="icon-phone icons"></i><a href="tel:0469541235">(+84) 4 3640 8774</a></li>
                            <li class="">
                                <div class="contact-i-line"></div>
                            </li>
                            <li><i class="icon-envelope icons"></i><a href="mailto:info@truemoney.com.vn">info@truemoney.com.vn</a></li>
                            <li class="">
                                <div class="contact-i-line"></div>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>

                
                



            </div>
        </div>
    </section>
    
    <section>
        <div class="contact-map">
            <div id="map"></div>
        </div>
        <div id="capture"></div>

    </section>
    
    <?php get_footer(); ?>

    <script type="text/javascript">

      function initMap() {
        var myLatLng = {lat: 21.013140, lng: 105.817102};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: ''
        });
      }

    </script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAvPmuoVZG_heVw76Db-H3nWHp6nS7A6w&callback=initMap"></script>

</body>

</html>