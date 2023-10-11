<?php
/**
 * Title: Heading on left
 * Slug: twentytwentyfour/intro-text-left
 * Categories: text
 * Inserter: no
 */
?>

<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"890px"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-xx-large-font-size" style="line-height:1.2"><?php 
		echo wp_kses_post( __( 'I’m <em>Leia Acosta</em>, a passionate photographer who finds inspiration in capturing the fleeting beauty of life.' ) ); 
	?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
