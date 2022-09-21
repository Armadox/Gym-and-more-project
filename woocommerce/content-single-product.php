<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<div id="carouselExampleControls" class="carousel slide single-product-carousel" data-bs-ride="carousel">
      <div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/banner/wheybanner.webp" class="carouselImages d-block w-100"/>
			</div>
			
      </div>
      <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden" >Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form( true, array( 'id' => 1 ) ); } ?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
    
<!--Shopping Body-->
<div class="container-fluid" style="padding-top: 50px">
      <div class="row marginFix">
		 <!--Categories on the left-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-8 polo1 borderTest">
			<!--DISPLAYS PICTURE-->
			
				<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
				?>
			<!--DISPLAYS PICTURE-->
			
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-4 polo2 borderTest" style="margin: 0;">
          <!--DISPLAYS NAME,PRICE,SMALL DESCRIPTION,CATEGORY,ADD TO CART BUTTON-->
			
				<div class="summary entry-summary">
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
					?>
				
			</div>
			<!--DISPLAYS NAME,PRICE,SMALL DESCRIPTION,CATEGORY,ADD TO CART BUTTON-->
			</div>
        </div>
      

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 polo3 borderTest" style="margin: 0;">
			<!--DISPLAYS DESCRIPTION AND ADDITIONAL INFORMATION-->
			<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'barbara', $product ); ?>>
				<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
				?>
			</div>
			<!--DISPLAYS DESCRIPTION AND ADDITIONAL INFROMATION-->
        </div>


      </div>
    </div>


	
	<?php do_action( 'woocommerce_after_single_product' ); ?>




	