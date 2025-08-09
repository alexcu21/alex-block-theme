<?php
/**
 * Footer Template
 *
 * This file is included for backwards compatibility with WordPress core.
 * Block themes should use template parts instead of this file.
 *
 * @package AlexBlockTheme
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the footer template part if it exists
if ( function_exists( 'block_template_part' ) ) {
	block_template_part( 'footer' );
} else {
	// Fallback for older WordPress versions
	get_template_part( 'parts/footer' );
}

wp_footer();
?>
</body>
</html>
