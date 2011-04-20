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
        <?php get_sidebar(); ?>
    </div><!-- .col -->

    <div class="col">
      <!-- this will be a recent news block. category posts widget perhaps ? -->
        <h2>grand opening</h2>
        <p class="date">april 17th, 2011</p>
        <p>Lorem ipsum dolor sit amet, consectetur ad ipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna 
            aliqua. Filler text.</p>
        <p><a href="#" title="Grand Opening">read more</a></p>
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
        <h2>location &amp; hours</h2>
        <p>
            341 E. Liberty, Ann Arbor, MI 48104<br />
            734.000.0000
        </p>
        <p>
            <strong>Dinner:</strong> Tue-Sat 5:00pm-12:00am, Sun 5:00pm-10:00pm<br />
            <strong>Lunch:</strong> Wed-Sat 11:00am-3:00pm
        </p>
    </div><!-- .col end -->
    
    <?php
	/* Run the loop to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-index.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'index' );
	?>
            
    <br class="clear" />
</div><!-- #columns -->

<?php get_footer(); ?>