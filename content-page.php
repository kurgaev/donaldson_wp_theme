<?php
/*
 * The template used for displaying page content in page.php
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content container-fluid">			
			<?php the_post(); ?>
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post -->
