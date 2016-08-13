<footer class="footer-block white-block">
		<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<h5 class="for-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-true-w.png" alt="logo"></h5>
				<p>TrueMoney Việt Nam là một sản phẩm của Công ty CP 1Pay và sự hợp tác giữa Công ty TNHH TrueMoney Thái Lan và Công ty CP MOG Việt Nam.</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<h5>Liên kết</h5>
				<?php 
				wp_nav_menu(array(
					'theme_location' => 'secondary',
				));
				 ?>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-lg-3">
				<h5>Liên hệ</h5>
				<p class="for-contact">
					A: mTower – Số 4 Ngõ 151, Yên Lãng, 
					Đống Đa, Hà Nội</br>
					T: (+84) 4 3640 8774</br>
					E: info@truemoney.com.vn</br>
				</p>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-3">
				<h5>Đăng ký nhận tin</h5>
				<p>Điền email của bạn tại đây để nhận các thông tin mới nhất từ TrueMoney </p>
				<form class="form-alt">
					
					<div id="error_email" style="display:none;" class="alert alert-danger" role="alert">Địa chỉ email không hợp lệ, bạn vui lòng gửi lại!</div>
					
					<div class="form-group">
						<input id="email_input" type="text" class="form-control for-form form-true" placeholder="Điền email của bạn...">
					</div>
					<div class="form-group">
						<button onclick="send_email()" type="button" class="btn btn-true btn-orange btn-f-w" data-toggle="modal">
							Đăng ký ngay&nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
						</button>
					</div>
				</form>
			</div>
		
		</div>

	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<p class="text-xs-center text-sm-left">© True Money 2016. All rights reserved. In partnership with MOG</p>
				</div>

				<div class="col-xs-12 col-sm-6">
					<div role="presentation" class="dropup flag-bottom pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag/vn.png" alt="">&nbsp; Việt Nam <span class="caret"></span> </a>
					   
						<ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag/id.png" alt="">&nbsp; Indonesia</a></li>
							<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag/th.png" alt="">&nbsp; Thailand</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-vertical-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body noti-block">
                    <h4 class="text-center" style="color: #f6841f !important;">Cám ơn chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!</h4>
                    <div></div>
                    <p style="color:#000 !important;">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit commodi ad recusandae non magnam, porro facilis eaque adipisci? Totam praesentium dolor veritatis doloremque officiis quo iure nulla reiciendis iste maiores!"
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
    
    <script type="text/javascript">
	    (function($) {

            $("#owl-news").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                itemsCustom: [
            [0, 1],
            [480, 2],
            [768, 3],
            [1600, 3]
          ],

            });

	    })(jQuery);
    </script>
	<script type="text/javascript">
	  window.intercomSettings = {
		app_id: "t1w6iozt"
	  };
	</script>
<script type="text/javascript">(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/m9h6682n';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>