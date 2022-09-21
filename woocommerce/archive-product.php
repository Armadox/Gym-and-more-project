<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce¥Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
	

?>


		<div class="archiveCart" style="position:sticky; top:140px;">
			<button type="button" class="btn btn-custom3">
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>"> <?php echo WC()->cart->get_cart_total() ?></a>
			</button>
		</div>


<!--Shopping Body-->
<div class="container shoppingBody">
      <!--Categories on the left-->
    <div class="row marginFix">
      <div class="col-2  borderTest">
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
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/snacks/" onmouseover="randomColor()" onmouseout="randomColorOut()">Gustäri</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/accessories/" onmouseover="randomColor()" onmouseout="randomColorOut()">Accesorii</a></p>
          <hr class="categoryLine">
          <p><a class="categoryStyle" href="https://gym-and-more.ro/categorie-produs/pentri-diabetici/" onmouseover="randomColor()" onmouseout="randomColorOut()">Fara zahar</a></p>
        </div>
        
      </div>
      
      

		

        
      	<div class="container col-10">
		  <div id="carouselExampleControls" class="carousel slide archive-carousel" data-bs-ride="carousel">
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
		  <div class="row borderTest">
			<?php 
			if ( woocommerce_product_loop() ) {
				
				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			
				woocommerce_product_loop_start();
			
				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
						
						/**
						 * Hook: woocommerce_shop_loop.
						 */
						
			
						wc_get_template_part( 'content', 'product' );
					}
				}
			
				woocommerce_product_loop_end();
			
				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}
			
			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
			?>
			
			</div>
		</div>
		
		
			

		









		
      


    </div>
	<figure>
      <div class="fixed-wrap">
        <div class="fixed-bg">
        </div>
      </div>
    </figure>
</div>

<?php $websiteName= "http://gym-and-more.ro/"?>



<h2 style="text-align: center; font-size: 40px; padding-top: 80px; padding-bottom: 80px;">Mărcile de produse pe care le vindem</h2>
    <div class="container-fluid marginFix">
      <div class="row marginFix justify-content-evenly">
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/ironmaxx/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/ironmaxx-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/mutant/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/mutant-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/myprotein/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/myprotein-logo.webp" class="brand centered" style="width:80%;"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/dymatize/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/dymatize-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/applied-nutrition/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/appliednutrition-logo.webp" class="brand centered" style="width:80%;"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/evl/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/evlnutrition-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/bpi-sports/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/bpisports-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/cnp/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/cnp-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/qnt/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/qnt-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/naughty-boy/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/naughtyboy-logo.webp" class="brand centered"></a></div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto"><a href="<?php echo $websiteName?>categorie-produs/brand/wow/"><img src="<?php echo get_template_directory_uri();?>/assets/images/brands/wowhydrate-logo.webp" class="brand centered" style="width:80%;"></a></div>
      </div>
    </div>


			






<?php

get_footer( 'shop' );
