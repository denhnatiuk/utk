<?php
/**
 * utk functions and definitions
 *
 * @link https://utk.com
 *
 * @package utk
 */
 if ( ! function_exists( 'utk_setup' ) ) :
 	/**
 	 * Sets up theme defaults and registers support for various WordPress features.
 	 *
 	 * Note that this function is hooked into the after_setup_theme hook, which
 	 * runs before the init hook. The init hook is too late for some features, such
 	 * as indicating support for post thumbnails.
 	 */
 	function utk_setup() {
 		/*
 		 * Make theme available for translation.
 		 * Translations can be filed in the /languages/ directory.
 		 * If you're building a theme based on utk, use a find and replace
 		 * to change 'utk' to the name of your theme in all the template files.
 		 */
 		load_theme_textdomain( 'utk', get_template_directory() . '/languages' );

 		// Add default posts and comments RSS feed links to head.
 		add_theme_support( 'automatic-feed-links' );

 		/*
 		 * Let WordPress manage the document title.
 		 * By adding theme support, we declare that this theme does not use a
 		 * hard-coded <title> tag in the document head, and expect WordPress to
 		 * provide it for us.
 		 */
 		add_theme_support( 'title-tag' );
 		/*
 		 * Enable support for Post Thumbnails on posts and pages.
 		 *
 		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 		 */
     add_theme_support( 'post-thumbnails' );
 		// add_image_size( 'post-thumbnail', 1000, 400, true );
 		// add_image_size( 'category-news-thumbnail', 360, 240, true );
 		// add_image_size( 'portfolio-thumbnail', 360, 550, true );
    add_image_size( 'post-thumbnail', 1200, 800, true );
    add_image_size( 'news-thumbnail', 480, 480, true );
    add_image_size( 'full-thumbnail', 9999, 9999, true );
    add_image_size( 'icon-thumbnail', 64, 64, true );

 		// This theme uses wp_nav_menu() in one location.
 		register_nav_menus( array(
 			'navbar-left' => esc_html__( 'PrimaryLeft', 'utk' ),
 			'navbar-right' => esc_html__( 'PrimaryRight', 'utk' ),
 		) );

 		/*
 		 * Switch default core markup for search form, comment form, and comments
 		 * to output valid HTML5.
 		 */
 		add_theme_support( 'html5', array(
 			'search-form',
 			'comment-form',
 			'comment-list',
 			'gallery',
 			'caption',
 		) );

 		// Set up the WordPress core custom background feature.
 		add_theme_support( 'custom-background', apply_filters( 'utk_custom_background_args', array(
 			'default-color' => '222222',
 			'default-image' => '',
 		) ) );

 		// Add theme support for selective refresh for widgets.
 		add_theme_support( 'customize-selective-refresh-widgets' );

 		/**
 		 * Add support for core custom logo.
 		 *
 		 * @link https://codex.wordpress.org/Theme_Logo
 		 */
 		add_theme_support( 'custom-logo', array(
 			'height'      => 250,
 			'width'       => 250,
 			'flex-width'  => true,
 			'flex-height' => true,
 		) );
 	}
 endif;
 add_action( 'after_setup_theme', 'utk_setup' );


 /**
  * Enqueue scripts and styles.
  */
 function utk_scripts() {

 	//wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Kanit|Merriweather|Nunito&display=swap' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/static/fonts/fonts.css' );

 	// wp_enqueue_style( 'bootstrapCssCdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
 	wp_enqueue_style( 'bootstrapCss', get_template_directory_uri() . '/lib/bootstrap/dist/css/bootstrap.min.css' );

 	// wp_enqueue_style( 'swiperCssCdn', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css' );

 	// wp_enqueue_style( 'slickCssCdn', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css' );
 	wp_enqueue_style( 'slickCss', get_template_directory_uri() . '/lib/slick/slick/slick.css' );
 	// wp_enqueue_style( 'slickThemeCssCdn', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css' );
 	wp_enqueue_style( 'slickThemeCss', get_template_directory_uri() . '/lib/slick/slick/slick-theme.css' );

 	wp_enqueue_style( 'fontAwesomeCss', get_template_directory_uri() . '/lib/fontAwesomeCss.css' );
	//  wp_enqueue_style( 'fontAwesomeCss', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );

 	wp_enqueue_style( 'utk-style', get_stylesheet_uri() );
 	// wp_enqueue_style( 'utk-custom', get_stylesheet_uri().'/assets/custom.css' );

 	// wp_enqueue_script( 'jQueryCdn', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null , true );
 	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/lib/jquery/dist/jquery.min.js', array(), null , true );

 	// wp_enqueue_script( 'bootstrapJsCdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null , true  );
 	wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . '/lib/bootstrap/dist/js/bootstrap.min.js', array('jquery'), null , true  );

  // wp_enqueue_script( 'slickJsCdn', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js', array('jquery'), null , true  );
 	wp_enqueue_script( 'slickJs', get_template_directory_uri() . '/lib/slick/slick/slick.min.js', array('jquery'), null , true  );

 	// wp_enqueue_script( 'swiperJsCdn', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js', array('jQuery'), null , true  );

 	// wp_enqueue_script( 'jqMobileJsCdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.js', array('jQuery'), null , true  );

 	// wp_enqueue_script( 'masonryCdn', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.1/masonry.pkgd.min.js', array('jQuery'), null , true  );
 	//wp_enqueue_script( 'masonryCdn', 'https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007714979/custom/page/hack-a-thon-3/masonry.min.min.js', array('jQuery'), null , true  );

 	// wp_enqueue_script( 'isotopeCdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jQuery'), null , true  );
 	//wp_enqueue_script( 'isotopeCdn', 'https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007849180/custom/page/hack-a-thon-3/isotope.min.js', array('jQuery'), null , true  );

 	// wp_enqueue_script( 'mailchimpCdn', 'https://s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js', array('jQuery'), null , true  );

 	wp_enqueue_script( 'custom', get_template_directory_uri() . '/static/js/custom.js', array(), null, true );


 	wp_enqueue_script( 'utk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), null, true );
 	wp_enqueue_script( 'utk-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), null, true );

 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
 		wp_enqueue_script( 'comment-reply' );
 	}
 }
 add_action( 'wp_enqueue_scripts', 'utk_scripts' );

 // wp_register_script('jquery3', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true); // jQuery v3
 // wp_enqueue_script('jquery3');
 // wp_script_add_data( 'jquery3', array( 'integrity', 'crossorigin' ) , array( 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=', 'anonymous' ) );



 /**
  * Customizer additions.
  */
 require get_template_directory() . '/inc/customizer.php';
 require get_template_directory() . '/inc/customizer-library/customizer-library.php';
 require get_template_directory() . '/inc/customizer-options.php';
 /**
  * Custom edition of post types.
  */
 require get_template_directory() . '/inc/custom-post-types.php';
 /**
 * custom excerpts length
 * the_excerpt_max_charlength(10);
 */
 function the_excerpt_max_charlength( $charlength ){
 	$excerpt = get_the_excerpt();
 	$charlength++;

 	if ( mb_strlen( $excerpt ) > $charlength ) {
 		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
 		$exwords = explode( ' ', $subex );
 		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
 		if ( $excut < 0 ) {
 			echo mb_substr( $subex, 0, $excut );
 		} else {
 			echo $subex;
 		}
 		echo '...';
 	} else {
 		echo $excerpt;
 	}
 }
 /**
 * Возможность загружать SVG
 */
 function utk_myme_types($mime_types){
     $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
     return $mime_types;
 }
 add_filter('upload_mimes', 'utk_myme_types', 1, 1);

 /**
 * TGMPA
 */
 require   get_template_directory() . '/inc/tgmpa/tgmpa.php';
 // require   get_template_directory() . '/inc/tgmpa/example.php';

