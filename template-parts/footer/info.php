<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
		<?php 
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
		?>
		<div>
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Copyright STutors NZ', 'wp-rig' ) );
		?>
	
	<span class="sep"> | </span>
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
	</div>
</div><!-- .site-info -->
