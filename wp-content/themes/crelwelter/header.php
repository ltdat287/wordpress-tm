<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/layout.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/reponsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.simpleGallery.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrap-page">
       <div id="top-page">
         <div class="top-in">
            <span class="phone">04 6269 1411</span>
            <div class="language">
              <select>
                <option value="en_US">Tiếng Anh</option>
                <option value="vn_US">Việt Nam</option>
              </select>
            </div>
            </div><!-- end .top-in-->
         </div>
       </div><!-- end .top-page-->
       <header>
         <div class="container">
          <div class="row">
              <div class="header-in">
                  <div class="col-sm-3">
                    <a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>

                  </div>
                  <div class="col-sm-9">
                    <div class="menu">
                      <div class="navbar-header navbar-brand">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div id="navbar" class="collapse navbar-collapse">
                        <?php wp_nav_menu( array('container' => false, 'depth' => 2, 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>', 'theme_location' => 'primary') ) ?>
                      </div><!-- /.nav-collapse  -->
                    </div><!--end menu -->
                  </div>
              </div>
          </div>
         </div><!-- end .container-->
       </header><!-- end header -->