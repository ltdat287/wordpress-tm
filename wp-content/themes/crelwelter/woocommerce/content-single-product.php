<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 // do_action( 'woocommerce_before_single_product' );

	 // if ( post_password_required() ) {
	 // 	echo get_the_password_form();
	 // 	return;
	 // }
	?>

	<div class="product-detail">
		<div class="box-des">

			<?php
			/**
			 * woocommerce_before_single_product_summary hook.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>

		<div class="product-detail-des">
	
		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>

		</div>
	<br class="space"/>
</div><!-- end slider-images-->
<div class="box-info">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Tính năng</a></li>
		<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Thông số kỹ thuật</a></li>
		<li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Video</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="tab1">
			<p>Lọc thẩm thấu ngược (RO) công nghệ Side Stream được cấp bản quyền sáng chế độc quyền tại Mỹ.</p>
			<p>Màng lọc RO – Side Stream là phát minh đột phá của A. O. Smith, được cấp bản quyền sáng chế độc quyền tại Mỹ, giúp nâng cao hiệu suất sử dụng và kéo dài tuổi thọ lõi lọc. Màng lọc RO – Side Stream loại bỏ 99,9% kim loại nặng (Asen, chì, thủy ngân…) và các vi khuẩn có hại.</p>
			<p>Đặc biệt với màng lọc RO – Side Stream, A. O. Smith mang đến “Giải pháp tiết kiệm toàn diện” cho người sử dụng.</p>
		</div>
		<div role="tabpanel" class="tab-pane" id="tab2">Safety guaranteed on the human body with the use of parts made from NSF-approved materials

			Efficient water filtering function with the various water
			treatment systems</div>
			<div role="tabpanel" class="tab-pane" id="tab3">Video</div>
		</div>
		<br class="space"/>
	</div><!-- end .box-info-->
	<br class="space"/>
	<div class="product-other">
		<span class="title">sản phẩm khác</span>
		<div class="listproduct-other">
			<div class="col-sm-4">
				<div class="item-product-category">
					<div class="p-images">
						<a href="#"><img src="images/product3.jpg" alt="Filter"></a>
					</div>
					<h2><a href="#">JPnP Filter (Turn & Push)</a> </h2>
					<span class="price">2.200.000VNĐ</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item-product-category">
					<div class="p-images">
						<a href="#"><img src="images/product3.jpg" alt="Filter"></a>
					</div>
					<h2><a href="#">JPnP Filter (Turn & Push)</a> </h2>
					<span class="price">2.200.000VNĐ</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item-product-category">
					<div class="p-images">
						<a href="#"><img src="images/product3.jpg" alt="Filter"></a>
					</div>
					<h2><a href="#">JPnP Filter (Turn & Push)</a> </h2>
					<span class="price">2.200.000VNĐ</span>
				</div>
			</div>
		</div>
		<br class="space"/>
	</div><!-- product-other -->
</div><!--product-detail -->

<!-- <div itemscope itemtype="<?php //echo woocommerce_get_product_schema(); ?>" id="product-<?php //the_ID(); ?>" <?php //post_class(); ?>>
 -->

		<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		//do_action( 'woocommerce_after_single_product_summary' );
		?>

	<?php //do_action( 'woocommerce_after_single_product' ); ?>
