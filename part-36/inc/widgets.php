<?php 
    function timermaster_sidebar()
    {
        register_sidebar( array(
            'name' => 'Footer One',
            'description' => 'This is a footer one sidebar',
            'id' => 'footer_one',
            'before_title' => '<h4 class="heading">',
            'after_title' => '</h4>',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget' => '</div'
        ) );
    }
    add_action( 'widgets_init', 'timermaster_sidebar' );