<?php
/**
 *
 * @link https://utk.net.ua
 *
 * @package utk
 */
?>

		<?php
		get_header();

		// if ( have_posts() ) :
		//
		// 	if ( is_home() && ! is_front_page() ) :
				?>

        	<div id="primary" class="content-area">

				<?php get_template_part( 'template-parts/index', 'aboutus' ); ?>
				<?php get_template_part( 'template-parts/index', 'services' ); ?>
				<?php get_template_part( 'template-parts/index', 'team' ); ?>
        <?php get_template_part( 'template-parts/index', 'features' ); ?>
          </div>
				</main>
				<?php
			// endif;

			/* Start the Loop */
			//while ( have_posts() ) : the_post(); ?>

				<?php
				//wp_list_pages( 'sort_column=post_title&sort_order=DESC' )

				?>
				<?php

				//echo '<div style="color:red;font-size:30px;font-weight:bold;">//DEBUG: posts loop statrted from index.php</div>';
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

			//endwhile;



		// else :
		//
		// 	get_template_part( 'template-parts/content', 'none' );
		//
		//
		// endif;
		?>

<?php
// get_sidebar();
get_footer();
