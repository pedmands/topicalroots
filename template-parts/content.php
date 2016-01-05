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
// Display a thumb tack in the top right hand corner if this post is sticky
if (is_sticky()) {
    echo '<i class="fa fa-thumb-tack sticky-post"></i>';
}
?>

	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="date-block">
			<?php topicalroots_posted_on('M'); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<span class="title-block">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <div class="category-author">
                <?php topicalroots_category_author(); ?>
            </div>
        </span>

	</header><!-- .entry-header -->
	<?php
if (has_post_thumbnail()) {
    echo '<div class="small-index-thumbnail clear">';
    echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'topicalroots') . get_the_title() . '" rel="bookmark">';
    echo the_post_thumbnail('index-thumb');
    echo '</a>';
    echo '</div>';
} else {
	echo '<div class="title-spacer">';
	echo '</div>';
}
?>

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

        <?php 
	        if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
	        echo '<span class="comments">';
	        comments_popup_link( __( 'Leave a comment', 'topicalroots' ), __( '<span class="has-comment">1 Comment</span>', 'topicalroots' ), __( '<span class="has-comment">% Comments</span>', 'topicalroots' ) );
	        echo '</span>';
	        }
        ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
