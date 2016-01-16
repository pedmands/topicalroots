<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topical_Roots
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if(!is_front_page()) { get_sidebar( 'footer' ); } ?>
		
		<div class="site-info">
			For consulting, investment, and other business related inquiries contact mainerootsconsulting@gmail.com <span class="sep"> | </span> 207-219-8959
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
