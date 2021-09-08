<article <?php post_class(); ?>>
    <div class="main-news">                        
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
</article>