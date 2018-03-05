<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ewrk
 */

?>

	</div><!-- #content -->


	<footer class="site-footer" id="footer">
		<div class="footer-search">
			<?php get_search_form(); ?>	
		</div>
		<?php if (is_active_sidebar( 'footer-1' )): ?>		
			<aside id="widget-area-1" class="widget-area">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</aside><!-- #secondary -->
		<?php endif ?>
		<?php if (is_active_sidebar( 'footer-2' )): ?>	
			<aside id="widget-area-2" class="widget-area">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</aside><!-- #secondary -->	
		<?php endif ?>		
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
