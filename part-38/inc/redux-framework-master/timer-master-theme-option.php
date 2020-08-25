<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "timer_master";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Timer Master Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Timer Master Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
   Redux::setSection( $opt_name, array(
        'title' => __( 'Header Options', 'redux-framework-demo' ),
        'id'    => 'header_option',
        'desc'  => __( 'Header option area', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Header sub optiion', 'redux-framework-demo' ),
        'id'         => 'header_sub_option',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'logo_image',
                'type'     => 'media',
                'title'    => __( 'logo image', 'redux-framework-demo' ),
                'desc'     => __( 'upload your logo image', 'redux-framework-demo' ),
                'url'      => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/images/logo.png'
                )
            ),
        )
    ) );
   Redux::setSection( $opt_name, array(
        'title' => __( 'Slider Options', 'redux-framework-demo' ),
        'id'    => 'slider_option',
        'desc'  => __( 'slider option area', 'redux-framework-demo' ),
        'icon'  => 'el el-cube'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Banner background optiion', 'redux-framework-demo' ),
        'id'         => 'banner_background_option',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'background_image',
                'type'     => 'media',
                'title'    => __( 'background image', 'redux-framework-demo' ),
                'desc'     => __( 'upload your slider background image', 'redux-framework-demo' ),
                'url'      => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/images/slider.jpg'
                )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Biodata', 'redux-framework-demo' ),
        'id'         => 'biodata',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'your_biodata',
                'type'     => 'text',
                'title'    => __( 'your biodata', 'redux-framework-demo' ),
                'desc'     => __( 'Input your biodata with max 10 words', 'redux-framework-demo' ),
                'default'  => 'HI, MY NAME IS JONATHON & I AM A'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'works', 'redux-framework-demo' ),
        'id'         => 'works',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'your_works',
                'type'     => 'slides',
                'title'    => __( 'your works', 'redux-framework-demo' ),
                'placeholder'  => array(
                        'title' => 'input your work'
                    )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Exprience', 'redux-framework-demo' ),
        'id'         => 'exprience',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'your_exprience',
                'type'     => 'textarea',
                'title'    => __( 'Your exprience', 'redux-framework-demo' ),
                'default' => "WITH 10 YEARS EXPERIENCE, I'VE OCCUPIED MANY ROLES INCLUDING DIGITAL DESIGN DIRECTOR,
