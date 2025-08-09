<?php
/**
 * Sidebar Template
 *
 * This file is included for backwards compatibility with WordPress core.
 * Block themes typically don't use traditional sidebars, instead using
 * widget areas and block patterns for sidebar content.
 *
 * @package AlexBlockTheme
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Check if we have any active sidebar widgets
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="widget-area sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php else : ?>
	<!-- No sidebar widgets active. Block themes typically handle sidebar content through template parts or block patterns. -->
<?php endif;
?>
