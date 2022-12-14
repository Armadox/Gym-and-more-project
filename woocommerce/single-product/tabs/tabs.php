<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div id="accordion" class="woocommerce-tabs wc-tabs-wrapper">
	<?php foreach ( $product_tabs as $key => $product_tab ) : ?>	
		<div class="card info">
			<div class="card-header" id="heading_<?php echo esc_attr( $key ); ?>">
				<h5 class="mb-0">
					<a style="width:100%" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo esc_attr( $key ); ?>" aria-expanded="true" aria-controls="collapse_<?php echo esc_attr( $key ); ?>">
							<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</h5>
			</div>
						
			<div id="collapse_<?php echo esc_attr( $key ); ?>" class="collapse" aria-labelledby="heading_<?php echo esc_attr( $key ); ?>" data-bs-parent="#accordion">
				<div class="card-body">
							<?php
							if ( isset( $product_tab['callback'] ) ) {
								call_user_func( $product_tab['callback'], $key, $product_tab );
							}
							?>
				</div>
			</div>
		</div>
		<hr>	
					<?php endforeach; ?>

					<?php do_action( 'woocommerce_product_after_tabs' ); ?>

					
			
		</div>
	</div>

<?php endif; ?>
