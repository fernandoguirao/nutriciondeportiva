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
					?><li id="text-4" class="widget-container widget_text clear">
						<div class="textwidget">
							<img class="tllogo cro_logonobg" title="Nutrición deportiva" src="<?php echo site_url(); ?>/wp-content/uploads/2013/12/logo-small-e1386930722867.png" alt="Nutrición deportiva">
						</div>
					</li><?php
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
					<a href=""> | </a>
					<a href="<?php echo home_url( '/' ) ?>/politicadeprivacidad.pdf">
						Política de privacidad
					</a>

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
<script>
	if ($j('.logo-home').length > 0){
	$j(window).scroll(function () {
		if ($j('.logo-home').hasClass('no-activado')){
	    if ($j(window).scrollTop()  > 240) {
	        $j('.logo-home').removeClass('no-activado');
	        $j('.logo-home').addClass('activado');
	    }
	  }
	  if ($j('.logo-home').hasClass('activado')){
	    if ($j(window).scrollTop()  < 240) {
	        $j('.logo-home').removeClass('activado');
	        $j('.logo-home').addClass('no-activado');
	    }
		}
});
}

// var showSearch = function() {
//   $j('.topper #access div:nth-child(2)').addClass('hidden');
// }

// $j('.showSearch').click(function(){
// 	$j('.topper #access div:nth-child(2)').addClass('hidden');
// });

</script>
</body>
</html>
