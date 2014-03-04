<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>


<?php

/**
 * The header section for our theme.
 *
 *
 * @package Cromathemes
 * @subpackage Sport
 * @since 1.0
 */


$tlset = get_option( "tlset" );

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes( 'xhtml' ); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php
echo '<title>' .  wp_title('-' , 0, 'right' ) . '</title>';

$ap 		= get_mapstack();
if ($ap != '') {echo $ap;}
$bgimg 		= (isset($tlset['cro_logobg']) && $tlset['cro_logobg'] != 2 )? 'cro_logowithbg' : 'cro_logonobg';

wp_head();

?>


<link type="text/css" rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/public/plugins/jquery.dropdown.css" />
<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/public/plugins/jquery.dropdown.js"></script>
<!--
<script type="text/javascript" src="//use.typekit.net/mms7zhr.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/public/styles/scripts.js"></script>

</head>



<?php 
	if ($ap != '') { ?>
		<body <?php body_class(); ?> onload="initialize()">
	<?php } else { ?>
		<body <?php body_class(); ?>>
	<?php } 
?>

<div class="outer">
	<div class="logoresponsive">
		<?php 
			if(isset($tlset['logo']) && $tlset['logo'])  {
				echo '<a href="'. esc_url( home_url( '/' ) ) .'" class="logolink" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home"><img class="tllogo ' .  $bgimg . '" title="' .  esc_attr( get_bloginfo( 'name', 'display' )) . '" src="' .  $tlset['logo'] . '" alt="' .  esc_attr( get_bloginfo( 'name', 'display' )) . '" /></a>';
			} else {
				echo '&nbsp;';
			}
		?>
					<div id="adaptative" class="visible-phone">
						<span data-dropdown="#dropdown-1">
							Menú
						</span>
						<div id="dropdown-1" class="dropdown dropdown-tip">
						    <ul class="dropdown-menu">
						        <li><a href="/quienes-somos">Quiénes somos</a></li>
						        <li><a href="/enlaces">Enlaces</a></li>
						        <li><a href="/contact">Contacto</a></li>
						        <li class="dropdown-divider"></li>
						        <li><a href="/servicios">Servicios</a></li>
						        <li><a href="/nutricion-y-salud">Nutrición y salud</a></li>
						        <li><a href="/nutricion-y-deporte">Nutrición y deporte</a></li>
						        <li><a href="/news">Noticias</a></li>
						    </ul>
						</div>
					</div>
	</div>
	<div class="mbod">
		<div class="topper">
			<div id="mainmen">
				<div class="row">
					<div class="logorow">
						<?php 
						if(isset($tlset['logo']) && $tlset['logo'])  {
							echo '<a href="'. esc_url( home_url( '/' ) ) .'" class="logolink" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home"><img class="tllogo ' .  $bgimg . '" title="' .  esc_attr( get_bloginfo( 'name', 'display' )) . '" src="' .  $tlset['logo'] . '" alt="' .  esc_attr( get_bloginfo( 'name', 'display' )) . '" /></a>';
						} else {
							echo '&nbsp;';
						}
						?>
					</div>
					<div id="left-menu">
						<?php 
							if ( has_nav_menu('primary' ) ) {
								wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'menu_id'  => 'cro-menu' ) ); 
							} 
						?>
					</div>
					<div id="access">	
						<?php if ( dynamic_sidebar('top_menu_connect') ) : else : endif; ?>
						<?php echo ntfetch_social(); ?>	
					</div>
				</div>
			</div>
			<div class="row">
		</div>
	</div>
	<?php if( is_home() || is_front_page() || is_page('Noticias') ) { ?>
	<div id="banner-brand" class="img" style="background-image:url('<?php echo get_bloginfo('template_url')?>/public/styles/estilos/images/cienciaydeporte.png');">
		<div id="top-banner">
			<div id="marcas" class="row">
				<a href="" class="float-left entrada">
					<img src="<?php echo get_bloginfo('template_url')?>/public/styles/estilos/images/centro.png" alt="">
				</a>
				<a href="" class="float-right">
					<img src="<?php echo get_bloginfo('template_url')?>/public/styles/estilos/images/umh.png" alt="">
				</a>
			</div>
			<h1>
				Servicio de 
				<span>nutrición y dietética </span>
				<br>
				para la actividad física y el 
				<span>deporte</span>
			</h1>
		</div>
		<div id="bottom-banner">
			<div class="row">
				<a class="cuatro column" href="/servicios">
					<div class="icono iuno">
					</div>
					<h4>
						Servicios
					</h4>
					<!-- <img class="fondo" src="http://localhost:8888/wp-content/uploads/2013/08/buildm2-400x270.jpg" alt=""> -->
				</a>
				<a class="cuatro column" href="/nutricion-y-salud">
					<div class="icono idos">
					</div>
					<h4>
						Nutrición<span> y salud</span>
					</h4>
				</a>
				<a class="cuatro column" href="/nutricion-y-deporte">
					<div class="icono itres">
					</div>
					<h4>
						Nutrición<span> y deporte</span>
					</h4>
				</a>
				<a class="cuatro column" href="/news">
					<div class="icono icuatro">
					</div>
					<h4>
						Noticias
					</h4>
				</a>
			</div>
		</div>
	</div>
	<?php } ?>
