<?php

function gym_register_styles()
{
    wp_enqueue_style('gymandmore-style', get_template_directory_uri()."/style.css", array(), 4.6617, 'all');
}

add_action('wp_enqueue_scripts','gym_register_styles');


function gym_register_scripts()
{
    wp_enqueue_script('gymandmore-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), '5.1.3', true);
    wp_enqueue_script('gymandmore-fontawesome', "https://kit.fontawesome.com/15d74697c5.js", array(), 'v', true);
    wp_enqueue_script('gymandmore-jQuery', "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js", array(), '3.6.0', false);
    wp_enqueue_script('gymandmore-myscript', get_template_directory_uri()."/js/main.js", array(), 'v', true);
    
}

add_action('wp_enqueue_scripts','gym_register_scripts');

function gym_menus()
{
    $locations = array(
        'primary' => 'Canvas Menu'
    );

    register_nav_menus($locations);
}

add_action('init','gym_menus');


add_theme_support( 'woocommerce' );
add_theme_support( '' );

function refreshPage(){
    window.location.reload();
} 

add_filter('add_to_cart_custom_fragments', 'woocommerce_header_add_to_cart_custom_fragment');
function woocommerce_header_add_to_cart_custom_fragment( $cart_fragments ) {
                global $woocommerce;
                ob_start();
                ?>
                <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View   cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> <?php echo $woocommerce->cart->get_cart_total(); ?></a>
                <?php
                $cart_fragments['a.cart-contents'] = ob_get_clean();
                return $cart_fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}


function bodyWhite()
{
    echo '<body style="background-color:black">';
    
}
add_shortcode('bodyColorWhite', 'bodyWhite');


function bodyBlack()
{
    echo '<body style="background-color:Black">';
    
    
}
add_shortcode('bodyColorBlack', 'bodyBlack');

