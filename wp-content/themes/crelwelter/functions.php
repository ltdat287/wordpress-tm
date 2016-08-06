<?php
/**
 * DLT Crelwelter functions and definitions
 *
 * @package DLT Crelwelter
 */

if ( ! function_exists( 'dlt_crelwelter_setup' ) ) :

function dlt_crelwelter_setup() {
	load_theme_textdomain( 'crelwelter', get_template_directory() . '/languages' );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'crelwelter' ),
	));
}

endif; // dlt_crelwelter_setup
add_action( 'after_setup_theme', 'dlt_crelwelter_setup' );

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

/**
@ Tạo hàm phân trang cho index, archive.
@ Hàm này sẽ hiển thị liên kết phân trang theo dạng chữ: Newer Posts & Older Posts
@ dlt_pagination()
**/
if ( ! function_exists( 'dlt_pagination' ) ) {
  function dlt_pagination() {
    /*
     * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
     */
    global $wp_query;
    $total = $wp_query->max_num_pages;
    $big = 999999999; // need an unlikely integer
    if( $total > 1 )  {
       if( !$current_page = get_query_var('paged') )
         $current_page = 1;
       if( get_option('permalink_structure') ) {
         $format = 'page/%#%/';
       } else {
         $format = '&paged=%#%';
       }
      $pages =  paginate_links(array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => $format,
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $total,
        'mid_size'  => 2,
        'type'      => 'array',
        'prev_text' => '<span aria-hidden="true">&laquo;</span>',
        'next_text' => '<span aria-hidden="true">&raquo;</span>',
       ) );
      if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul>';
        }
    }
  }
}

/*
 * Thêm chữ Read More vào excerpt
 */
function dlt_readmore() {
  return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'datlt') . '</a>';
}
add_filter( 'excerpt_more', 'dlt_readmore' );

/**
 * Catch first image of list post
 * @return string src image
 */
function catch_that_first_image() {
  global $post, $posts;
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = ( $output ) ? $matches[1][0] : '';

  if(empty($first_img)) {
    $first_img = get_template_directory_uri() . "/images/imgnew.jpg";
  }
  return $first_img;
}

/**
 * Add attribute for link paginate the_next_previous_link()
 */
add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');

function next_posts_link_attributes() {
    return 'aria-label="Next"';
}
function previous_posts_link_attributes() {
    return 'aria-label="Previous"';
}

/**
 * Custom breadcrumbs by datlt
 */
function dlt_breadcumbs() {
  global $post;

  $wrap_before = '<div class="breadcrumb-page">';
  $wrap_after  = '</div> <!-- end breadcrumb-page -->';
  $before      = '<ol class="breadcrumb">';
  $after       = '</ol><!--end breadcrumb-->';

  $home_link = home_url('/');
  $home_text = 'Trang chủ';

  $content = '';

  if ( ! is_home() || ! is_front_page() ) {
    $content = '<li><a href="' . $home_link . '">' . $home_text . '</a></li>';
    if ( is_page() ) {
      $content .= '<li class="active"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
    } elseif ( is_single() ) {
      $category_name = '';
      foreach((get_the_category()) as $category) { $category_name = $category->cat_name; }
      $page = get_page_by_title( $category_name );
      $page_link = get_page_link( $page->ID );

      if ( ! empty($page_link) && ! empty($category_name) ) {
        $content .= '<li><a href="' . $page_link . '">' . $category_name . '</a></li>';
      }

      $content .= '<li class="active"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
    }
  }

  echo $wrap_before . $before . $content . $after . $wrap_after;
}

/**
 * Add WooCommerce for themes
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
