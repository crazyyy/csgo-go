        </section>
        <footer>

        <div class="logo">
            <?php if ( is_front_page() && is_home() ){ } else { ?>
                <a href="<?php echo home_url(); ?>">
            <?php  } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
                </a>
            <?php } ?>
        </div>
        <!-- /logo -->

        <?php wpeFootNav(); ?>
        </footer>
    </div>
    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

</body>
</html>
