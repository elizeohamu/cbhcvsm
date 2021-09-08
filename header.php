<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header" class="header">
    <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <i class="fas fa-envelope"></i><a href="mailto:<?php echo get_theme_mod( 'set_header_email' ); ?>"><?php echo get_theme_mod( 'set_header_email' ); ?></a>
                    </div>
                    <div class="search col-12 col-md-6">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="logo col-6 col-md-4">
                    <?php the_custom_logo(); ?>
                </div>
                
                <nav id="navbar" class="navbar navbar-expand-md navbar-light col-6 col-md-8" role="navigation">
                    
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>                        
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'collapsibleNavbar',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker())
                        );
                        ?>
                    
                </nav>
             </div>                       
        </div> 
        </div>       
    </header>