<?php get_header(); ?>
    <div class="main-content">
        <section>
            <div class="container">
                <div class="row">
                   <div class="error-404">
                    <header>
                        <h1><?php _e('Page not found', 'cvsm'); ?></h1>
                        <p><?php _e('Unfortunately, the page you tried to reach does not exist on this site.', 'cvsm'); ?></p>
                    </header>

                    <div class="error">
                        <p><?php _e('How about doing a search?', 'cvsm'); ?></p>
                        <?php get_search_form(); ?>
                        
                    </div>
                   </div>
                </div>
            </div>
        </section>
    </div>    
<?php get_footer(); ?>
   