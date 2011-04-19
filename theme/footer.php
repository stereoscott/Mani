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
                    <ul id="footer-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Menus</a></li>
                        <li><a href="#">News &amp; Events</a></li>
                        <li class="last"><a href="#">Contact Us</a></li>
                    </ul><!-- #footer-nav -->
                    <?php get_sidebar( 'footer' ); ?>
                </div><!-- #footer -->
            </div><!-- .center -->
        </div><!-- #footer-wrapper -->
        <?php wp_footer(); ?>
    </body>
</html>