WEB DESIGNER AND DEVELOPER. THIS SITE SHOWCASES SOME OF MY WORK."
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'works url', 'redux-framework-demo' ),
        'id'         => 'view_works_url',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'works_url',
                'type'     => 'slides',
                'placeholder' => array(
                    'title' => 'url label',
                    'url' => 'url link'
                )
            ),
        )
    ) );
    
   Redux::setSection( $opt_name, array(
        'title' => __( 'About Me Section', 'redux-framework-demo' ),
        'id'    => 'about_me_section',
        'desc'  => __( 'About me section', 'redux-framework-demo' ),
        'icon'  => 'el el-indent-left'
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => __( 'About title', 'redux-framework-demo' ),
        'id'         => 'about_title',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'a_title',
                'type'     => 'text',
                'desc' => 'input your title',
                'default' => 'About Me'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'About description1', 'redux-framework-demo' ),
        'id'         => 'about_desc1',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'a_desc1',
                'type'     => 'textarea',
                'desc' => 'input your description1',
                'default' => "Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only five centuries"
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'About description2', 'redux-framework-demo' ),
        'id'         => 'about_desc2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'a_desc2',
                'type'     => 'textarea',
                'desc' => 'input your description2',
                'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero."
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Thumbnail', 'redux-framework-demo' ),
        'id'         => 'about_thumb',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'a_thumb',
                'type'     => 'media',
                'desc' => 'Upload  your thumbnail',
                'url' => true,
                'default' => array(
                    'url' => get_template_directory_uri().'/images/about/about.jpg',
                )
            ),
        )
    ) );
    
    Redux::setSection( $opt_name, array(
        'title' => __( 'Letest Works Section', 'redux-framework-demo' ),
        'id'    => 'letest_work_section',
        'desc'  => __( 'Letest work section', 'redux-framework-demo' ),
        'icon'  => 'el el-graph-alt'
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Latest works', 'redux-framework-demo' ),
        'id'         => 'work_heading',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'l_heading',
                'type'     => 'text',
                'desc' => 'input your heading',
                'default' => 'Latest Works'
            ),
            array(
                'id'       => 'l_desc',
                'type'     => 'textarea',
                'desc' => 'input your heading description',
                'default' => "Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere 
tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.

"
            ),
        )
    ) );
    
       Redux::setSection( $opt_name, array(
        'title' => __( 'Contact Section', 'redux-framework-demo' ),
        'id'    => 'contact_section',
        'desc'  => __( 'contact with me', 'redux-framework-demo' ),
        'icon'  => 'el el-iphone-home'
    ) );
    
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact with me', 'redux-framework-demo' ),
        'id'         => 'contatc_heading',
        'subsection' => true,
        'fields'     => array(
            array(
                'title'    => 'Contact Heading',
                'id'       => 'c_heading',
                'type'     => 'text',
                'desc'     => 'Input your contact section heading',
                'default' => 'So what do you think?'
            ),
            array(
                'title'    => 'Contact description',
                'id'       => 'c_desc',
                'type'     => 'textarea',
                'desc'     => 'Input your contact section description',
                'default' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,
possimus commodi, <br/>fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.
",
            ),
            array(
                'title'    => 'Contact url label',
                'id'       => 'c_url_label',
                'type'     => 'text',
                'desc'     => 'input your url label',
                'default'  => 'Contact with me'
            ),
            array(
                'title'   =>  'contact url',
                'id'       => 'c_url',
                'type'     => 'text',
                'desc'     => 'input your url',
                'default'  => '#'
            ),
             array(
                 'title'   => 'Footer BG',
                'id'       => 'contact_bg',
                'type'     => 'color',
            ),
             array(
                 'title'   => 'Footer typography',
                'id'       => 'contact_typography',
                'type'     => 'typography',
                 'output'  =>  array(
                    ''
                 )
            ),
        ),
    ));
    Redux::setSection( $opt_name, array(
        'title' => __( 'Footer Section', 'redux-framework-demo' ),
        'id'    => 'footer_section',
        'desc'  => __( 'footer section', 'redux-framework-demo' ),
        'icon'  => 'el el-iphone-home'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer', 'redux-framework-demo' ),
        'id'         => 'footer',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'copyright',
                'type'     => 'editor',
                'desc'     => 'input your copyright text',
                'default'  => "Copyright: 2018 Design and Developed by "
            ),
            array(
                'id'       => 'icon',
                'type'     => 'slides',
                'placeholder'  => array(
                    'title' => 'input icon name',
                    'url'   => 'input icon url'
                )
            ),
        )
    ) );

    Redux::setSection($opt_name, array(
        'title'      => __( 'About Page', 'redux-framework-demo' ),
        'id'         => 'about_page',
        'desc'       => 'Theme option for about page',
        'icon'       => 'el el-home'
    ));
        
    Redux::setSection( $opt_name, array(
        'title'      => __( 'About page option ', 'redux-framework-demo' ),
        'id'         => 'about',
        'subsection' => true,
        'fields'     => array(
            array(
                'title'    => 'About Page Heading',
                'id'       => 'about_page_heading',
                'type'     => 'text',
                'desc'     => 'Input about page heading',
                'default'  => 'ABOUT COMPANY'
            ),
            array(
                'title'    => 'Why we are different?',
                'id'       => 'different',
                'type'     => 'media',
                'desc'     => 'upload a photo',
                'url'      => true,
                'default'  => array(
                    'url'  => get_template_directory_uri().'/images/about/about-company.jpg'
                )
            ),
            array(
                'title'    => 'Why we are different? title',
                'id'       => 'different_title',
                'type'     => 'text',
                'desc'     => 'Input your title',
                'default'  => 'Why we are different?'
            ),
            array(
                'title'    => 'Team Section Heading',
                'id'       => 'team_heading',
                'type'     => 'text',
                'desc'     => 'Input your team section heading',
                'default'  => 'Meet the team'
            ),
            array(
                'title'    => 'Happy Clients Heading',
                'id'       => 'clients_heading',
                'type'     => 'text',
                'desc'     => 'Input your clients section heading',
                'default'  => 'Our happy clients'
            ),
            array(
                'title'    => 'Happy Clients Description',
                'id'       => 'clients_desc',
                'type'     => 'textarea',
                'desc'     => 'Input your clients section description',
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.'
            ),
        )
    ) );
Redux::setSection($opt_name, array(
        'title'      => __( 'Offer From Me Option', 'redux-framework-demo' ),
        'id'         => 'offer_form_me_option',
        'desc'       => 'Theme option for offer from me',
        'icon'       => 'el el-home'
    ));
        
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Offer From Me ', 'redux-framework-demo' ),
        'id'         => 'offer_from_me',
        'subsection' => true,
        'fields'     => array(
            array(
                'title'    => 'Offers Heading',
                'id'       => 'offer_heading',
                'type'     => 'text',
                'desc'     => 'Input your heading',
                'default'  => 'Offer From Me'
            ),       
            array(
                'title'    => 'Offers Heading Description',
                'id'       => 'offer_desc',
                'type'     => 'textarea',
                'desc'     => 'Input your heading description',
                'default'  => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br/>quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum."
            ),
        )
    ) );
