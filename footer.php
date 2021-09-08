<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="logo">
                    <img src="<?php echo get_theme_mod( 'set_logo' ); ?>">
                </div>
                <div class="social-icons">
                    <?php if( get_theme_mod( 'set_facebook_link' ) !== '') { ?>
                        <a href="<?php echo get_theme_mod( 'set_facebook_link' ); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                    <?php } ?> 
                    <?php if( get_theme_mod( 'set_instagram_link' ) !== '') { ?>
                        <a href="<?php echo get_theme_mod( 'set_instagram_link' ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <?php } ?> 
                    <?php if( get_theme_mod( 'set_twitter_link' ) !== '') { ?>
                        <a href="<?php echo get_theme_mod( 'set_twitter_link' ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <?php } ?> 
                    <?php if( get_theme_mod( 'set_linkedin_link' ) !== '') { ?>
                        <a href="<?php echo get_theme_mod( 'set_linkedin_link' ); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <?php } ?>                                         
                </div>                    
            </div>
            <div class="address col-12 col-md-4">
                <h4><?php echo get_theme_mod( 'set_contact_title' ); ?></h4>
                <p><?php echo get_theme_mod( 'set_contact_text' ); ?></p>
            </div>
            <div class="contact col-12 col-md-4">
                <h4>Links</h4>
                    <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu',
                                    'menu_class' => 'footer-links'
                                )
                            ); 
                    ?>  
            </div>
        </div>
    </div>
    <div class="footer-credits">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    © <?php echo date("Y"); ?> Comitês de Bacias Hidrográficas  
                </div>
                <div class="col-12 col-md-6">
                    Desenvolvido por <a href="http://www.elizeohamu.com.br" target="_blank">Elízeo Hamu</a>
                </div>
            </div>
        </div>
    </div>   
    <script>
            (function($){
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip(); 

                    $('.carousel').carousel({
                        interval: 20000
                    });
                })
            })(jQuery);
        </script>     
</footer>
<?php wp_footer(); ?>   
     
</body>
</html>