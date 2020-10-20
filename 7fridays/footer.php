<?php include( 'template-parts/css-parts/footer-css.php' ); ?>
    <footer>
        <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'items_wrap' => '<ul>%3$s</ul>',
        )); ?>
    </footer>
<?php wp_footer(); ?>
<!--Here Put Google Fonts Links-->

    </body>
</html>