<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
     
    <link rel='stylesheet' id='my-theme' href='<?php echo get_template_directory_uri(); ?>/style.css' type='text/css' media='all' />
    <?php wp_head(); ?>
    <!--  -->
    <style>

    </style>

</head>

<body>
    <header class="navbar-wrapper navbar-top">
        <div class="">
			<div id="topbar-wrapper">
	
				<div class="container">
				<div class="row">
				
					<div class="col-md-8 col-sm-8 col-xs-12">
					
						<div class="topbar-left">
							<ul class="list-inline">
							<li><span class="topbar-label"><i class="fa fa fa-map-marker"></i></span><span class="topbar-hightlight">mTower – Số 4 Ngõ 151, Yên Lãng, Đống Đa, Hà Nội</span></li><li><span class="topbar-label"><i class="fa fa-phone"></i></span><span class="topbar-hightlight">1900 63 64 86</span></li><li><span class="topbar-label"><i class="fa  fa-clock-o"></i></span><span class="topbar-hightlight">Mon - Sat: 8:00 - 18:00</span></li>				</ul>
						</div>
						
					</div>
					
					<div class="col-md-4 col-sm-4 hidden-xs">
						
						<div class="topbar-right text-right">
							<div class="st-social"><ul class="list-inline"><li><a class="fa fa-facebook" href="#" title="Facebook" target="_blank"></a></li><li><a class="fa fa-twitter" href="#" title="Twitter" target="_blank"></a></li><li><a class="fa fa-google-plus" href="#" title="Google Plus" target="_blank"></a></li></ul></div>
							<div role="presentation" class="dropdown flag-bottom pull-right">
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
				
			</div>
			<div class="menu-vic">
				<nav class="navbar true-navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="ti-align-justify"></span>
						</button>
						<a class="navbar-brand nav-logo" href="<?php echo site_url(); ?>">
							<img style="" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-true-w.png" alt="">
						</a>
					</div>

					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="/">Trang chủ</a></li>
							<li><a href="gioi-thieu.html">Giới thiệu</a></li>
							<li><a href="dich-vu.html">Dịch vụ</a></li>
							<li class="dropdown">
							   <a href="1.5agent.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Đại lý <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="active" href="tai-sao-chon-chung-toi.html">Giới thiệu chung</a></li>
									<li><a href="chinh-sach-va-dieu-khoan.html">Chính sách</a></li>
									<li><a href="diem-giao-dich.html">Tìm đại lý</a></li>
								</ul>
							</li>
							<li><a href="tin-tuc.html">Tin tức</a></li>
							<li><a href="lien-he.html">Liên hệ</a></li>
						</ul>
					</div>
				</nav> <!-- end nav-bar -->
			</div>
        </div>
    </header> <!-- end header -->
