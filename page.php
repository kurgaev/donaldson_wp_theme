<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php get_template_part( 'content', 'page' ); ?>
			
		</div>
	</div>
	
<?php get_footer(); ?>
