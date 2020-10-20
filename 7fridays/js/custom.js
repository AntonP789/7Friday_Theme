jQuery(document).ready(function(){

    // prevent empty space in pages
    function PEPFU(){
        var pepFU = jQuery(window).innerHeight() - jQuery('footer').height() - jQuery('#wpadminbar').height();
        jQuery('body > .content').css('min-height', pepFU);   
    }
    PEPFU();
    
    // Header Scripts--------------------
    // height header
    function HH(){
        var heiHeader = jQuery('.fixing').height();
        jQuery('header').height(heiHeader);            
    }
    HH(); 
                  
    // open mobile menu      
    jQuery('.mobileMenu').click(function(){   
        jQuery(this).toggleClass('mobileMenuOpen');      
        jQuery('header nav').slideToggle();
    })

    // cacl height and position
    function FiH(){
        if(window.innerWidth > 600){
            var tpFH = jQuery('.fixing').height() + jQuery('#wpadminbar').height();    
        }else{
            var chCL = jQuery('.fixing').hasClass('activated');
            if(chCL == false){
                var tpFH = jQuery('.fixing').height() + jQuery('#wpadminbar').height();    
            }else{
                var tpFH = jQuery('.fixing').height();
            }
        }
        var formHei = jQuery(window).innerHeight() - tpFH;
        jQuery('header nav').css({'max-height': formHei});                               
    }
    FiH();
            
    // add caret to dropdown menu
    if(jQuery(window).innerWidth() > 1024){
        jQuery('nav .menu-item-has-children > a').each( function(){
            jQuery(this).append('<span class="caret"></span>')
        })
    }else{
        jQuery('nav .menu-item-has-children').each( function(){
            jQuery(this).append('<span class="thereCaret"><img src="/wp-content/themes/7fridays/images/thereCaret.svg" title="" alt=""/></span>')
        })
    }

    // open on hover or click
    if (jQuery(window).innerWidth() > 1024) {
        jQuery('nav .menu-item-has-children').hover(function(){
            jQuery(this).find('ul:first').stop().slideDown(300);
        }, function(){
            jQuery(this).find('ul:first').stop().slideUp(200);
        });
    }else{
        jQuery('nav .menu-item-has-children .thereCaret').click(function(){
            jQuery(this).parent().find('ul:first').toggleClass('openMenu');
            jQuery(this).toggleClass('active');
        });
    }
    if(jQuery(window).innerWidth() > 600){
        var topHP = 0 + jQuery('#wpadminbar').height();    
    }else{
        var topHP = 0; 
    }

    // sticky header
    jQuery(window).scroll(function(){                             
        if(jQuery(window).scrollTop() > 150){
            jQuery('.fixing').addClass('activated').css({'top': topHP});
            FiH();
        }else{
            jQuery('.fixing').removeClass('activated').attr('style', '');
            FiH(); 
        }
    }); // end scroll function

    jQuery(window).resize(function(){         
        FiH()
    }); // end resize function
    //End Header Scripts-----------------------------
    
}) // end document ready




























