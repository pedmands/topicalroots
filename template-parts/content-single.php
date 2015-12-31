<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Topical_Roots
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php 
    if (has_post_thumbnail()) {
        echo '<div class="single-post-thumbnail clear">';
        echo the_post_thumbnail('large-thumb');
        echo '</div>';
    }
?>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		
		<?php endif; ?>

		<span class="title-block">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <div class="category-author">
                <?php topicalroots_category_author(); ?> on <?php the_date('F j, Y'); ?>
            </div>
        </span>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'topicalroots' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'topicalroots' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
            echo get_the_tag_list( '<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>', '</li></ul>' );
        ?>

        
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
