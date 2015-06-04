<?php get_header(); ?>

    <section class="container">
        <div class="attention">
            <h1 class="single-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div><!-- attention -->
    </section><!-- container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
