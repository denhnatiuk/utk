<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package utk
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Security-Policy" 
		  content="default-src 'self' https://utk.net.ua http://utk.net.ua https://*.google.com https://*.googleapis.com https://*.gstatic.com;
		  		   font-src 'self' https://utk.net.ua http://utk.net.ua https://*.google.com https://*.googleapis.com https://*.gstatic.com;
		  		   style-src 'self' 'unsafe-inline' ;
				   script-src 'self';
				   object-src  https://utk.net.ua http://utk.net.ua https://*.google.com https://*.googleapis.com https://*.gstatic.com ;
				   style-src-attr 'self' 'unsafe-inline' ;
				   img-src 'self'  'unsafe-inline' ">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="preload" href="https://utk.net.ua/wp-content/themes/utk/lib/bootstrap/dist/fonts/glyphicons-halflings-regular.woff2" as="font">
	<link rel="preload" href="https://utk.net.ua/wp-content/themes/utk/static/fonts/kanit-latin.woff2" as="font"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  data-spy="scroll" data-target="#scrollspy" data-offset="100">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'utk' ); ?></a>

	<?php
	$background = get_template_directory_uri().'/static/images/block-bg-1.jpg';

	if (is_home()){
		$headerClass = ' hero-header home';
	} else {
		$headerClass = ' shrink';
	}

	if (has_custom_logo()){
		$logo = get_custom_logo();
	} else{
		$logo = '<img class="header-logo" src="'.get_template_directory_uri().'/static/images/utklogo.png" style=""></img>';
	}
	?>

	<header class="header <?php echo $headerClass ?>" area-expand="true"
		style="background: url(<?php echo $background ?>);
						background-position: right;
						background-clip: padding-box;
						background-size: cover;
						background-repeat: no-repeat;
						background-attachment: fixed; ">
    <div class="container-fluid">
			<div class="row">
      	<nav class="navbar navbar-default navbar-inverse tyre" role="navigation" area-expand="false">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <div class="brand-logo">
									<h3 class="navbar-name">ЮТК</h3>
									<?php //echo $logo ?>
              	</div>
              </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav navbar-left">
                  <li><a class="navbar-link" href="#services">УСЛУГИ</a></li>
                  <li><a class="navbar-link" href="#clients">КЛИЕНТЫ</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a class="navbar-link" href="#team">КОМАНДА</a></li>
                <li><a class="navbar-link" href="#contacts">КОНТАКТЫ</a></li>
              </ul>
            </div>
					</nav>
      </div>
    </div>
    <canvas id="network"></canvas>
		<div class="container-fluid full">
    	<div class="row">
				<?php
					if (has_custom_logo()):
						the_custom_logo();
					else:
						echo '<img src="'.get_template_directory_uri().'/static/images/logool.png" style="display:block; margin:auto; max-width:250px"></img>';
						// echo '<img src="'.get_template_directory_uri().'/assets/images/utklogo.png" style="display:block; margin:auto"></img>';
					endif;
					?>
        <h1 class="brand">
					<?php
					 bloginfo( 'name' );
					?>
          <br/>
          <?php
						$utk_description = get_bloginfo( 'description', 'display' );
						if ( $utk_description || is_customize_preview() ) :
						?>
							<span class="orange lead site-description"><?php echo $utk_description; /* WPCS: xss ok. */ ?></span>
						<?php
						else:
							echo 'Качественная и своевременная доставка Вашей продукции.';
					 	endif; ?>
        </h1>
      </div>
    </div>
  </header>
  <main class="container-fluid">





	<?php
	if ( is_front_page() && is_home() ) :
	?>
	<?php
	else :
	?>
	<?php
	endif;
	// the_custom_logo();
	// $utk_description = get_bloginfo( 'description', 'display' );
	// if ( $utk_description || is_customize_preview() ) :
	?>
