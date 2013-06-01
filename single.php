<?php/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Ventana 
 * @author         Ishtyaq Habib 
 * @copyright      2013  
 * @filesource     wp-content/themes/ventana/single.php
 * @since          1.0
 **/?>
<!DOCTYPE HTML>
<html>
<?php get_header(); ?>
		<article class="post">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
			<p class="post-time">On <?php the_date();?></p>
				<h2 class="blog-post"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2> 
				<?php the_content(); ?>
				<?php endwhile; ?> 
			<?php endif; ?>
				</article>
				<div class="postnav">
					<div class="alignleft">
						<span>&larr; Previous Post:</span>
						<br>
						<?php previous_post_link( '%link', '%title' ); ?>
						</div>
					<div class="alignright">
						<span>Next Post &rarr;</span>
						<br>
						<?php next_post_link( '%link', '%title') ; ?>
					</div>
				</div> <!-- end navigation -->
		</div>
<?php get_footer(); ?>
	</body>
</html>