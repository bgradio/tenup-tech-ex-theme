<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

    <div id="primary">
      <main id="main" role="main">
        <div id="content">
            <?php if( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                  <?php endwhile; ?>
              <?php endif; ?>
          </div>
      </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