Redux::setSection($opt_name, array(
        'title'      => __( 'Service Page Option', 'redux-framework-demo' ),
        'id'         => 'service_page_option',
        'desc'       => 'Theme option for service page',
        'icon'       => 'el el-home'
    ));
Redux::setSection($opt_name, array(
        'title'      => __( 'Service Page', 'redux-framework-demo' ),
        'id'         => 'service_page',
        'subsection' => true,
        'fields'     => array(
            array(
                'title'    => 'What We Do Heading',
                'id'       => 'what_we_do_heading',
                'type'     => 'text',
                'desc'     => 'Input your what we do section heading',
                'default'  => 'WHAT WE LOVE TO DO'
            ),
            array(
                'title'    => 'What We Do Heading Description',
                'id'       => 'what_we_do_heading_desc',
                'type'     => 'textarea',
                'desc'     => 'Input your what we do section heading description',
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis porro recusandae non quibusdam iure adipisci.'
            ),
            array(
                'title'    => 'What We Do Section Thumbnail',
                'id'       => 'what_we_do_thumbnail',
                'type'     => 'media',
                'url'      => true,
                'desc'     => 'Upload your what we do section thumbnail',
                'default'  => array(
                    'url' =>  get_template_directory_uri().'/images/team.jpg'
                )
            ),
            
            array(
                'title'    => 'Feature Works Section Heading',
                'id'       => 'feature_works_heading',
                'type'     => 'text',
                'desc'     => 'Input your feature works section heading',
                'default'  => 'SOME OF OUR FEATURES WORKS'
            ),
            array(
                'title'    => 'Feature Works Section Heading Description',
                'id'       => 'feature_works_heading_description',
                'type'     => 'textarea',
                'desc'     => 'Input your feature works section heading description',
                'default'  => "Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere 
tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus."
            ),
        )
    ));
Redux::setSection($opt_name, array(
        'title'      => __( 'Gallery Page', 'redux-framework-demo' ),
        'id'         => 'gallery_page',
        'desc'       => 'Theme option for gallery page',
        'icon'       => 'el el-home'
    ));

Redux::setSection($opt_name, array(
        'title'      => __( 'Gallery Page Option', 'redux-framework-demo' ),
        'id'         => 'gallery_page_option',
        'subsection' => true,
        'fields'     => array(
            array(
                'title'    => 'Gallery Page Heading',
                'id'       => 'gallery_page_heading',
                'type'     => 'text',
                'desc'     => 'Input your gallery page heading',
                'default'  => 'Gallery'
            ),
        )
    ));
Redux::setSection($opt_name, array(
        'title'      => __( 'Contact Page', 'redux-framework-demo' ),
        'id'         => 'contact_page',
        'desc'       => 'Theme option for contact page',
        'icon'       => 'el el-home'
    ));

Redux::setSection($opt_name, array(
        'title'      => __( 'Contact Page Option', 'redux-framework-demo' ),
        'id'         => 'contact_page_option',
        'subsection' => true,
        'fields'     => array(
            array(
                'title'    => 'Contact Page Heading',
                'id'       => 'contact_page_heading',
                'type'     => 'text',
                'desc'     => 'Input your gallery page heading',
                'default'  => 'Contact'
            ),
            array(
                'title'    => 'Contact Form Heading',
                'id'       => 'contact_form_heading',
                'type'     => 'text',
                'desc'     => 'Input your contact form section heading',
                'default'  => 'Contact With Me'
            ),
            array(
                'title'    => 'Contact Form Heading Description',
                'id'       => 'contact_form_heading_desc',
                'type'     => 'textarea',
                'desc'     => 'Input your contact form heading description',
                'default'  => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea! consectetur adipisicing elit. Dolore, ea!"
            ),
            array(
                'title'    => 'Map Location Heading',
                'id'       => 'location_heading',
                'type'     => 'text',
                'desc'     => 'Input your map location heading',
                'default'  => "Find us"
            ),
            array(
                'title'    => 'Map Location Description',
                'id'       => 'location_desc',
                'type'     => 'textarea',
                'desc'     => 'Input your map location heading description',
                'default'  => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea! consectetur adipisicing elit. Dolore, ea!"
            ),
            array(
                'title'    => 'Map Location Url',
                'id'       => 'location_url',
                'type'     => 'textarea',
                'desc'     => 'Input your map location url',
                'default'  => '<iframe src="https:www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>'
            ),
            
        )
    ));
    /*
     * <--- END SECTIONS
     */