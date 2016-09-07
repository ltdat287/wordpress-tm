<?php
function tmn_enqueue() {
  wp_enqueue_script('jquery'); 
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ) );
  wp_enqueue_script( 'owl-carousel',get_template_directory_uri() . '/assets/vendo/owl-carousel/owl.carousel.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/vendo/parallax/parallax.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ) );
}

add_action( 'init', 'tmn_enqueue' );

// Add more size for image to display home-slider
add_theme_support( 'post-thumbnails' );
add_image_size( 'home-slider', '1298', '552', array( "1", "") );

function register_tmn_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary', 'tmn' ),
			'secondary' => __( 'Secondary', 'tmn' )
		)
	);
} 
add_action( 'init', 'register_tmn_menus' );

class BS3_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. It is possible to set the
	 * max depth to include all depths, see walk() method.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		$id_field = $this->db_fields['id'];
 
		if ( isset( $args[0] ) && is_object( $args[0] ) )
		{
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
 
		}
 
		return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
 
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( is_object($args) && !empty($args->has_children) )
		{
			$link_after = $args->link_after;
			$args->link_after = ' <b class="caret"></b>';
		}
 
		parent::start_el($output, $item, $depth, $args, $id);
 
		if ( is_object($args) && !empty($args->has_children) )
			$args->link_after = $link_after;
	}
 
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu list-unstyled\">\n";
	}	
}

add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
	if ( $args->has_children )
	{
		$atts['data-toggle'] = 'dropdown';
		$atts['class'] = 'dropdown-toggle';
	}
 
	return $atts;
}, 10, 3);

/**
 * Create bread_crumb for page
 * @return html
 */
function the_breadcrumb() {
                echo '<ol class="breadcrumb color-alt">';
        if (!is_home()) {
                echo '<li><a href="';
                echo get_option('home');
                echo '">';
                echo 'Trang chủ';
                echo "</a></li>";
                if (is_category() || is_single()) {
                        echo '<li>';
                        the_category(' </li><li> ');
                        if (is_single()) {
                                echo "</li><li>";
                                the_title();
                                echo '</li>';
                        }
                } elseif (is_page()) {
                        echo '<li>';
                        echo the_title();
                        echo '</li>';
                }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
        elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
        echo '</ol>';
}

/**
 * Auto add class active for menu-item
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     
     return $classes;
}

add_filter( 'tmn_contact_email', 'tmn_send_email_contact' );
function tmn_send_email_contact( $input ) {

	$response = '';

	if ( isset($input) && isset($input['submit']) ) {

		//response messages
		$missing_content = "Please supply all information.";
		$email_invalid   = "Email Address Invalid.";
		$message_unsent  = "Message was not sent. Try Again.";
		$message_sent    = "Thanks! Your message has been sent.";
		 
		//user posted variables
		$name  = $input['message_name'];
		$email = $input['message_email'];
		$title = $input['message_title'];
		$text  = $input['message_text'];
		 
		//php mailer variables
		$to = get_option('admin_email');
		$subject = "Someone sent a message from ".get_bloginfo('name');
		$headers = 'From: '. $email . "\r\n" .
		  'Reply-To: ' . $email . "\r\n";

		if ( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$response = tmn_form_generate_response( 'error', $email_invalid );
		} else {

			if(empty($name) || empty($title) || empty($text)){
				$response = tmn_form_generate_response("error", $missing_content);
			} else {
				$sent = wp_mail($to, $subject, strip_tags($text), $headers);

				if ($sent) $response = tmn_form_generate_response("success", $message_sent); //message sent!
				else $response = tmn_form_generate_response("error", $message_unsent); //message wasn't sent
			}
		}
	}

	return $response;
}

function tmn_form_generate_response($type, $message){

	if($type == "success") $response = "<div class='alert alert-success'><strong>Success!</strong> {$message}</div>";
	else $response = "<div class='alert alert-danger'> <strong>Error!</strong> {$message}</div>";

	return $response;
}

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', 'tmn_switch_category_post');

function tmn_switch_category_post($the_template) {
	foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }

	return $the_template;
}

// Add function for debug
function dd($code) {
	echo '<pre>';
	print_r($code);
	echo '</pre>';
	die;
}

// Change icon-map markers Google map used wp-events-oranginze
add_filter( 'eventorganiser_venue_marker', 'tmn_change_map_icon', 10, 2 );
function tmn_change_map_icon( $icon, $venue_id ){
       return 'http://cong.dk/demo/true-pin.png';
}
