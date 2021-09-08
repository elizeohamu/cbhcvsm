<?php get_header(); ?>
    <div class="main-content content">
        <div class="container">
            <h2><?php _e('Search results for:', 'cvsm'); ?></h2><?php echo get_search_query(); ?>   
            <div class="search-area">
                <?php get_search_form(); ?>
            </div>     
                <div>
                    <?php                         

                        while( have_posts() ): the_post();
                            get_template_part( 'template-parts/content', 'search' ); 

                            if( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            
                        endwhile;      
                        
                        the_posts_pagination(
                            array(                        
                                'prev_text' => 'Previous',
                                'next_text' => 'Next',
                                'screen_reader_text' => __( 'Search navigation' )
                            )
                        );
                    ?>                
                </div>
            </div>
    </div>
<?php get_footer(); ?>