<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>



<?php

/**
 * The footer section for our theme.
 *
 *
 * @package Cromathemes
 * @subpackage Sport
 * @since 1.0
 */


?>


</div> 


<div class="footer">
	<div class="footinner">
		<div class="row">
			<div class="four columns">
				&nbsp;
				<?php if ( is_active_sidebar( 'cro_footleft' ) ) { 
					echo '<ul class="footwidget">';
					dynamic_sidebar( 'cro_footleft' );
					echo '</ul>';
				} ?>					
			</div>

			<div class="four columns">
				&nbsp;
				<?php if ( is_active_sidebar( 'cro_footcent' ) ) { 
					echo '<ul class="footwidget">';
					dynamic_sidebar( 'cro_footcent' );
					echo '</ul>';
				} ?>					
			</div>

			<div class="four columns">
				&nbsp;
				<?php if ( is_active_sidebar( 'cro_footright' ) ) { 
					echo '<ul class="footwidget">';
					dynamic_sidebar( 'cro_footright' );
					echo '</ul>';
				} ?>					
			</div>
		</div>
	</div>


	<div class="footscribe">
		<div class="row">
			<div class="six columns">
				<div id="site-info">
					<a href="<?php echo home_url( '/' ) ?>" class="whites" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						© Servicio de Nutrición Deportiva UMH, 2014 
					</a>
					<!--
<a href=""> | </a>
					<a href="">
						Política de privacidad
					</a>
-->
				</div>
			</div>

			<div class="six columns">

			</div>
		</div>
	</div>
</div>
</div>
<?php do_action('croma_sch'); ?>
<?php do_action('croma_footstuff'); ?>
<?php wp_footer(); ?>
</body>
</html>
