<?php

/*
Template Name: General Template
*/

?>

<?php get_header(); ?>
    <div class="main-content">
        <section>
            <div class="container">               
                    <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post();
                    ?>
                    <article>
                            <h2 class="title-content"><?php the_title(); ?></h2>                            
                            <?php the_content(); ?>
                    </article>
                    <?php
                            endwhile;
                        else:
                    ?>
                    <p><?php _e( 'There´s nothing yet to be displayed...', 'cvsm' ); ?></p>
                    <?php endif; ?>                
            </div>            
        </section>        
    </div>    
<?php get_footer(); ?>
   

