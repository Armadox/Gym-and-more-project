<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<div class="productCart" style="position:sticky; top:100px;">
			<button type="button" class="btn btn-custom4">
				<a class="" href="https://gym-and-more.ro/magazin/">Shop</a>
			</button>
		</div>
		
	<div class="archiveCart" style="position:sticky; top:180px;">
			<button type="button" class="btn btn-custom3">
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>"> <?php echo WC()->cart->get_cart_total() ?></a>
			</button>
		</div>
	

<!--Shopping Body-->
  <div class="container shoppingBody">
      <!--Categories on the left-->
    <div class="row marginFix" style="margin-top: 50px; padding-left: 15px;">
      <div class="col-2 borderTest">
        <div class="menuBar">
          <p class="borderTest categoryTop">Categorii</p>
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/muscle-gain/whey-protein/" onmouseover="randomColor()" onmouseout="randomColorOut()">Proteine Whey</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/vegan/" onmouseover="randomColor()" onmouseout="randomColorOut()">Produse Vegane</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/muscle-gain/creatin/" onmouseover="randomColor()" onmouseout="randomColorOut()">Creatina</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/muscle-gain/pre-workout/" onmouseover="randomColor()" onmouseout="randomColorOut()">Pre-Workout</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/muscle-gain/omega3/" onmouseover="randomColor()" onmouseout="randomColorOut()">Omega-3</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/muscle-gain/bcaa/" onmouseover="randomColor()" onmouseout="randomColorOut()">BCAA</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/muscle-gain/eaa/" onmouseover="randomColor()" onmouseout="randomColorOut()">EAA</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/health/zink/" onmouseover="randomColor()" onmouseout="randomColorOut()">Zinc</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/weight-loss/multivitamin/" onmouseover="randomColor()" onmouseout="randomColorOut()">Vitamine</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/health/magnesium/" onmouseover="randomColor()" onmouseout="randomColorOut()">Magnesium</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/weight-loss/carnitine/" onmouseover="randomColor()" onmouseout="randomColorOut()">L-Carnitine</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/weight-loss/green-tea-extract/" onmouseover="randomColor()" onmouseout="randomColorOut()">Extract Ceai Verde</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/snacks/" onmouseover="randomColor()" onmouseout="randomColorOut()">Snacks-uri</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/accessories/" onmouseover="randomColor()" onmouseout="randomColorOut()">Accesorii</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/pentri-diabetici/" onmouseover="randomColor()" onmouseout="randomColorOut()">Fara zahar</a></p>
        </div>
      </div>
      
      




      <div class="col-10 borderTest row">
        <?php  woocommerce_content();?>
      </div>

    </div>
  </div>






	

	

<?php get_footer();


/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
