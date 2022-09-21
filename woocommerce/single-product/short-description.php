<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

?>



<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
        global $post;
        
        $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
        
        if ( ! $short_description ) {
        	return;
        }
        
        ?>
        
        
    
    
    
    <div class="accordion" id="accordionDescription1">
		<div class="card info">
			<h5 class="card-header" id="headingDescription1">
				<a style="text-align:center; width:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDescription1" aria-expanded="true" aria-controls="collapseDescription1">
					Ingrediente
				</a>
			</h5>
			<div id="collapseDescription1" class="accordion-collapse collapse" aria-labelledby="headingDescription1" data-bs-parent="#accordionDescription1">
				<div class="accordion-body">
					<div class="woocommerce-product-details__short-description">
        <?php echo $short_description; // WPCS: XSS ok. ?>
    </div>
				</div>
			</div>
		</div>
	</div>
    
    





        
