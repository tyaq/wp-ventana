<?php 
/*
@package Ventana
@since:1.0 
*/

?>
<!DOCTYPE HTML>
<html>
<?php get_header(); ?>
			<div class="left">
				<section class="blog">
					<h2 id="blog-title">Tyaqin&#39; About Stuff</h2>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post">
						<p class="post-time">On <?php the_date();?></p>
						<h3 class="blog-post"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h3> 
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink() ;?>">&rarr; Read the Full Story</a>
						<hr>
						</div>  
					<?php endwhile; else: ?>
						<p>There are no posts</p>
					<?php endif; ?>
				</section>
			</div>

			<div class="right">
				<section class="about">
				<?php 
					$args = array('post_type' => 'bio');
					$the_query = new WP_Query ($args);
					if ( $the_query -> have_posts()) : ?>

					<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
					<h2 id="about-title"><?php the_title(); ?> </h2>
					<?php the_field('bio'); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				</section>

				<section class="work">
					<h2 id="work-title">Projects</h2>
					<?php 
					$args = array('post_type' => 'projects');
					$the_query = new WP_Query ($args);
					if ( $the_query -> have_posts()) : ?>
					
					<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class='project'>
					<h3><a href="<?php the_field('code_url') ;?>"><?php the_title(); ?></a></h3>
					<p><?php the_field('description'); ?></p>
					</div>
					<?php endwhile; ?> 
					<?php endif; ?>
				</section>
			</div>
		</div>
<?php get_footer(); ?>
	</body>
</html>