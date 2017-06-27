<?php

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "tust";


    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,

        'menu_title'           => __( 'TUST Options', 'redux-framework-demo' ),
        'page_title'           => __( 'TUST Options', 'redux-framework-demo' ),
        
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-sos',
        'menu_icon'            => 'dashicons-sos',
        'page_priority'        => 60,
        'admin_bar_priority'   => 50,
        'global_variable'      => '',
        'dev_mode'             => false,
        'update_notice'        => false,
        'customizer'           => true,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'last_tab'             => '',
        'page_icon'            => 'icon-themes',
        'page_slug'            => '_options',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,
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



    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/mortuzahossain/',
        'title' => 'Get more free theme on GitHub',
        'icon'  => 'el el-github'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/mdmortuza.hossain/',
        'title' => 'Be friend of mine on Facebook',
        'icon'  => 'el el-facebook'
    );

    Redux::setArgs( $opt_name, $args );



    // For General Setting
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General Settings', 'redux-framework-demo' ),
        'id'               => 'basic',
        'icon'             => 'el el-cogs',
        'fields'           => array(
            array(
                'id'       => 'upload-facivon',
                'type'     => 'switch',
                'title'    => 'Upload Favicon',
                'default'  => false
            ),
            array(
                'id'        => 'favicon',
                'type'      => 'media',
                'title'     => __( 'Favicon Icon', 'redux-framework-demo' ),
                'required' => array( 'upload-facivon', '=', true )
            ),
            array(
                'id'        => 'menu-logo-text',
                'type'      => 'text',
                'title'     => __( 'Logo Text', 'redux-framework-demo' ),
                'default'   => 'Tust'
            ),
            array(
                'id'        => 'copyright-text',
                'type'      => 'text',
                'title'     => __( 'Copyright Text', 'redux-framework-demo' ),
                'default'   => 'Design By <a href="http://www.uipasta.com" target="_blank" title="UiPasta">UiPasta</a>'
            ),
        )
    ) );


    // For Other Menus

    // For Navigation bar and Shorted section
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Menu Setting', 'redux-framework-demo' ),
        'id'               => 'nav',
        'desc'    => 'Drag menu item in order to show Menu item as the order item order. (Please Don\'t disable home and cantact section. It might brock your website.)',
        'icon'             => 'el el-cog-alt',
        'fields'           => array(
            array(
                'id'      => 'nav-item',
                'type'    => 'sorter',
                'options' => array(
                    'enabled'  => array(
                        'home'   => 'Home',
                        'about' => 'About',
                        'services'     => 'Services',
                        'lunch_date'   => 'Launch Date',
                        'contact'   => 'Contact'
                    ),
                    'disabled' => array(
                    )
                ),
            ),
        )
    ) );

    // For Home
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Home', 'redux-framework-demo' ),
        'id'               => 'home',
        'desc'    => 'You can change here your Home header and subheader text. Or it will set it\'s default.',
        'icon'             => 'el el-home',
        'fields'           => array(
            array(
                'id'        => 'home-header-text',
                'type'      => 'text',
                'title'     => __( 'Header', 'redux-framework-demo' ),
                'default'   => 'WE ARE COMING SOON'
            ),
            array(
                'id'        => 'home-sub-header-text',
                'type'      => 'text',
                'title'     => __( 'Sub Header', 'redux-framework-demo' ),
                'default'   => 'We are working on our website, Launch Soon.'
            ),
            array(
                'id'        => 'mailchimp',
                'type'      => 'textarea',
                'title'     => __( 'MailChimp Form Action Text', 'redux-framework-demo' ),
                'default'   => 'http://facebook.us16.list-manage.com/subscribe/post?u=3c6471708ddac41170d516748&amp;id=0e879c373c',
                'subtitle'  => 'If you need some help to do this then please contact with <a href="http://www.facebook.com/mdmortuza.hossain/">me</a>.'
            ),
        )
    ) );


    //For About US section
    Redux::setSection( $opt_name, array(
        'title'            => __( 'About Us', 'redux-framework-demo' ),
        'id'               => 'about',
        'icon'             => 'el el-group',
        'fields'           => array(
            array(
                'id'        => 'about-header',
                'type'      => 'text',
                'title'     => __( 'About Header', 'redux-framework-demo' ),
                'desc'      => 'For change other collor wrape your text with span tag',
                'default'   => 'About <span>Us</span>'
            ),
            array(
                'id'       => 'about-poster',
                'type'     => 'textarea',
                'title'    => __( 'About Text', 'redux-framework-demo' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hend vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. Curabitur rhoncus auctor nunc congue sodales. Sed posuere nisi ipsum, dignissim nunc dapibus eget. Donec sollicitudin sapien ut sapien fermentum, non ultricies nulla gravida.',
            ),
        )
    ) );


    //For Our Services Section
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Our Services', 'redux-framework-demo' ),
        'id'               => 'services',
        'icon'             => 'el el-briefcase ',
        'fields'           => array(
            array(
                'id'        => 'services-header',
                'type'      => 'text',
                'title'     => __( 'Services Header', 'redux-framework-demo' ),
                'desc'      => 'For change other collor wrape your text with span tag',
                'default'   => 'Our <span>Services</span>'
            ),
            array(
                'id'          => 'services_content',
                'type'        => 'slides',
                'title'       => __('About Content', 'redux-framework-demo'),
                'subtitle'      => 'Get the logo code from <a href="http://fontawsome.io/" target="_blank" >Here</a>',
                'placeholder' => array(
                    'title'           => __('Title', 'redux-framework-demo'),
                    'description'     => __('Description', 'redux-framework-demo'),
                    'url'             => __('Logo Code (fa-mobile)', 'redux-framework-demo'),
                )
            ),
        )
    ) );

    // For Lunch Date
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Launch Time', 'redux-framework-demo' ),
        'id'               => 'lunch',
        'icon'             => 'el el-calendar',
        'fields'           => array(
            array(
                'id'        => 'lunch-header',
                'type'      => 'text',
                'title'     => __( 'Lunch Header', 'redux-framework-demo' ),
                'desc'      => 'For change other collor wrape your text with span tag',
                'default'   => 'Launch <span>Date</span>'
            ),
            array(
                'id'       => 'lunch_datepicker',
                'type'     => 'date',
                'title'    => __( 'Launch Date', 'redux-framework-demo' ),
            ),
            array(
                'id'            => 'lunch_houre',
                'type'          => 'slider',
                'title'         => __( 'Launch Houre', 'redux-framework-demo' ),
                'default'       => 15,
                'min'           => 1,
                'step'          => 1,
                'max'           => 24,
                'display_value' => 'text'
            ),
            array(
                'id'            => 'lunch_minute',
                'type'          => 'slider',
                'title'         => __( 'Launch Minute', 'redux-framework-demo' ),
                'default'       => 00,
                'min'           => 1,
                'step'          => 1,
                'max'           => 59,
                'display_value' => 'text'
            ),

        ),
    ) );

    // For Contact Us
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Contact', 'redux-framework-demo' ),
        'id'               => 'contact',
        'icon'             => 'el el-comment-alt',
        'fields'           => array(
            array(
                'id'        => 'contact-header',
                'type'      => 'text',
                'title'     => __( 'Contact Header', 'redux-framework-demo' ),
                'default'   => 'Contact <span style="color: #ffffff !important;">Us</span>'
            ),
            array(
                'id'       => 'admin-email',
                'type'     => 'text',
                'title'    => __('Admin Email', 'redux-framework-demo'),
                'subtitle' => __('Fill the email address where you want to receive the email.', 'redux-framework-demo'),
                'validate' => 'email',
                'msg'      => 'Please Provide Real Email Address',
                'default'  => get_option( 'admin_email' )
            ),

            array(
                'id'        => 'contact-address',
                'type'      => 'text',
                'title'     => __( 'Contact Address', 'redux-framework-demo' ),
                'default'   => '1AB/2, Tall Road, Los Angeles, United State.'
            ),
            array(
                'id'        => 'contact-phone',
                'type'      => 'text',
                'title'     => __( 'Contact Phone', 'redux-framework-demo' ),
                'default'   => '18-00-0000-00'
            ),
            array(
                'id'        => 'contact-email',
                'type'      => 'text',
                'title'     => __( 'Contact Email', 'redux-framework-demo' ),
                'default'  => get_option( 'admin_email' )
            ),

            // For Social Icon

            array(
                'id'          => 'contuct-social',
                'type'        => 'slides',
                'title'       => __('Social Links', 'redux-framework-demo'),
                'subtitle'      => '
                Available Social Icon Name:
                <ol>
                    <li>facebook</li>
                    <li>twitter</li>
                    <li>google-plus</li>
                    <li>instagram</li>
                    <li>linkedin</li>
                    <li>pinterest</li>
                    <li>youtube</li>
                    <li>vimeo</li>
                    <li>dribbble</li>
                    <li>behance</li>
                    <li>flickr</li>
                    <li>tumblr</li>
                    <li>foursquare</li>
                    <li>github</li>
                    <li>skype</li>
                </ol>
                ',
                'desc'    => 'Please don\'t use more then six social link.',
                'placeholder' => array(
                    'title'           => __('Icon Name', 'redux-framework-demo'),
                    'url'           => __('URL', 'redux-framework-demo'),
                ),
                'show' => array(
                    'title' => true,
                    'url' => true,
                ),
            ),

        )
    ) );