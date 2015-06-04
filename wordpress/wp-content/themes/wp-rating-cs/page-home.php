<?php /* Template Name: Home Page Template */ get_header(); ?>

  <div class="item_blocks-quadro">
    <?php
      if( have_rows('quard') ):
        while ( have_rows('quard') ) : the_row();
    ?>
        <a href="<?php the_sub_field('links'); ?>">
          <img src="<?php the_sub_field('img'); ?>" alt="">
        </a>
    <?php endwhile;
      else :
          // no rows found
      endif; ?>
        <div class="clr"></div>
    </div><!-- item_blocks-quadro -->

    <div class="item_blockss">
      <a class="key_block" href="<?php the_field('link-big'); ?>">
        <img src="<?php the_field('img-big'); ?>" alt="">
      </a>
    </div><!-- item_blockss -->

    <section class="container">
        <div class="attention">
            <?php the_content(); ?>
        </div><!-- attention -->
    </section><!-- container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
