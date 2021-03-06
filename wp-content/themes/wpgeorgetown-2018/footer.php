<?php
/**
 * Site Footer
 *
 * @package      WPGeorgetown2018
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '</div>'; // .site-inner
tha_footer_before();
echo '<footer class="site-footer" role="contentinfo"><div class="wrap">';
tha_footer_top();

echo '<p>Copyright &copy; ' . date( 'Y' ) . ' Georgetown TX WordPress Meetup. Theme available <a href="https://github.com/billerickson/WP-Georgetown">on GitHub</a>.</p>';

tha_footer_bottom();
echo '</div></footer>';
tha_footer_after();

echo '</div>';
tha_body_bottom();
wp_footer();

echo '</body></html>';
