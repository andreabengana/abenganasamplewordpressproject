<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('row search-result'); ?>>

	<div class="col-md-3">
		<?php if(has_post_thumbnail()): ?>
		<div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
		<?php else:?>
		<div class="image-wrapper">No thumbnail available.</div>
		<?php endif; ?>
	</div>

	<div class="col-md-9">
		<header class="entry-header">
			<?php the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php wp_bootstrap_starter_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="tags">
			<?php 
			$str = get_post_type();;
			printf("<div class='tag p-0'>%s</div>",$str);
			?>
		</div>

		<div class="entry-summary">

			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php wp_bootstrap_starter_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</div><!-- #post-## -->