/**
* Shortcodes for icons
*
*/
add_shortcode( 'addSvgIcon', 'addSvgIcon' );
function addSvgIcon(){
 	$attr = shortcode_atts( array(
		'transportation' => '
    		<span class="services_icon">
        <svg class="feature-item__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 612">
          <path d="M12.57,385.084h316.849c4.735,0,8.61-3.875,8.61-8.609V119.809c0-14.266-11.564-25.83-25.83-25.83H29.791   c-14.266,0-25.83,11.564-25.83,25.83v256.664C3.96,381.209,7.835,385.084,12.57,385.084z M76.417,212.128   c0-5.902,4.784-10.687,10.687-10.687h84.528v-30.118c0-9.521,11.514-14.289,18.245-7.554l72.838,72.873   c4.171,4.173,4.171,10.938,0,15.11l-72.838,72.861c-6.732,6.734-18.245,1.967-18.245-7.555v-30.125H87.103   c-5.902,0-10.687-4.785-10.687-10.687V212.128z M113.48,454.221H8.61c-4.736,0-8.61-3.873-8.61-8.609v-26.174   c0-4.736,3.874-8.611,8.61-8.611h128.634C124.673,421.762,115.977,437.002,113.48,454.221z M603.39,410.828h-20.922V293.817   c0-13.689-4.133-27.121-11.796-38.486l-52.434-77.663c-12.83-18.942-34.183-30.307-57.085-30.307h-81.278   c-9.558,0-17.221,7.749-17.221,17.22v246.247H229.543c12.657,10.934,21.353,26.174,23.85,43.395h140.343   c4.994-34.182,34.44-60.615,70-60.615s64.919,26.434,69.913,60.615h69.741c4.736,0,8.61-3.875,8.61-8.611v-26.174   C612,414.703,608.126,410.828,603.39,410.828z M517.634,270.828h-107.28c-4.735,0-8.61-3.789-8.61-8.61v-59.495   c0-4.735,3.875-8.61,8.61-8.61h65.351c2.841,0,5.424,1.377,7.06,3.616l41.931,59.582   C528.654,262.994,524.608,270.828,517.634,270.828z M183.394,410.828c-29.532,0-53.555,24.021-53.555,53.641   c0,29.531,24.022,53.553,53.555,53.553c29.618,0,53.554-24.021,53.554-53.553C236.947,434.85,213.012,410.828,183.394,410.828z    M183.394,491.246c-14.81,0-26.777-12.055-26.777-26.777c0-14.811,11.968-26.777,26.777-26.777   c14.809,0,26.777,11.967,26.777,26.777C210.171,479.191,198.202,491.246,183.394,491.246z M463.735,410.828   c-29.618,0-53.555,24.021-53.555,53.641c0,29.531,23.937,53.553,53.555,53.553c29.532,0,53.554-24.021,53.554-53.553   C517.29,434.85,493.269,410.828,463.735,410.828z M463.735,491.246c-14.81,0-26.777-12.055-26.777-26.777   c0-14.811,11.968-26.777,26.777-26.777c14.809,0,26.777,11.967,26.777,26.777C490.513,479.191,478.545,491.246,463.735,491.246z"></path>
        </svg>
      </span>',
		'servicestation' => '
		    <span class="services_icon">
		      <svg class="feature-item__icon" xmlns="http://www.w3.org/2000/svg" height="36" width="36" viewBox="0 0 1024 1024">
          <path d="M286.547 465.016c16.843 16.812 81.716 85.279 81.716 85.279l35.968-37.093-56.373-58.248L456.072 340.02c0 0-48.842-47.623-27.468-28.655 20.438-75.903 1.812-160.589-55.842-220.243C315.608 31.936000000000035 234.392 12.529999999999973 161.425 32.903999999999996l123.653 127.715-32.53 125.309-121.06 33.438L7.898 191.61799999999994c-19.718 75.436-0.969 159.339 56.311 218.556C124.302 472.297 210.83 490.547 286.547 465.016zM698.815 589.231L549.694 736.539l245.932 254.805c20.062 20.812 46.498 31.188 72.872 31.188 26.25 0 52.624-10.375 72.811-31.188 40.249-41.624 40.249-108.997 0-150.62L698.815 589.231zM1023.681 161.83799999999997L867.06-0.0009999999999763531 405.387 477.297l56.373 58.248L185.425 821.161l-63.154 33.749-89.217 145.559 22.719 23.562 140.839-92.247 32.655-65.312 276.336-285.554 56.404 58.248L1023.681 161.83799999999997z"></path>
        </svg>
      </span>',
		'ecommerce' => '
    		<span class="services_icon">
    		  <svg class="feature-item__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
          			<path d="M384,238.933c-14.114,0-25.6,11.486-25.6,25.6c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533     c0-4.702,3.831-8.533,8.533-8.533c4.702,0,8.533,3.831,8.533,8.533c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533     C409.6,250.419,398.114,238.933,384,238.933z"></path>
          			<path d="M119.467,281.6v34.133c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533V281.6c0-4.71-3.823-8.533-8.533-8.533     S119.467,276.89,119.467,281.6z"></path>
          			<path d="M160.922,324.181c0.418,0.06,0.819,0.085,1.22,0.085c4.181,0,7.825-3.072,8.44-7.322l8.533-59.733     c0.247-1.724-0.043-3.473-0.811-5.026C177.186,249.958,166.298,230.4,128,230.4s-49.186,19.558-50.304,21.786     c-0.768,1.553-1.058,3.302-0.811,5.026l8.533,59.733c0.666,4.659,5.018,7.902,9.66,7.236c4.659-0.666,7.902-4.992,7.236-9.66     l-8.047-56.337c3.166-3.49,12.314-10.718,33.732-10.718c21.538,0,30.669,7.305,33.741,10.684l-8.055,56.371     C153.02,319.189,156.262,323.516,160.922,324.181z"></path>
          			<path d="M76.8,477.867H34.133V226.133c0-4.71-3.823-8.533-8.533-8.533c-4.71,0-8.533,3.823-8.533,8.533V486.4     c0,4.71,3.823,8.533,8.533,8.533h42.667v8.533c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533V486.4     C85.333,481.69,81.51,477.867,76.8,477.867z"></path>
          			<path d="M401.067,477.867H110.933c-4.71,0-8.533,3.823-8.533,8.533s3.823,8.533,8.533,8.533h290.133     c4.71,0,8.533-3.823,8.533-8.533S405.777,477.867,401.067,477.867z"></path>
          			<path d="M486.4,341.333H59.733c-4.71,0-8.533,3.823-8.533,8.533s3.823,8.533,8.533,8.533h418.133v119.467H435.2     c-4.71,0-8.533,3.823-8.533,8.533v17.067c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-8.533H486.4     c4.71,0,8.533-3.823,8.533-8.533V349.867C494.933,345.156,491.11,341.333,486.4,341.333z"></path>
          			<path d="M324.267,315.733c0,4.71,3.823,8.533,8.533,8.533c4.71,0,8.533-3.823,8.533-8.533c0-4.702,3.831-8.533,8.533-8.533     s8.533,3.831,8.533,8.533c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533c0-14.114-11.486-25.6-25.6-25.6     S324.267,301.619,324.267,315.733z"></path>
          			<path d="M486.4,217.6c-4.71,0-8.533,3.823-8.533,8.533v89.6c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-89.6     C494.933,221.423,491.11,217.6,486.4,217.6z"></path>
          			<path d="M469.333,0H42.667C19.14,0,0,19.14,0,42.667v152.738c0,2.569,1.152,4.992,3.132,6.613c1.988,1.613,4.591,2.27,7.1,1.749     c13.628-2.765,25.114-10.897,32.427-21.914c9.173,13.824,24.883,22.946,42.675,22.946c17.784,0,33.485-9.114,42.667-22.929     c9.182,13.815,24.883,22.929,42.667,22.929s33.485-9.114,42.667-22.929C222.515,195.686,238.217,204.8,256,204.8     c17.784,0,33.485-9.114,42.667-22.929c9.182,13.815,24.883,22.929,42.667,22.929c17.783,0,33.485-9.114,42.667-22.929     c9.182,13.815,24.883,22.929,42.667,22.929c17.792,0,33.502-9.122,42.675-22.946c7.313,11.017,18.799,19.149,32.427,21.914     c2.517,0.538,5.112-0.128,7.1-1.749c1.98-1.621,3.132-4.045,3.132-6.613V42.667C512,19.14,492.86,0,469.333,0z M494.933,183.159     c-10.3-5.973-17.067-17.143-17.067-29.559V42.667c0-4.71-3.823-8.533-8.533-8.533s-8.533,3.823-8.533,8.533V153.6     c0,18.825-15.309,34.133-34.133,34.133s-34.133-15.309-34.133-34.133V42.667c0-4.71-3.823-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533V153.6c0,18.825-15.309,34.133-34.133,34.133c-18.825,0-34.133-15.309-34.133-34.133V42.667     c0-4.71-3.823-8.533-8.533-8.533s-8.533,3.823-8.533,8.533V153.6c0,18.825-15.309,34.133-34.133,34.133     c-18.825,0-34.133-15.309-34.133-34.133V42.667c0-4.71-3.823-8.533-8.533-8.533c-4.71,0-8.533,3.823-8.533,8.533V153.6     c0,18.825-15.309,34.133-34.133,34.133s-34.133-15.309-34.133-34.133V42.667c0-4.71-3.823-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533V153.6c0,18.825-15.309,34.133-34.133,34.133c-18.825,0-34.133-15.309-34.133-34.133V42.667     c0-4.71-3.823-8.533-8.533-8.533c-4.71,0-8.533,3.823-8.533,8.533V153.6c0,12.416-6.767,23.586-17.067,29.559V42.667     c0-14.114,11.486-25.6,25.6-25.6h426.667c14.114,0,25.6,11.486,25.6,25.6V183.159z"></path>
          			<path d="M256,315.733c0,4.71,3.823,8.533,8.533,8.533c4.71,0,8.533-3.823,8.533-8.533c0-4.702,3.831-8.533,8.533-8.533     c4.702,0,8.533,3.831,8.533,8.533c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533c0-14.114-11.486-25.6-25.6-25.6     S256,301.619,256,315.733z"></path>
          			<path d="M315.733,238.933c-14.114,0-25.6,11.486-25.6,25.6c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533     c0-4.702,3.831-8.533,8.533-8.533s8.533,3.831,8.533,8.533c0,4.71,3.823,8.533,8.533,8.533c4.71,0,8.533-3.823,8.533-8.533     C341.333,250.419,329.847,238.933,315.733,238.933z"></path>
          			<path d="M392.533,315.733c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533c0-4.702,3.831-8.533,8.533-8.533     s8.533,3.831,8.533,8.533c0,4.71,3.823,8.533,8.533,8.533s8.533-3.823,8.533-8.533c0-14.114-11.486-25.6-25.6-25.6     S392.533,301.619,392.533,315.733z"></path>0
          </g>
        </svg>
		    </span>'
	), $atts );

	return "foo = {$attr['foo']}";
}
// function utk_check_theme_updates() {
 
//     // do something
// }
// add_action( 'check_updates','utk_check_theme_updates' );
 
// put this line inside a function, 
// presumably in response to something the user does
// otherwise it will schedule a new event on every page visit
 
// wp_schedule_single_event( time() + 3600, 'check_updates' );
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );