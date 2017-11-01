<?php
/**
 * The template used for displaying content in template-home.php
 */
?>

<div class="large-4 columns" style="min-height:320px;">

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

		<div class="featured-image" style="max-height:200px;overflow:hidden;">
			<?php // Featured Image
			if ( has_post_thumbnail() ) { 

				echo '<a href="' . esc_url( get_permalink() ) . '">';
				the_post_thumbnail( 'post-image' );
				echo '</a>';

			} // end featured image ?>
		</div><!-- .featured-image -->

		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header><!-- .entry-header -->


	</article><!-- #post-## -->

</div><!-- .large-4 -->