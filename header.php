<?php
/**
 * Header Template
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
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Include the header template part if it exists
if ( function_exists( 'block_template_part' ) ) {
	block_template_part( 'header' );
} else {
	// Fallback for older WordPress versions
	get_template_part( 'parts/header' );
}
?>
