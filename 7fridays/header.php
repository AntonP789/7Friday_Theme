<!doctype html>
<html lang="en">
<head>
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--=== LINK TAGS ===-->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--<title><?php //wp_title('', true); ?></title>-->
    <!--=== WP_HEAD() ===-->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="fixing">
            <div class="container">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" title="" alt=""/>
                    </a>                    
                </div>
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'items_wrap' => '<ul>%3$s</ul>',
                    )); ?>       
                </nav>                                                        
                <div class="mobileMenu">
                    <div class="iconAnime">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>                          
            </div><!--End container-fluid-->
        </div><!--End fixing-->
    </header>
<?php include( 'template-parts/css-parts/header-css.php' ); ?>