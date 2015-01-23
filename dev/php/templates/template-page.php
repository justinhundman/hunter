<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridContainer wrapper-content u-gridRow">
			<div class="u-gridRow u-gridCol8">
				<div class=" u-gridCol12">
					<h2><?php the_title(); ?></h2>
					<div class="wrapper-content-left ">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>	
					<div class="content-border"></div>
					<div class="button-wrapper">
						<a class="button-skin" href="#">Meer...</a>
					</div>
				</div>
			</div>
			<div class=" u-gridCol4 right-side">
				<h2>Heeft u vragen ? vul het onderstaande formulier in</h2>
					<div class="wrapper-content-right ">
						<?php echo do_shortcode('[gravityform id=1 name=ContactUs title=false description=false]'); ?>
					</div>
				<div class="content-border right-border-bottom"></div>
			</div>
		</div> 	
	<?php endwhile; endif; ?> 
	

<?php get_footer(); ?>
