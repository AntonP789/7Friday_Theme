<?php 
    if(get_field('main_flexible_content')){
        $flexCont = get_the_ID();
	}    
    if( have_rows('main_flexible_content', $flexCont) ){
	    while ( have_rows('main_flexible_content', $flexCont) ) {
	        $row = the_row(true);
	        $layout = get_row_layout();
	        if(file_exists(get_theme_root().'/'.get_option('stylesheet') . '/template-parts/flexible-content/' . $layout . '.php')) {
                echo '<section class="'.$layout.'">';
	               include(get_theme_root().'/'.get_option('stylesheet') . '/template-parts/flexible-content/' . $layout . '.php');
                echo '</section>';
	        }
	    }
	}      
?>