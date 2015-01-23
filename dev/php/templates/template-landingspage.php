<?php
/*
Template Name: Landingspage
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridContainer wrapper-content u-gridRow">
			<div class="u-gridRow u-gridCol8">
				<div class=" u-gridCol12">
					<h2>Welkom op de website van Administratiekantoor R. Hunter B.V. Ons kantoor is gelegen in Amersfoort en verricht ondermeer de volgende diensten:</h2>
					<div class="wrapper-content-left ">
						<ul>
							<li><p>Volledige administratie voor ZZP en MKB bedrijven</p></li>
							<li><p>Salarisadminstratie</p></li>
							<li><p>Belastingaangiften</p></li>
							<li><p>Inkomstenbelasting</p></li>
							<li><p>Omzetbelasting</p></li>
							<li><p>Vennootschapsbelasting</p></li>
							<li><p>Dividendbelasting</p></li>
							<li><p>Samenstellen jaarrekeningen</p></li>
							<li><p>Samenstellen en deponering </p></li>
							<li><p>Publicatiestukken</p></li>
							<li><p>Kamer van koophandel</p></li>
						</ul>
					</div>	
					<div class="content-border"></div>
					<div class="button-wrapper">
						<a class="button-skin" href="#">Meer...</a>
					</div>
				</div>
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
