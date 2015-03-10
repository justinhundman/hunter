<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Administratiekantoor R. Hunter B.V.</p>
								<p>Algolweg 11-a</p>
								<p>3821 BG Amersfoort</p>
								<p>Email: robhunter@tak-administratie.nl</p>
								<p>Tel: 0297800560</p>
							</div>
	
						</div>					 
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

