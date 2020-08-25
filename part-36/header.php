<?php global $timer_master; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		<?php wp_head(); ?>
       <style>
           #call-to-action{
               background: <?php echo $timer_master['contact_bg']; ?>
           }
        </style>
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class=" animated-header stick">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="<?php echo site_url(); ?>" >
                            <img src="<?php echo $timer_master['logo_image']['url']; ?>" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <?php
                            wp_nav_menu(array(                             
                                'theme_location'    => 'primary_menu',
                                'depth'             => 2,
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                /*'walker'            => new WP_Bootstrap_Navwalker(),*/
                                'fallback_cb' => 'fallbackcb',
                            ));
                        ?>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>