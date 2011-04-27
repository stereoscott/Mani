<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mani
 * @subpackage Mani
 * @since Mani 1.0
 */

get_header(); ?>

<div id="columns" class="center">

    <div class="col">
        <div class="widget-area" role="complementary">
    			<ul class="xoxo">

            <?php dynamic_sidebar( 'home-widget-left' ); ?>

    			</ul>
    		</div><!-- #primary .widget-area -->
    </div><!-- .col -->

    <div class="col mid">
      <!-- lets make this the main body copy for the page -->
      <?php while (have_posts()): the_post(); ?>
        <div class="entry-content">
  				<?php the_content(); ?>
  			</div><!-- .entry-content -->
  		<?php endwhile; ?>  		
    </div><!-- .col mid -->

    <div class="col end">
      <!-- another widget area for the home page -->
      <div id="secondary" class="widget-area" role="complementary">
    			<ul class="xoxo">

            <?php dynamic_sidebar( 'home-widget-right' ); ?>

    			</ul>
    		</div><!-- #primary .widget-area -->
    </div><!-- .col end -->
                
    <br class="clear" />
</div><!-- #columns -->

<?php get_footer(); ?>