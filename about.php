<?php 
/*

Template Name: About Page

@package Ventana
@since:1.0 
*/

?>
  <html>
<?php get_header(); ?>
			<div class="biography">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<h2 id="about-title"><?php the_title(); ?></h2> 
					<?php the_content(); ?>
					<?php endwhile; ?> 
				<?php endif; ?>
				<?php echo do_shortcode( '[google-calendar-events id="1" type="ajax" title="Events on" max="10"]' ); ?>
			</div>
		</div>
<?php get_footer(); ?>
	</body>
</html>