<?php
/*
Template Name: Page-contact
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridContainer wrapper-content u-gridRow">
			<div class="u-gridRow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/financebanner2.png">
			</div>
			<div class="u-gridRow u-gridCol8">
				<div class=" u-gridCol12">
					<h2><?php the_title(); ?></h2>
					<div class="wrapper-content-left ">
						<div class="adress-info">
								<p>Administratiekantoor R. Hunter B.V.</p>
								<p>Algolweg 11-a</p>
								<p>3821 BG Amersfoort</p>
								<p>Email: robhunter@tak-administratie.nl</p>
								<p>Tel: 0297800560</p> 
						</div>
					</div>	
					<div class="content-border"></div>
					<div class="button-wrapper"></div>
				</div>
				<div class=" u-gridCol12">
					<h2>Kaart</h2>
					<div class="">
						<div id="map_canvas"></div>
					</div>	
					<div class="content-border"></div>
					<div class="button-wrapper"></div>
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
