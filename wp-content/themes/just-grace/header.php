<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="http://justgrace.co.za/wp-content/uploads/2015/02/favicon.png" />
    <title>
        <?php
        /*
        * Print the <title> tag based on what is being viewed.
        */
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name. bloginfo( 'name' ); // Add the blog description for the home/front page. $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; // Add a page number if necessary: if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'british-cleaning' ), max( $paged, $page ) );
        ?>
    </title>
    <meta name="viewport" content="width=device-width">
    <link href=<?php echo(get_template_directory_uri()."/style.css"); ?> rel="stylesheet" type="text/css" />
    <?php
    $bgurl= get_post_meta($post->ID, "bg_img_url", true);
    if (!empty($bgurl)) {
    }
    ?>
    <style type="text/css">
        .about-content-bg {
            background: url("<?php echo $bgurl; ?>") no-repeat scroll center top #FFF !important;
        }
    </style>
    <?php wp_head(); ?>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-52743654-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <div class="header-sec">
            <div class="logo-sec"><a href="http://justgrace.co.za/"><img src=<?php echo( get_template_directory_uri()."/images/logo.png");?> alt="" /></a> </div>
            <div class="donate-sec"> <a href=<?php echo(site_url()."/banking-details") ?> class="donate-btn">Donate Now</a><a href=<?php echo(site_url()."/banking-details") ?> class="support-btn">Support our mission</a> </div>
            <div class="seach-sec">
                <div class="sitesearch">
                    <?php get_search_form();?> </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="nav-sec">
        <div class="container">
            <div class="top-manu">
                <?php
                  wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'main-nav'));
                ?>
                <!--<ul>
                  <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Initiatives</a></li>
                    <li><a href="#">How to Help </a></li>
                    <li><a href="#">News </a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>-->
            </div>
            <div class="clear"></div>
        </div>
    </div>