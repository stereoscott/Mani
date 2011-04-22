<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package Mani
 * @subpackage Mani
 * @since Mani 1.0
 */
?>
        </div><!-- #wrapper -->

        <div id="footer-wrapper">
            <div class="center">
                <div id="footer">
                    <?php wp_nav_menu(array("theme_location" => "primary", "menu_id" => "footer-nav")); ?>
                    <?php get_sidebar( 'footer' ); ?>
                </div><!-- #footer -->
            </div><!-- .center -->
        </div><!-- #footer-wrapper -->
        <?php wp_footer(); ?>
    </body>
</html>