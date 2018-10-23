
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-head">
    <div class="container">
        <h1 class="site-title col-md-4 col-xs-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-medium"><?php bloginfo( 'name' ); ?></a></h1>
        <span class="glyphicon">&#xe055;</span>
        <div class="main-menu col-md-8  col-sm-12 col-xs-12">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_id' => 'main-menu',
                'container' => false
            ));
            ?>
        </div>
    </div>
</header>


