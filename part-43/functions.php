<?php
function timermaster_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('letest_work', 360, 300, ture);
    add_image_size('team-thumbnail', 262, 261, ture);
    add_image_size('blog-img', 1140, 470, ture);
    add_image_size('sidebar-blog-img', 750, 310, ture);
    add_image_size('galley-img', 360, 305, ture);
}
add_action('after_setup_theme', 'timermaster_theme_support');

require_once('inc/navwalker.php');
require_once('inc/cmb2-custom-fields.php');
require_once('inc/redux-framework-master/redux-framework.php');
require_once('inc/redux-framework-master/timer-master-theme-option.php');
include_once('inc/custom-post.php');
include_once('inc/css_js.php');
include_once('inc/widgets.php');
include_once('inc/custom-register-fields.php');

/*for limit excerpt*/
function remove_dot($remove){
    return '';
}
add_filter('excerpt_more', 'remove_dot');
