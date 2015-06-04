<?php get_header(); ?>

    <section class="container">
        <div class="attention">
          <h1 class="title"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
          <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        </div><!-- attention -->
    </section><!-- container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
