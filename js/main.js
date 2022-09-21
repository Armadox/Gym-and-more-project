function resizeFunction ()
        {
          var w = parseInt($("body").css("width"));
          var x = 0

            switch (true)
            {   
                case (w >= 1200):  //What changes if you change to xl
                $("roundBlackBackground").css("background-color","red");
                $(".cutImages").css("height", "750px");
                $(".cutImages2").css("height", "750px");
                $(".jumbatronResize").css("height", "150px");
                $("#logo").css("width","15%");
                $(".fixed-bg").css("min-height", "440px");
                $(".woocommerce-loop-product__title").css("font-size","20px");
                $(".offcanvasBasket").css("font-size","0");
                $(".offcanvasAccount").css("font-size","0");
                $(".container").css("max-width","90%");
                $(".shoppingBody").css("padding","90px 30px");
                $(".archiveCart").css("visibility","hidden");
                
                  break;
                case (w >= 992):  //what happens if you change to lg
                $("roundBlackBackground").css("background-color","red");
                  $(".cutImages").css("height", "500px");
                  $(".cutImages2").css("height", "500px");
                  $(".jumbatronResize").css("height", "80px");
                  $("#logo").css("width","15%");
                  $(".fixed-bg").css("min-height", "440px");
                  $(".woocommerce-loop-product__title").css("font-size","18px");
                  
                  $(".offcanvasBasket").css("font-size","0");
                  $(".offcanvasAccount").css("font-size","0");
                  $(".container").css("max-width","90%");
                  $(".shoppingBody").css("padding","90px 30px");
                  $(".btn-custom2").css("font-size","18px");
                  $(".archiveCart").css("visibility","hidden");
                  
                  break;  
                case (w >= 754): //what changes if you change to md
                $("roundBlackBackground").css("background-color","red");
                $(".cutImages").css("height", "350px");
                $(".cutImages2").css("height", "350px");
                $(".jumbatronResize").css("height", "55px");
                $("#logo").css("width","50%");
                $(".woocommerce-loop-product__title").css("font-size","19px");
                $(".offcanvasBasket").css("font-size","0");
                $(".offcanvasAccount").css("font-size","0");
                $(".container").css("max-width","90%");
                $(".shoppingBody").css("padding","40px 30px");
                $(".archiveCart").css("visibility","hidden");
                
                  break;
                case (w >= 400):  //What changes if you change to sm
                $("roundBlackBackground").css("background-color","transparent");
                $(".cutImages").css("height", "250px");
                $(".cutImages2").css("height", "250px");
                $(".jumbatronResize").css("height", "35px");
                $("#logo").css("width","20%");
                $(".fixed-bg").css("min-height", "240px");
                $(".conditionFix").css("text-align", "center");
                $(".conditionFix").css("padding-left", "0px");
                $(".woocommerce-loop-product__title").css("font-size","15px");
                $(".offcanvasBasket").css("font-size","20px");
                $(".offcanvasAccount").css("font-size","20px");
                $(".container").css("max-width","100%");
                $(".shoppingBody").css("padding","35px 0px");
                $(".archiveCart").css("visibility","visible");
                
                //$(".col-xs-12").removeClass("order-2");
                  break;
                  case (w >= 100):  //What changes if you change to xs
                  $("roundBlackBackground").css("background-color","transparent");
                $(".conditionFix").css("text-align", "left");
                $(".conditionFix").css("padding-left", "80px");
                $(".footerLogoFix").css("width", "30%");
                $(".offcanvasAccount").css("font-size","20px");
                $(".offcanvasBasket").css("font-size","20px");
                $(".container").css("max-width","100%");
                $(".shoppingBody").css("padding","35px 0px");
                $(".archiveCart").css("visibility","visible");
                
                //$(".col-xs-12").removeClass("order-2");
                default: 
                     
            }
        } 
      
      //DOM loads b4 command 
      while ("body" != null)
      {
        //PX turn into INT numbers
        var screenSize = 0;
        var screenOption = 0;
        screenSize = parseInt($("body").css("width"));
        resizeFunction ();
        break; 
        //$(".cutImages").css("height", "200px");
          
      }

      function randomColor()
      {
        var colors = ['#ff0000', '#00ff00', '#0000ff'];
        var random_color = colors[Math.floor(Math.random() * colors.length)];
        $("a:hover").css("color", random_color );
      }

      function randomColorOut()
      {
        $("a").css("color", "white" );
      }

      


      