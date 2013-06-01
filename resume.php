<?php 
/*

Template Name: Résumé Page

@package Ventana
@since:1.1 
*/
?>
  <html>
<?php get_header(); ?>


			<div class="resume">
				<div class='left'>
					<?php 
						$args = array('post_type' => 'education');
						$the_query = new WP_Query ($args);
						if ( $the_query -> have_posts()) : ?>
					<section class='education'>
						<h2><?php echo ucfirst($args['post_type']);?></h2>
						<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class='info'>
							<h3><?php the_title(); ?> 
							<span>[<?php the_field('attendance_start');
							echo "-";
							the_field('attendance_end'); ?>]</span></h3>
							<p><?php the_field('description'); ?></p>
						</div>
						<?php endwhile; ?>
					</section> 
					<?php endif; ?>

					<?php 
						$args = array('post_type' => 'projects');
						$the_query = new WP_Query ($args);
						if ( $the_query -> have_posts()) : ?>
					<section class='projects'>
						<h2><?php echo ucfirst($args['post_type']);?></h2>
						<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class='info'>
							<h3><a href="<?php the_field('code_url') ;?>"><?php the_title(); ?></a>
							<span>[<?php the_field('creation_start');
							echo "-";
							the_field('creation_end'); ?>]</span></h3>
							<p><?php the_field('description'); ?></p>
						</div>
						<?php endwhile; ?> 
					</section>
					<?php endif; ?>

					<?php 
						$args = array('post_type' => 'work_experience');
						$the_query = new WP_Query ($args);
						if ( $the_query -> have_posts()) : ?>
					<section class='experiance'>
						<h2><?php echo ucfirst(Experiance);?></h2>
						<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class='info'>
							<h3><a href="<?php the_field('url') ;?>"><?php the_title(); ?></a> 
							<?php echo "-"; the_field('title') ;?>
							<span>[<?php the_field('experience_start');
							echo "-";
							the_field('experience_end'); ?>]</span></h3>
							<p><?php the_field('description'); ?></p>
						</div>
						<?php endwhile; ?>
					</section> 
					<?php endif; ?>

					<?php
						$args = array('post_type' => 'organizations');
						$the_query = new WP_Query ($args);
						if ( $the_query -> have_posts()) : ?>
					<section class='organizations'>
						<h2><?php echo 'Organizations';?></h2>
						<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class='info'>
							<h3><a href="<?php the_field('url') ;?>"><?php the_title(); ?></a> 
							<?php echo "-"; the_field('title') ;?>
							<span>[<?php the_field('membership_start');
							echo "-";
							the_field('membership_end'); ?>]</span></h3>
							<p><?php the_field('description'); ?></p>
						</div>
						<?php endwhile; ?>
					</section> 
					<?php endif; ?>
				</div>

				<div class='right'>

					<?php 
						$args = array('post_type' => 'awards');
						$the_query = new WP_Query ($args);
						if ( $the_query -> have_posts()) : ?>
					<section class='awards'>
						<h2><?php echo ucfirst($args['post_type']);?></h2>
						<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class='info'>
							<h3><?php the_title(); ?> 
							<span>[<?php the_field('date');?>]</span></h3>
							<p><?php the_field('description'); ?></p>
						</div>
						<?php endwhile; ?>
					</section> 
					<?php endif; ?>
					

					<?php
						$args = array('post_type' => 'languages');
						$the_query = new WP_Query ($args);
						if ( $the_query -> have_posts()) : ?>
					<section class='languages'>
						<h2><?php echo ucfirst($args['post_type']);?></h2>
						<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class='info'>
							<h3><?php the_title(); ?></h3>
							
							<p>Fluent since <?php the_field(year); ?>.</p>
						</div>
						<?php endwhile; ?> 
					</section>
					<?php endif; ?>

					<?php
						$args = array('post_type' => 'skills');
						$the_query = new WP_Query ($args);
						if ( $the_query -> have_posts()) : ?>
					<section class='skills'>
						<h2><?php echo ucfirst($args['post_type']);?></h2>
						<?php while ( $the_query -> have_posts()) : $the_query -> the_post(); ?>
						<ul class='skill'>
							<li><?php the_title();?></li>
						</ul>
						<?php endwhile; ?> 
					</section>
					<?php endif; ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
	</body>
</html>