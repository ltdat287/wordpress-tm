<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

$img_html = '';
$img_link = '';
$img_alt = '';
?>

	<?php
		if ( has_post_thumbnail() ) {
			$image_caption = get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_link    = wp_get_attachment_url( get_post_thumbnail_id() );
			$image         = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title'	=> get_the_title( get_post_thumbnail_id() )
			) );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}

			// echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_caption, $image ), $post->ID );
			$img_html = sprintf( '<img src="%s" alt="%s" />', $image_link, $image_caption );
			$img_link = $image_link;
			$img_alt = $image_caption;

		} else {

			$img_html =  apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
			$img_link = wc_placeholder_img_src();
			$img_alt = $post->ID;
		}
	?>
<div class="img-mobile">
	<?php echo $img_html; ?>
</div>
<div class="slider-images">
	<div class="simpleLens-gallery-container" id="zoomimages">
		<div class="simpleLens-container">
			<div class="simpleLens-big-image-container">
			  <a class="simpleLens-lens-image" data-lens-image="<?php echo $img_link; ?>">
			    <img src="<?php echo $img_link; ?>" class="simpleLens-big-image">
			  </a>
			</div>
		</div>

		<?php do_action( 'woocommerce_product_thumbnails' ); ?>
	</div>
</div>