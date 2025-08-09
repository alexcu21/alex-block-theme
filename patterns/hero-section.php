<?php
/**
 * Title: Hero Section
 * Slug: alexs-block-theme/hero-section
 * Categories: featured
 * Description: A hero section with heading, description, button, and image
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"1rem","right":"1rem"}}},"backgroundColor":"light","className":"hero-section"} -->
<div class="wp-block-group hero-section has-light-background-color has-background" style="padding-top:4rem;padding-bottom:4rem;padding-left:1rem;padding-right:1rem">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"700","lineHeight":"1.1"}},"textColor":"dark"} -->
				<h1 class="wp-block-heading has-dark-color has-text-color" style="font-size:3.5rem;font-weight:700;line-height:1.1">Join the<br>ultimate tech<br>book club</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.6"}},"textColor":"gray-600"} -->
				<p class="has-gray-600-color has-text-color" style="font-size:1.125rem;line-height:1.6">Turn your reading time into learning time with fellow tech enthusiasts. Get curated recommendations, join vibrant discussions, and level up your skills one chapter at a time.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:2rem">
					<!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}},"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.5px"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:1rem;padding-bottom:1rem;padding-left:2rem;padding-right:2rem;font-weight:600;letter-spacing:0.5px;text-transform:uppercase">Review Membership Options</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:2rem">
					<!-- wp:image {"width":"60px","height":"60px","scale":"cover","sizeSlug":"thumbnail","style":{"border":{"radius":"50px"}}} -->
					<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img alt="Member avatars" style="border-radius:50px;object-fit:cover;width:60px;height:60px" /></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"gray-600"} -->
					<p class="has-gray-600-color has-text-color" style="font-size:0.875rem"><strong>500+</strong> developers already joined</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img alt="Tech professionals collaborating" style="border-radius:12px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
