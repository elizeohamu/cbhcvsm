<?php
get_header();
?>

<div class="main-content" role="main">  

    <section class="banner">        
        
        <?php
            echo do_shortcode(get_theme_mod( 'set_banner' ));
        ?> 
            
    </section>

    <section class="utilities">
        <div class="container">                
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="box">
                        <span><i class="fas fa-calendar-check"></i></span>
                        <h4>Eventos</h4>
                        <p><?php echo get_theme_mod( 'set_utilities_text_1' ); ?></p>
                        <a href="<?php echo get_theme_mod( 'set_utilities_link_1' ); ?>" class="bt-primary" target="_self">Ver mais</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="box">
                        <span><i class="fas fa-comments"></i></span>
                        <h4>Reuniões</h4>
                        <p><?php echo get_theme_mod( 'set_utilities_text_2' ); ?></p>
                        <a href="<?php echo get_theme_mod( 'set_utilities_link_2' ); ?>" class="bt-primary" target="_self">Ver mais</a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="box">
                        <span><i class="fas fa-pencil-alt"></i></span>
                        <h4>Documentos</h4>
                        <p><?php echo get_theme_mod( 'set_utilities_text_3' ); ?></p>
                        <a href="<?php echo get_theme_mod( 'set_utilities_link_3' ); ?>" class="bt-primary" target="_self">Ver mais</a>
                    </div>
                </div>                    
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="title">
                <h1>Apresentação</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-4"> 
                    <div class="moldura-img">
                        <img src="<?php echo get_theme_mod( 'set_about_img' ); ?>"> 
                    </div>                       
                </div>
                <div class="col-12 col-md-8"> 
                        <p><?php echo get_theme_mod( 'set_about_text' ); ?></p>
                        <a href="<?php echo get_theme_mod( 'set_about_link' ); ?>" class="bt-primary" target="_self">Ver mais</a>                        
                </div>
            </div>
        </div>
    </section>

    <section class="comites">
        <div class="container">
            <div class="title">
                <h1>Comitês</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="box">                            
                        <div class="title-area">
                            <h4><?php echo get_theme_mod( 'set_comites_title_1' ); ?></h4>
                        </div>
                        <div class="img-area">
                            <a href="<?php echo get_theme_mod( 'set_comites_link_1' ); ?>" target="_blank"><img src="<?php echo get_theme_mod( 'set_comites_img_1' ); ?>"></a>
                        </div>   
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="box">                            
                        <div class="title-area">
                            <h4><?php echo get_theme_mod( 'set_comites_title_2' ); ?></h4>
                        </div>
                        <div class="img-area">
                            <a href="<?php echo get_theme_mod( 'set_comites_link_2' ); ?>" target="_blank"><img src="<?php echo get_theme_mod( 'set_comites_img_2' ); ?>"></a>
                        </div>  
                    </div>                       
                </div>
                <div class="col-12 col-md-4">
                    <div class="box">                            
                        <div class="title-area">
                            <h4><?php echo get_theme_mod( 'set_comites_title_3' ); ?></h4>
                        </div>
                        <div class="img-area">
                            <a href="<?php echo get_theme_mod( 'set_comites_link_3' ); ?>" target="_blank"><img src="<?php echo get_theme_mod( 'set_comites_img_3' ); ?>"></a>
                        </div>                           
                    </div>
                </div>                    
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="title">
                <h1>Parceiros</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="partner">
                        <img src="<?php echo get_theme_mod( 'set_partners_img_1' ); ?>">
                    </div>                        
                </div>
                <div class="col-12 col-md-6">
                    <div class="partner">
                        <img src="<?php echo get_theme_mod( 'set_partners_img_2' ); ?>">
                    </div>
                </div>
            </div>
            <a href="<?php echo get_theme_mod( 'set_partners_link' ); ?>" class="bt-primary" target="_self">Ver todos</a>   
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="title">
                <h1>Últimas Notícias</h1>
            </div>
            <div class="row">
                <?php 
                    // the query
                    $the_query = new WP_Query( array(
                        'posts_per_page' => 3
                    )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="news-home">                        
                        <div class="thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
                        </div> 
                        <div class="news-content">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="meta-info">                                    
                                    <p><span><?php echo get_the_date(); ?></span></p>
                                </div>
                            <?php the_excerpt(); ?> 
                        </div> 
                    </div>          

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
            </div>
            <a href="<?php echo get_theme_mod( 'set_news_link' ); ?>" class="bt-primary" target="_self">Ver todos</a>
        </div>
    </section>

</div>
<?php
get_footer();
?>