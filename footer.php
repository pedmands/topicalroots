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
			For consulting, investment, and other business related inquiries contact <a href="mailto:mainerootsconsulting@gmail.com">mainerootsconsulting@gmail.com</a> <span class="sep"> | </span> 207-219-8959
			<div class="disclaimer">
				Disclaimer: Topical Roots body oil is made in compliance with the Maine Medical Marijuana Program(Maine DHHS). Topical Roots body oil is not made in compliance with FDA guidelines. Our body oil is not intended to prevent, treat, or cure any disease or condition. That said, please judge our oil for yourself!
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
