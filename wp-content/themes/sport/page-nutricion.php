<?php
/**
 * The main template file.
 *
 * Template Name: Page Nutrición
 * 
 */
 
$tlset = get_option( 'tlset' );
  

get_header(); 

?>
			
	<?php while ( have_posts() ) : the_post();
		$sbar = get_post_meta($post->ID, 'cro_sidebar', true);
		echo cro_headerimg($post->ID, 'page');			
	?>

	<div class="main singleitem">				
		<div class="row singlepage">


			<?php if ($sbar == 1) { ?>


				<div class="eight column">

					<ul class="cro_col_4 activitylist">
					<?php
						// check if the flexible content field has rows of data
						if( have_rows('cada_servicio') || have_rows('pagina_individual') ):

							// loop through the rows of data
							while ( have_rows('cada_servicio') ) : the_row();

								if( get_row_layout() == 'cada_servicio' ):
					?>
						<li class="cro_activityli clearfix">
							<div class="imgouter imgactivityshort">
								<?php $lacategoria = get_sub_field('categoria'); ?>
								<a href="<?php echo esc_url( get_category_link($lacategoria) ); ?>" class="teama">
									<img width="400" height="400" src="<?php the_sub_field('imagen');?>" class="attachment-team wp-post-image" alt="event6">
								</a>
								<h5 class="cro_accent cro_galtitle">
									<?php the_sub_field('titulo');?>
								</h5>
								<p class="cro_activitydesc">
									<?php the_sub_field('descripcion');?>
								</p>
								<div class="clarlabel">
									<!-- <a href="<?php the_sub_field('url_subpagina');?>"> -->
									
									<a href="<?php echo esc_url( get_category_link($lacategoria) ); ?>"> 
										Más información
									</a>
								</div>
							</div>
						</li>

								<?php
									else:
									?>
						<li class="cro_activityli clearfix">
							<div class="imgouter imgactivityshort">
								<?php $enlace = get_sub_field('enlace'); ?>
								<a href="<?php echo $enlace; ?>" class="teama">
									<img width="400" height="400" src="<?php the_sub_field('imagen');?>" class="attachment-team wp-post-image" alt="event6">
								</a>
								<h5 class="cro_accent cro_galtitle">
									<?php the_sub_field('titulo');?>
								</h5>
								<p class="cro_activitydesc">
									<?php the_sub_field('descripcion');?>
								</p>
								<div class="clarlabel">
									<!-- <a href="<?php the_sub_field('url_subpagina');?>"> -->
									
									<a href="<?php echo $enlace; ?>"> 
										Más información
									</a>
								</div>
							</div>
						</li>
								<?
									endif;

								endwhile;

							else :

								// no layouts found

							endif;

						?>

					</ul>

				</div>

				<div class="four column">
					<?php get_sidebar(); ?>
				</div>



			<?php } else { ?>

				<div class="twelve column">
					<div class="columnmakebackground">
						<?php get_template_part( 'public/tparts/content', 'page' ); ?>
					</div>
				</div>

			<?php } ?>
			
		</div>
	</div>

	<?php endwhile; // end of the loop. ?>


	<div class="feedbackholder">
	<?php if (isset($tlset['cro_feedbackbanner']) &&  $tlset['cro_feedbackbanner'] == 3) { ?>
			<?php echo get_feedbackcontent('random'); ?>
	<?php } ?>	
	</div>


<?php get_footer(); ?>