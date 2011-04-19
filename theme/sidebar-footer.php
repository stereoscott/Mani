<?php
/**
 * The Footer widget areas.
 *
 * @package Mani
 * @subpackage Mani
 * @since Mani 1.0
 */
?>

<?php if (!is_active_sidebar( 'footer-widget-area'  )): ?>
<p><strong>341 E Liberty, Ann Arbor, MI 48104 734.000.0000</strong> &copy;2011 Mani Osteria &amp; Bar. All Rights Reserved</p>
<?php else: ?>
<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
<?php endif ?>