<?php
/**
 * The template for displaying  the woo-commerce shop
 *
 *
 * Template Name: Woo Commerce
 */
 
$tlset = get_option( 'tlset' );
  

get_header(); ?>


	<?php 
	$sbar = get_post_meta(get_option('woocommerce_shop_page_id'), 'cro_sidebar', true);
	echo cro_headerimg(get_option('woocommerce_shop_page_id'), 'page');			
	 ?>

	<div class="main singleitem">				
		<div class="row singlepage">

			<?php if (isset($tlset['cro_ttablebanner']) && $tlset['cro_ttablebanner'] == 3) { ?>
				<?php get_template_part( 'public/tparts/upcomming-times'); ?>	
			<?php } ?>	


			<?php if ($sbar == 1) { ?>


				<div class="eight column">
					<?php woocommerce_content(); ?>
				</div>

				<div class="four column">
					<?php get_sidebar('woo'); ?>
				</div>



			<?php } else { ?>

				<div class="twelve column">
					<div class="columnmakebackground">
						<?php woocommerce_content(); ?>
					</div>
				</div>

			<?php } ?>
			
		</div>
	</div>



	<div class="feedbackholder">
	<?php if (isset($tlset['cro_feedbackbanner']) &&  $tlset['cro_feedbackbanner'] == 3) { ?>
			<?php echo get_feedbackcontent('random'); ?>
	<?php } ?>	
	</div>


<?php get_footer(); ?>