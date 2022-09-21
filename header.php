<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style2.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Caveat:wght@500&family=Edu+SA+Beginner&family=Gloria+Hallelujah&family=Noticia+Text:ital@1&family=Orbitron:wght@500&family=Pacifico&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PMKCQFKS4C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PMKCQFKS4C');
</script>

<script src="https://apis.google.com/js/platform.js?onload=renderOptIn" async defer></script>

<script>
  window.renderOptIn = function() {
    window.gapi.load('surveyoptin', function() {
      window.gapi.surveyoptin.render(
        {
          // REQUIRED FIELDS
          "merchant_id": 627453458,
          "order_id": "ORDER_ID",
          "email": "CUSTOMER_EMAIL",
          "delivery_country": "COUNTRY_CODE",
          "estimated_delivery_date": "YYYY-MM-DD",

          // OPTIONAL FIELDS
          "products": [{"gtin":"GTIN1"}, {"gtin":"GTIN2"}]
        });
    });
  }
</script>




    <?php wp_head(); ?>
    

    
</head>



<body onresize="resizeFunction ()">  


  


  <!----Navbar---->
  <nav class="navbar navbar-expand-md navbar-dark bg-custom sticky-top">
    <div class="position-absolute" style="margin-top: 70px;">
    <div class="container-fluid d-flex">

      <!--Navbutton-->
      <button class="btn btn-customCanvas d-md-none canvasButton" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar22" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      
      
      

      

      <!--Navbarsetup Left-->
      <div class="offcanvas offcanvas-start hidden-md" tabindex="-1" id="offcanvasNavbar22" aria-labelledby="offcanvasNavbar">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
       

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-evenly flex-grow-1">
            <li class="nav-item">
              <a class="nav-link active roundBlackBackground" aria-current="page" href="https://gym-and-more.ro">Gym&More</a>
            </li>
            <li class="nav-item">
              <a class="nav-link offcanvasText roundBlackBackground" href="#">Despre<span style="visibility:hidden;">i</span>noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link offcanvasText roundBlackBackground" href="https://gym-and-more.ro/magazin">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link offcanvasBasket" href="https://gym-and-more.ro/cos">Cos  <i class="fa-solid fa-cart-shopping"></i></a>
            </li>



            <li class="nav-item">
              <a class="nav-link offcanvasAccount" href="https://gym-and-more.ro/contul-meu/">
               
              <?php $current_user = wp_get_current_user(); ?>
              <?php
              if ($current_user->display_name!=null)
              {
                echo $current_user->display_name;
              }
              else
              {
                echo "Log In";
              }
              ?>
                <i class="fa-solid fa-user"></i>
               </a>
            </li>
          </ul>
        
        </div>
      </div>

      <!--Logo-->
      <div class="centered" href="#">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/images/gymandmore.webp" id="logo">
      </div>
                  

    <!--Navbarsetup Right-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar22" aria-labelledby="offcanvasNavbarxxx">
      <div class="offcanvas-body float-end">
        <ul class="navbar-nav justify-content-evenly flex-grow-1 p-2">
          <li class="nav-item">
            <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form( true, array( 'id' => 1 ) ); } ?>
          </li>
          <li class="nav-item customCartButton">
            <button type="button" class="btn btn-custom position-relative">
              <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>"> <?php echo WC()->cart->get_cart_total() ?></a>
              
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-custom-notification" style="z-index:2;">
              <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_contents_count() ?> </a> 
              <span class="visually-hidden">Items inside Cart</span></span>
            </button>
          
          
          
              
          <a class="username" href="https://gym-and-more.ro/contul-meu/">
            <button type="button" class="btn btn-custom2 position-relative">
              <a class="username" href="https://gym-and-more.ro/contul-meu/">
              <?php $current_user = wp_get_current_user(); ?>
            <span class="my-acc"><?php
              if ($current_user->display_name!=null)
              {
                echo $current_user->display_name;
              }
              else
              {
                echo "Log In";
              }
              ?></span>
            </button>
            </a>
            </li>
          </ul>
        
        </div>
      </div>
      </div>
    </div>
  </nav> 

  
  